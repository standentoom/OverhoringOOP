<?php

class AbstractLogger {

    private $severity;

    // when severity = error, then show all errors
    // when severity = warning, then show errors and warnings
    // when severity = info, then show everything
    public function __construct($sev) {
        $this->severity = $sev;
        if ( $sev != "error" && $sev !="warning" && $sev!="info") {
            die("ERROR: You try to create an AbstractLogger with invalid severity parameter: " . $sev);
        }

        echo "Created new AbstractLogger with severity: [" . $sev. "]<br>\n";
    }

    public function LogError($message) {
        $this->log("error", $message);
    }

    public function LogWarning($message) {
        if($this->severity == "info"
            | $this->severity=="warning") {
            $this->log("warning", $message);
        }
    }

    public function LogInfo($message) {
        if($this->severity == "info") {
            $this->log("info", $message);
        }
    }

    private function log($severity, $message) {
        // write logmessage to file or database
        echo $severity, ": ", $message . "<br>\n";
    }
}