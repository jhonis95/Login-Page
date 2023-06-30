<?php
    //iniciando sessão
    session_start();
    //adicionar as variaves de conexão
    include('conections.php');

    $data=file_get_contents('php://input');
    $_POST=json_decode($data);

    $resUser=$_POST->user;
    $resPassword=$_POST->password;
    // prevenir slq injection
    $user=mysqli_real_escape_string($conn,$resUser);
    $password=mysqli_real_escape_string($conn,$resPassword);
    
    //to check the response
    // $mess= array(
    //     'reques'=>$_REQUEST,
    //     'post'=>$_POST,
    //     // // 'server'=>$_SERVER,
    //     // 'data'=>$data,
    //     'sqlUser'=>$user,
    //     'sqlPassword'=>$password
    // );
    // echo json_encode($mess);

    //montar a query para vereficação no banco de dados
    $sql="select * from users where user='{$user}' and password='{$password}'";

    //executando a query no banco de dados
    $result=mysqli_query($conn,$sql);

    //vendo numero de rows
    $row=mysqli_num_rows($result);

    //vereficando se a row existe
    if($row==1){//se existe
        $_SESSION['user']=$user;//criando a sessão do usuario
        // header('Location: AppUser.php');//indo para o app
        $page= array(
            'location'=>'AppUser.php',
            'session'=>$_SESSION
        );
        echo json_encode($page);
        exit();
    }else {
        $mess= array(
            'messenge'=>'Deu Ruim'
        );
        echo json_encode($mess);
        // header('Location: index.php');//voltando para a tela de login
        exit();
    }
?>