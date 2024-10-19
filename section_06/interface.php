<!-- In PHP, an interface is a programming construct that allows you to define a contract for classes. 
An interface only declares methods that a class must implement, without providing any implementation itself. 
This ensures that any class that implements the interface adheres to a specific set of methods,
which helps to enforce consistency across different classes. -->

<!-- To define an interface in PHP, you use the interface keyword followed by the interface name and a set of method declarations. -->

<?php
interface Logger {
    public function log($message);
}

interface Counter {
    public function getLogCount();
}

class ApplicationLogger implements Logger, Counter {
    public $logCount = 0;

    public function log($message) {
        // Implementation of log method
        echo $message;
        $this->logCount++;
    }

    public function getLogCount() {
        // Implementation of getLogCount method
        return $this->logCount;
    }

    public function increment() {
        // Implementation of increment method
        $this->logCount++;
    }
}

// Example usage
$logger = new ApplicationLogger();
$logger->log("This is a log message.\n");
echo "Log count: " . $logger->getLogCount(); // Outputs: Log count: 1
?>