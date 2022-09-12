<?php
    //iniciando sessão
    session_start();
    //adicionar as variaves de conexão
    include('conections.php');
    //verificação se os campos estão vazios
    if(empty($_POST['user'])||empty($_POST['password'])){
        header('Location: index.php');
        exit();
    }
    //prevenir slq injection
    $user=mysqli_real_escape_string($conn,$_POST['user']);
    $password=mysqli_real_escape_string($conn,$_POST['password']);

    //montar a query para vereficação no banco de dados
    $sql="select * from users where user='{$user}' and password='{$password}'";

    //executando a query no banco de dados
    $result=mysqli_query($conn,$sql);

    //vendo numero de rows
    $row=mysqli_num_rows($result);

    //vereficando se a row existe
    if($row==1){//se existe
        $_SESSION['user']=$user;//criando a sessão do usuario
        header('Location: AppUser.php');//indo para o app
        exit();
    }else {
        header('Location: index.php');//voltando para a tela de login
        exit();
    }
?>