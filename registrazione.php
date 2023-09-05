
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrati al blog di Cime</title>



    <style>


body{
    display: flex;
    justify-content: center;
    font-family: Arial, Helvetica, sans-serif;
    

}

    form {

        display: flex;
        flex-direction: column;
        width: 350px;

    }

   form > input {
    margin-bottom: 25px;
    margin-top: 10px;

   }

   h1, h2, h3 {
    text-align: center;
    color: orange;
    margin-bottom: 5px;
  
   }


</style>


</head>
<body>
    

<form action="scriptregistrazione.php" method="POST">
<h1>Registrati</h1>
<h2>Inizia a condividere i tuoi pensieri...</h2>
<label for="email">Email</label>
<input type="text" name="email" id="email" placeholder="Inserisci l'email" required>

<label for="nickname">Nickname</label>
<input type="text" name="nickname" id="nickname" placeholder="Inserisci un nickname" required>

<label for="password">Password</label>
<input type="password" name="password" id="password" placeholder="Inserisci password" required>

<input type="submit" value="Registrati al blog">
<p>Hai già un account?<a href="login.php"> Allora Accedi!</a></p>



</form>


</body>
</html>