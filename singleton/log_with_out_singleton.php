<?php

class LoggerWithOutSingleton {
    private $file;

    public function __construct() {
        $this->file = fopen("singleton/app.log", "a");
    }

    public function log($message) {
        fwrite($this->file, date("Y-m-d H:i:s") . " - " . $message . "\n");
    }
}