<?php

require_once 'AbstractLogger.php';
require_once 'FileLogger.php';
require_once 'DatabaseLogger.php';


class LoggerCollection {

    private $loggers = [];  // hierin komen alle FileLogger en DatabaseLogger objecten

    public function __construct() {
        // create empty array
    }

    public function AddFileLogger($severity, $filename) {
        // create a new FileLogger and add it to array
        $fl = new FileLogger($severity, $filename);
        $this->loggers[]= $fl;
    }

    public function AddDatabaseLogger($severity) {
        // create a new DatabaseLogger and add it to array
        $fl = new DatabaseLogger($severity);
        $this->loggers[]= $fl;
    }

    public function LogError($message) {
        // call "log" function on all File- and DatabaseLoggers.
        foreach($this->loggers as $logger) {
            $logger->LogError($message);
        }
    }
    public function LogWarning($message) {
        // call "log" function on all File- and DatabaseLoggers.
    }
    public function LogInfo($message) {
        // call "log" function on all File- and DatabaseLoggers.
    }
}