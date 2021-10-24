<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Exercício - Biblioteca</title>
    </head>
    <body>
        <pre>
        <?php
            require_once 'Pessoa.php';
            require_once 'Livro.php';
            
            $p[0] = new Pessoa("Laura", 19, "F");
            $p[1] = new Pessoa("Bruno", 23, "M");
            
            $l[0] = new Livro("The Lord of the Rings", "Tolkien", 1600, $p[0]);
            $l[1] = new Livro("Crônicas de Gelo e Fogo", "Martin", 3200, $p[0]);
            $l[2] = new Livro("Meu pé de laranja lima", "Vasconcelos", 300, $p[1]);
        
            //testes
            $l[0]->abrir();
            $l[0]->folhear(45);
            $l[0]->voltarPag();
            $l[0]->detalhes();
        
        ?>
        </pre>
    </body>
</html>
