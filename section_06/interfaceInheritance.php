
<?php
interface AdvancedLogger {
    public function log($message);
    public function getLogCount();
}

class ApplicationLogger implements AdvancedLogger {
    private $logCount = 0;

    public function log($message) {
        // Implementation of log method
        echo $message;
        $this->logCount++;
    }

    public function getLogCount() {
        // Implementation of getLogCount method
        return $this->logCount;
    }
}

// Example usage
$logger = new ApplicationLogger();
$logger->log("This is a log message.");
echo $logger->getLogCount(); // Outputs: 1
?>