<?php
include 'conexao.php';
$session = "select * from usuario where id='$_SESSION[id]'";

$query = mysqli_query($con,$session);
$fetch = mysqli_fetch_assoc($query);
?>

<html>
    <head>
        <title>Página Principal</title>
    </head>
    <body>
        <table border='1'>
            <tr>
                <td>
                    Nome:
                </td>
                <td>
                  <h1>seja bem vindo</h1>  <?php echo $fetch['nome']; ?>
                </td>
            </tr>
            <tr>
                <td>
                    Email:
                </td>
                <td>
                    <?php echo $fetch['email']; ?>
                </td>
            </tr>
            <tr>
                <td>
                    Senha:
                </td>
                <td>
                    <?php echo $fetch['senha'];?>
                </td>
            </tr>
            <tr>
                <td>
                    Telefone:
                </td>
                <td>
                    <?php echo $fetch['telefone']; ?>
                </td>
            </tr>
            <tr>
                <td>
                    CPF:
                </td>
                <td>
                    <?php echo $fetch['cpf'];?>
                </td>
            </tr> 
            <tr>
                <td>
                    Imagem:
                </td>
                <td>
                    <img src="<?php echo $fetch['imagem']; ?>" width="200px">
                </td>
            </tr>
            
        </table>
        <a href="delete.php">DELETAR ESTE PERFIL</a>
        <a href="edit.php">EDITAR ESTE PERFIL</a>
    </body>
</html>