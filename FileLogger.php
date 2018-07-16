<?php

require_once 'AbstractLogger.php';

class FileLogger extends AbstractLogger {

    private function log($severity, $message) {
        // write logmessage to file or database
        echo "FILE:".$severity, ": ", $message . "<br>\n";
    }

}