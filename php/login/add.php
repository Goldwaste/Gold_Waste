<?php
 
require_once 'init.php';
 
// pega os dados do formuário
$name = isset($_POST['name']) ? $_POST['name'] : null;
$email = isset($_POST['email']) ? $_POST['email'] : null;
$password = isset($_POST['password']) ? $_POST['password'] : null;
$cidade = isset($_POST['cidade']) ? $_POST['cidade'] : null;
$estado = isset($_POST['estado']) ? $_POST['estado'] : null;
$phone = isset($_POST['phone']) ? $_POST['phone'] : null;

 
 
// validação (bem simples, só pra evitar dados vazios)
if (empty($name) || empty($email) || empty($estado) || empty($phone) || empty($password) || empty($cidade))
{
    echo "Volte e preencha todos os campos";
    exit;
}
//Criptografar a senha
$password = sha1(md5($password));

 
// insere no banco
$PDO = db_connect();
$sql = "INSERT INTO users(name, email, cidade, estado,phone,password) VALUES(:name, :email, :cidade, :estado, :phone, :password)";
$stmt = $PDO->prepare($sql);
$stmt->bindParam(':name', $name);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':cidade', $cidade);
$stmt->bindParam(':estado', $estado);
$stmt->bindParam(':phone', $phone);
$stmt->bindParam(':password', $password);
;
 
 
if ($stmt->execute())
{
    header('Location: form-login.php');
}
else
{
    echo "Erro ao cadastrar";
    print_r($stmt->errorInfo());
}