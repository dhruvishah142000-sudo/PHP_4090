<?php

//4. Plugin System with Function Existence Check

class PluginManager {
    private $plugins = [];

    // Load plugin file and register its functions
    public function loadPlugin($pluginFile) {
        if (file_exists($pluginFile)) {
            include_once $pluginFile;
            $this->plugins[] = $pluginFile;
        } else {
            echo "Plugin file $pluginFile not found.\n";
        }
    }

    // Safely execute a function if it exists
    public function executeFunction($functionName, ...$args) {
        if (function_exists($functionName)) {
            return call_user_func_array($functionName, $args);
        } else {
            echo "Function $functionName does not exist.\n";
            return null;
        }
    }
}

// Usage
$pluginManager = new PluginManager();

// Load a plugin
$pluginManager->loadPlugin('plugins/GreetingPlugin.php');

// Try executing a function from the plugin
$result = $pluginManager->executeFunction('greetUser', 'Alice');

if ($result !== null) {
    echo $result;
}
?>

