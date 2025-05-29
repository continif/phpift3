// filepath: /phpift3/phpift3/src/helpers/index.php
<?php
/**
 * Helper functions for the PhpIFT³ library.
 *
 * This file contains utility functions that assist in the operation of the
 * IFT and IFTCron classes.
 */

/**
 * Example helper function that formats a date.
 *
 * @param string $dateString The date string to format.
 * @param string $format The format to apply to the date.
 * @return string The formatted date.
 */
function formatDate($dateString, $format = 'Y-m-d H:i:s') {
    $date = new DateTime($dateString);
    return $date->format($format);
}

/**
 * Example helper function that checks if a value is callable.
 *
 * @param mixed $value The value to check.
 * @return bool True if the value is callable, false otherwise.
 */
function isCallable($value) {
    return is_callable($value);
}

// Additional helper functions can be added here.