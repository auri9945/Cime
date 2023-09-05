<?php


require_once('configurazione.php');

$nickname = $connessione->real_escape_string($_POST['nickname']);
$password = $connessione->real_escape_string($_POST['password']);
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

if($_SERVER["REQUEST_METHOD"] === "POST"){



    $sql_select = "SELECT * FROM utente WHERE nickname = '$nickname'";
if($result = $connessione->query($sql_select)){
    if($result->num_rows == 1){
        $row = $result->fetch_array(MYSQLI_ASSOC);

        if(password_verify($password, $row['password'])){
            session_start();

            $_SESSION['loggato'] = true;
            $_SESSION['id'] = $row['id'];
            $_SESSION['nickname'] = $row['nickname'];


            header("location: areautente.php");

        }else{
           echo "La password è sbagliata";
        }

       }else{
            echo "Non ci sono account con quel nickname";
       }

      }else{
           echo"Errore in fase di Login";  
}

$connessione->close();

}

?>