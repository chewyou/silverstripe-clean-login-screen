<!doctype html>
<html lang="$ContentLocale">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1"/>
    <meta charset="utf-8"/>

    <% base_tag %>

    <title>$Title.XML</title>
    $MetaTags(false)

    <!--  Mobile Viewport (for responsive build) -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>

    <!-- Apple fullscreen mode hinting -->
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="black"/>

    $LoginScreenRequirements

</head>

<body>

    <% include LoginForm %>

</body>
</html>
