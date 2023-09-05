<?php //codice PHP crea una connessione al database MySQL utilizzando l'estensione mysqli. 
//Se la connessione viene stabilita correttamente, l'oggetto di connessione ($connessione) può essere utilizzato per eseguire query e operazioni sul database. 
//Se la connessione fallisce, viene visualizzato un messaggio di errore e lo script viene interrotto.

//info connessione al database:
$host = "127.0.0.1"; //L'indirizzo IP o il nome del server del database. In questo caso, è "127.0.0.1", che rappresenta l'indirizzo IP locale.
$user = "root"; //nome utente per accedere al database -> "root"
$password = ""; //password associata all'utente per l'accesso al database.
$db = "formprova"; //nome del database a cui si desidera connettersi, in questo caso "formprova".


$connessione = new mysqli($host, $user, $password, $db); //istanziato cioè viene creato un oggetto della classe mysqli che rappresenta la connessione al database. 
//Vengono passati i parametri necessari per stabilire la connessione, ovvero indirizzo IP/nome del server, nome utente, password e nome del database


if($connessione === false){
    die("Errore durante la connessione: " . $connessione->connect_error); //viene verificato se l'oggetto di connessione ($connessione) è stato creato correttamente. 
    //Se la connessione non è stata stabilita correttamente, l'istruzione die() viene utilizzata per terminare lo script e stampare un messaggio di errore che include la descrizione dell'errore restituito da connect_error.

}

?>