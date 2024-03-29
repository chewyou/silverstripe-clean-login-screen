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

        Requirements::javascript('chewyou/silverstripe-clean-login-screen:client/js/main.js');
        Requirements::css('chewyou/silverstripe-clean-login-screen:client/vendor/bulma/css/bulma.css');
        Requirements::css('chewyou/silverstripe-clean-login-screen:client/css/main.css');
    }
}
