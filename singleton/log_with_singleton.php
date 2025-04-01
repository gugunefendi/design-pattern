<?php

class LogWithSingleton {
    private static $instance = null;
    private $file;

    private function __construct() {
        $this->file = fopen("singleton/app.log", "a");
    }

    // Method untuk mendapatkan satu-satunya instance Logger
    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new LogWithSingleton();
        }
        return self::$instance;
    }

    public function log($message) {
        fwrite($this->file, date("Y-m-d H:i:s") . " - " . $message . "\n");
    }
}