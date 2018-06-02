<?php
require 'init.php';
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
 
        <title>Cadastro de Usuário Gold Waste</title>
    </head>
 
    <body>
 
        <h1>Sistema de Cadastro - Gold Waste</h1>
 
        <h2>Cadastro de Usuário</h2>
         
        <form action="add.php" method="post">
            <label for="name">Nome: </label>
            <br>
            <input type="text" name="name" id="name">
 
            <br><br>
 
            <label for="email">Email: </label>
            <br>
            <input type="text" name="email" id="email">
 
            <br><br>

            <label for="password">Senha: </label>
            <br>
            <input type="password" name="password" id="password">
             
            <br><br>
            
            <label for="estado">Estado: </label>
             <br>
            <input type="text" name="estado" id="estado">

            <br><br>
 
            <label for="email">Cidade: </label>
             <br>
            <input type="text" name="cidade" id="cidade">
 
            <br><br>

            <label for="email">Telefone Celular: </label>
             <br>
            <input type="text" name="phone" id="phone">
            <br><br>
 
            <input type="submit" value="Cadastrar">
        </form>
 
    </body>
</html>