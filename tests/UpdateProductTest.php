<?php
use PHPUnit\Framework\TestCase;

class UpdateProductTest extends TestCase {
    public function testUpdateProduct() {
        $_POST['id'] = 1; 
        $_POST['nome'] = 'Novo Nome do Produto';
        $_POST['descricao'] = 'Nova Descrição do Produto';

        require '../editar.php';

        $this->assertTrue($produtoFoiAtualizadoCorretamente); 
    }
}
