<?php

class Produto extends PDO{

    //atributos 
    private $nome;
    private $descricao;
    public $preco;
    
    
    // métodos
    public function __construct( string $nome, string $descricao, float $preco ){
        
        $this->nome = $nome;
        $this->descricao = $descricao;
        $this->preco = $preco;

        // rodando a construtora da PDO
        parent::__construct('mysql:dbname=aulaphp;host=localhost','root','');
    }

    public function setNome(string $nome):bool{
        return $this->nome =$nome;
    }
    public function setDescricao(string $descricao):bool{
        return $this->descricao =$descricao;
    }
    public function setPreco(string $preco):bool{
        return $this->preco = $preco;
    }

    public function gravar(): bool{
        $stmt = $this->prepare('INSERT INTO produtos 
                                    (nome, descricao, preco)
                                VALUES
                                    (:nome, :descricao, :preco)');

        $stmt -> bindParam(':nome', $this->nome);
        $stmt -> bindParam(':descricao', $this->descricao);
        $stmt -> bindParam(':preco', $this->preco);

        return $stmt -> execute();
    }
}

//$objProduto = new Produto('PS5','Super console',5000.00);

/*
$smartphone = new Produto;
$shampoo = new Produto;
$smartphone -> setNome('Xingling 111');
$shampoo -> setNome('redForevs');

echo $smartphone->getNome();
echo '<br>';
echo $shampoo->getNome();
echo '<br>';*/