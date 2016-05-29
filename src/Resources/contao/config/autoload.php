<?php

/*
 * This file is part of the Logo Bundle.
 *
 * (c) Daniel Kiesel <https://github.com/iCodr8>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Register the namespaces
 */
ClassLoader::addNamespaces(array
(
    'Craffft\\Logo',
));

/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
    // Modules
    'Craffft\\Logo\\ModuleLogo' => 'system/modules/logo/modules/ModuleLogo.php',
));

/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
    'mod_logo' => 'system/modules/logo/templates',
));
