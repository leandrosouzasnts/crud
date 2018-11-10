<?php
  session_start();
  if (!isset($_SESSION['user'])) 
     Header("Location: ./login.html");
include "cabecalho.html";
include "conexao.php";

$sql = "SELECT * FROM guarda;";
$rs = mysqli_query($conexao, $sql);

?>
<html>
    <body class="container">
        <h1 class="prymary">GUARDAS</h1>
        <br/> 
        <table class="table table-striped table-red table table-hover">
            <tr>
                <th>ATIRADOR</th>
                <th>DIA</th>
            </tr>
            <?php while ($linha = mysqli_fetch_array($rs)) {?>
                <tr>
                    <td><?php echo $linha['nome'] ?></td>
                    <td><?php echo $linha['data_guarda'] ?></td>
                </tr>
            <?php }?> 
        </table>
    </body>
</html>