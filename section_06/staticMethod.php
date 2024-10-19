<?php

// self:: vs. static::: self:: is used within the same class, while static:: is used for late static binding, useful in inheritance.
class Logger {
    public static $logCount = 0; // Static property

    public static function log($message) { // Static method
        echo $message . "\n";
        self::$logCount++;
    }

    public static function getLogCount() {
        return self::$logCount;
    }
}

Logger::log("First log message.");  // Output: First log message.
Logger::log("Second log message."); // Output: Second log message.

echo "Log count: " . Logger::getLogCount(); // Output: Log count: 2
class Counter {
    public static $count = 0; // Static property

    public static function increment() {
        self::$count++; // Accessing static property using self
    }
}

Counter::increment(); // No need to create an instance
Counter::increment();

echo Counter::$count; // Output: 2