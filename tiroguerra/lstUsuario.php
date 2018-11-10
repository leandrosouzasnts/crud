<?php
  session_start();
  if (!isset($_SESSION['user'])) 
     Header("Location: ./login.html");
include "cabecalho.html";
include "conexao.php";

$sql = "SELECT * FROM usuario;";
$rs = mysqli_query($conexao, $sql);

?>
<html>
    <body class="container">
        <h1 class="prymary">USUÁRIOS</h1>
        <br/> 
        <table class="table table-striped table-red table table-hover">
            <tr>
                <th>ID</th>
                <th>LOGIN</th>
            </tr>
            <?php while ($linha = mysqli_fetch_array($rs)) {?>
                <tr>
                    <td><?php echo $linha['id'] ?></td>
                    <td><?php echo $linha['user'] ?></td>
                </tr>
            <?php }?> 
        </table>
    </body>
</html>