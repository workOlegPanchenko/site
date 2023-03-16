<?php 

$login = $_POST['login'];
$pass = $_POST['pass'];
$email = $_POST['email'];
$tel = $_POST['tel'];


if(mail("admin@gmail.com",
        "Нове письмо з сайту",
        "Login: ".$login."/n".
        "Password: ".$pass."/n".
        "Email: ".$email."/n".
        "Telephone: ".$tel."/n",
        "From: my-site /r/n")

) {
echo "done";
} else {
    echo "error";
}

?>