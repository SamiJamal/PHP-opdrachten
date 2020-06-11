

<form action="H5O4.php" method="GET" id="container">
    <input placeholder="Naam" type="email" name="email" id="naam" required>
    <input placeholder="Password" type="password" name="password" id="password" required>
    <input type="submit" name="knop" value="verstuur">
</form>
<?php
$logedIn = false;
if ($_GET != null) {
    $email = $_GET["email"];
    $password = $_GET["password"];
    login($email, $password);
}
function login($email, $password) {
    if ($email == "piet@worldonline.nl" && $password == "doetje123" || $email == "klaas@carpets.nl" && $password == "snoepje777" || $email == "truushendriks@wegweg.nl" && $password == "arkiearkie201") {
        $logedIn = true;
        if ($logedIn) {
            echo 'Welkom';
        }
    } else {
        $logedIn = false;
        if (!$logedIn) {
            echo 'Sorry geen toegang';
        }
    }
}
?>