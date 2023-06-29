<?php
    //iniciando sessão
    // session_start();
    //adicionar as variaves de conexão
    include('conections.php');
    //verificação se os campos estão vazios
    // var_dump($_SERVER["REQUEST_URI"]) . "<br>";
    echo var_dump($_REQUEST);
    // echo var_dump($_POST);

    if(isset($_REQUEST)){
        echo $_REQUEST["user"];
        echo $_REQUEST["password"];
    } 
    if(empty($_REQUEST['user'])||empty($_REQUEST['password'])){
        header('Location: index.php');
        echo "user or password is missing";
        exit();
    }
    //prevenir slq injection
    $user=mysqli_real_escape_string($conn,$_REQUEST['user']);
    $password=mysqli_real_escape_string($conn,$_REQUEST['password']);

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
        print "session create";
        exit();
    }else {
        print "erro de dados";
        header('Location: index.php');//voltando para a tela de login
        exit();
    }
?>