<?php

if (! function_exists('adminer_object')) {
    function adminer_object(): AdminerPlugin
    {
        // required to run any plugin
        // include_once  base_path('/adminer/plugins/plugin.php');

        $plugins = [];
        // autoloader
        foreach (glob(__DIR__ . '/../resources/adminer/plugins/*.php') as $filename) {
            include_once "$filename";
        }

        foreach (config('adminer-plugins.plugins') as $plugin) {
            $plugins[] = new $plugin;
        }

        /* It is possible to combine customization and plugins:
        class AdminerCustomization extends AdminerPlugin {
        }
        return new AdminerCustomization($plugins);
        */

        return new AdminerPlugin($plugins);
    }
}
