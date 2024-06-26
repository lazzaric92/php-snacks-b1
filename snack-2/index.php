<!-- // todo: Con un form passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare "Accesso riuscito", altrimenti "Accesso negato" -->
<?php 
$userName = $_GET["userName"] ?? "";
$userEmail = $_GET["userEmail"] ?? "";
$userAge = $_GET["userAge"] ?? "";

?>

<form action="./index.php" method="GET">
    <div>
        <label for="userName">Type your name</label>
        <input type="text" name="userName" id="userName">
    </div>
    <div>
        <label for="userEmail">Type your email</label>
        <input type="email" name="userEmail" id="userEmail">
    </div>
    <div>
        <label for="userAge">Type your age</label>
        <input type="number" name="userAge" id="userAge">
    </div>
    <button type="submit">Invia</button>
</form>

<h1>
    <?php  
        if (strlen($userName) > 3 && str_contains($userEmail, ".") && str_contains($userEmail, "@") && is_numeric($userAge)) {
            echo "Accesso riuscito";
        }
    ?>
</h1>