<?php
if(isset($_POST['submit'])){
    include ('config.php');

    $email = mysqli_real_escape_string($con,$_POST['email']);
    $senha = mysqli_real_escape_string($con,$_POST['senha']);

    $query = ("SELECT * FROM `cad_user` WHERE email = '$email' and senha = '$senha'");
    $result = mysqli_query($con,$query);
    
    if(mysqli_num_rows($result) < 1){
        echo "<script>alert('Usuário não foi encontrado');</script>";
    } else {
        echo "<script>alert('Bem vindo!');</script>";
    }

} else{
    header('location : login.php');
}

?>