<?php

if (! function_exists('adminer_object')) {
    function adminer_object(): AdminerPlugin
    {
        // required to run any plugin
        // include_once  base_path('/adminer/plugins/plugin.php');

        // autoloader
        foreach (glob(__DIR__ . '/../resources/adminer/plugins/*.php') as $filename) {
            include_once "$filename";
        }

        $plugins = config('adminer-plugins.plugins');

        /* It is possible to combine customization and plugins:
        class AdminerCustomization extends AdminerPlugin {
        }
        return new AdminerCustomization($plugins);
        */

        return new AdminerPlugin($plugins);
    }
}
