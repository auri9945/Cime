<!--connection between the backen and frontend-->

<?php

// connessione tramite mysql_connect()
$conn = mysqli_connect("localhost", "username","password");

//check cnnection
if(!$conn){ // se la connessione non è attiva andrà a stampare il testo di avviso posto nel tag h3
    echo "<h3 class='container bg-dark text-center p-3 text-warning roundedn-tg mt-5'> not able to establish Database connection</h3>"
}

?>