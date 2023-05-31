<!--connection database-->

<?php

$serverName = "localhost";
$userName ="root";
$password ="";
$dbName = "blog"; 

//create connection 

$conn = mysqli_connect($serverName, $userName, $password, $dbName);

//check connection
if(mysqli_connect_errno()) 
{
    echo " <h3 class ='container bg-dark text-center p-3 text-warning rpunded-lg mt-5'>Failed to Connect</h3>";
    exit();
} else
{
    // echo " <h3 class ='container bg-dark text-center p-3 text-warning rpunded-lg mt-5'>Connection Success!</h3>";
}


$sql = "SELECT * FROM data";
$query = mysqli_query($conn, $sql);



// insert data into db
if(isset($_REQUEST["new_post"])) //determiniamo se una variabile è dischiarato o differente al NULL, inq questo caso dichiariano che $_Request contiene new_post (button)
{
    $title = $_REQUEST["title"]; // titile è il "name" inserito all'interno del form
    $content = $_REQUEST["content"];

// eseguiamo la query

    $sql = "INSERT INTO data(title, content) VALUES ('$title','$content')";
    mysqli_query($conn, $sql);

    header("location: index.php?info=added");
    exit();
}




?>