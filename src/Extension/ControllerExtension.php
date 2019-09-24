<?php

namespace Chewyou\LoginScreen\Extension;

use SilverStripe\Core\Extension;
use SilverStripe\View\Requirements;
use SilverStripe\Control\Director;

class ControllerExtension extends Extension
{
    public function LoginScreenRequirements()
    {
        Requirements::clear();

        Requirements::javascript('education/login-screen:client/dist/dist/js/main.js');
        Requirements::css('education/login-screen:client/dist/css/main.css');
    }

    public function getServerName()
    {
        global $project;

        if ($project) {
            if (Director::isLive()) {
                return strtoupper($project);
            } else {
                if (Director::isTest()) {
                    return strtoupper($project) . " TEST";
                } else {
                    if (Director::isDev()) {
                        return strtoupper($project) . " DEV";
                    }
                }
            }
        }
    }

    /**
     * Optionally hide the Logo
     *
     * @return boolean
     */
    public function getHideMoeLogo()
    {
        return (defined('EDUCATION_REMOVE_BRANDING') && EDUCATION_REMOVE_BRANDING);
    }
}
