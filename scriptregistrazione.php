<?php


require_once('configurazione.php');

//$email = $_POST['email'];
$email = $connessione->real_escape_string($_POST['email']);
$nickname = $connessione->real_escape_string($_POST['nickname']);
$password = $connessione->real_escape_string($_POST['password']);
$hashed_password = password_hash($password, PASSWORD_DEFAULT);


$sql = "INSERT INTO utente (email, nickname, password) VALUES ('$email', '$nickname', '$hashed_password')";
if($connessione->query($sql) === true){
   echo "Registrazione effettuata con succcesso";
}else{
    echo "Errore durante la registrazione $sql. " . $connessione->error;
}

?>