<?php

    
    require_once "configs/conexao.php";

    function logout()
    {
        session_unset();
        session_destroy();
        header("Location: index.html");
        exit;
    }

    if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
        header("Location: index.html");
        exit;
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Site</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <h1>Certeza Que voce Quer Sair?</h1>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <input type="submit" name="logout" value="Sim">

    <?php 
    if (isset($_POST["logout"])) {
        logout();
    }
    ?>

</body>
</html>