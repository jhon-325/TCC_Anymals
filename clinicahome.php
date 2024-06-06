<?php
include 'conexao.php';
$session = "select * from clinica where id='$_SESSION[id]'";
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
                  <h1>Seja bem-vindo</h1>  <?php echo $fetch['nome']; ?>
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
                    CNPJ:
                </td>
                <td>
                    <?php echo $fetch['cnpj'];?>
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
                    Endereço:
                </td>
                <td>
                    <?php echo $fetch['endereco'];?>
                </td>

                <tr>
                <td>
                    Descrição:
                </td>
                <td>
                    <?php echo $fetch['descricao'];?>
                </td>
            </tr>
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