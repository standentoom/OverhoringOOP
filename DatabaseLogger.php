<?php

require_once 'AbstractLogger.php';

class DatabaseLogger extends AbstractLogger {

    private function log($severity, $message) {
        // write logmessage to file or database
        echo "DB:" . $severity, ": ", $message . "<br>\n";
    }
}