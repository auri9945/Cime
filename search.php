<?php
    include "logic.php";
    /*include "gestione/config.php";
    require_once "gestione/connessione_db.php"; //connessione db */
    $conn = mysqli_connect($serverName, $userName, $password, $dbName); //seleziono il database e connetto

    //funzione di ricerca post
    function searchPost($testoRicerca) {
    }

    // ricevo l'input dal bottone di ricerca
    if (isset($_REQUEST['searchPost'])) {
        searchPost($_REQUEST['searchBar']);
    }

    //recupero quello che hanno scritto
    $subject = $_POST['subject'];

    //query mysql
    $sql= 'SELECT * FROM subject';
    mysqli_query($conn, $sql);

    /* se ci sono risultati */
    if (isset($_GET["c"])) {
        $_SESSION["subject"] = $_GET[""];
        $msg = "subject ".$_SESSION["subject"]." trovata con successo.";
    } else {
        $msg = "Non ho trovato la materia corrispondente";
        if(!function_exists('debug_to_console')) {
            function debug_to_console($msg) {
            $output = $msg;
            }
        }
    }
?>