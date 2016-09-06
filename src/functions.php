<?php
/**
 * Any procedural code/helpers.
 */

function logMessage($message, $file = null) {
    $file_path = LOGS_DIR . (is_null($file) ? date("Y-m-d") : $file) . ".log";

    // Sanitization
    $sanitized_message = str_replace("\r", "[CR]", $message);
    $sanitized_message = str_replace("\n", "[LF]", $sanitized_message);

    $log_line = "[ " . date("Y-m-d H:i:s") . " ] " . $sanitized_message . PHP_EOL;

    file_put_contents($file_path, $log_line, FILE_APPEND);
}
