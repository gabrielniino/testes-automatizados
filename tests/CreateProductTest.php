<?php
use PHPUnit\Framework\TestCase;

class CreateProductTest extends TestCase {
    public function testCreateProduct() {

        $_POST['nome'] = 'Produto de Teste';
        $_POST['descricao'] = 'Descrição de teste';

        require '../adicionar.php';

        $this->assertTrue($produtoFoiInseridoCorretamente); 
    }
}
