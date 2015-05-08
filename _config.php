<?php

// Set the module directory so we know where JS, etc lives.
define('COLORS_BASE', basename(dirname(__FILE__)));
SiteConfig::add_extension('Colors_SiteConfigExtension');
LeftAndMain::require_css(COLORS_BASE . '/css/cms/min.css');