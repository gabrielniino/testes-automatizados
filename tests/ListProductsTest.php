<?php
use PHPUnit\Framework\TestCase;

class ListProductsTest extends TestCase {
    public function testListProducts() {

        $products = getProductsFromDatabase(); 

        require '../index.php';

        foreach ($products as $product) {
            $this->assertStringContainsString($product['nome'], ob_get_clean()); 
            $this->assertStringContainsString($product['descricao'], ob_get_clean());
        }
    }
}
