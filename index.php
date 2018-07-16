<?php

require 'LoggerCollection.php';

$logger = new LoggerCollection();
$logger->AddFileLogger("info", "log-errors.txt");
$logger->AddDatabaseLogger("error");

PrettyPrint($logger);

// use the loggercollection to send message to all configured loggers
$logger->LogError("this is an error");
$logger->LogWarning("this is a warning");
$logger->LogInfo("this is an information message");






function PrettyPrint($var) {
    echo "<pre>";
    print_r($var);
    echo "</pre>";
}