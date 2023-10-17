<?php
use PHPUnit\Framework\TestCase;

class DatabaseConnectionTest extends TestCase {
    public function testDatabaseConnection() {
        $conn = $this->getMockBuilder('mysqli')
                     ->disableOriginalConstructor()
                     ->getMock();

        $conn->expects($this->any())
             ->method('connect_error')
             ->willReturn(null);

        require '../conexao.php';

        $this->assertInstanceOf(mysqli::class, $conn);
    }
}
