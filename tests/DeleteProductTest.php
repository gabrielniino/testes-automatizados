<?php
use PHPUnit\Framework\TestCase;

class DeleteProductTest extends TestCase {
    public function testDeleteProduct() {
        $_GET['id'] = 1; 

        require '../remover.php';

        $this->expectOutputString(''); 
        $this->assertDeletionRequestedSuccessfully(); 
    }
}
