<?php
include "conexao.php";

$sql = "SELECT * FROM atirador;";
$rs = mysqli_query($conexao, $sql);
?>

<form action="insereGuarda.php" method="POST">
    <div class="container">
         <div class="form-group row">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <label class="input-group-text" for="inputGroupSelect01">ATIRADOR</label>
                </div>
                <select class="custom-select" name="nome">
                    <?php while ($linha = mysqli_fetch_array($rs)) {?>
                      <tr>
                      <option> <?php echo $linha['nome'] ?></option>
                      </tr>
                  <?php }?> 
                </select>
              </div>
          </div>

          <div class="form-group row">
            <div class="col-xs-2">
              <label for="data">DATA:</label>
              <input class="form-control" type="date" name="data" required/><br>
            </div>
          </div>

            <button type="submit" class="btn btn-success">Gravar</button>
            <button type="reset" class="btn btn-danger">Cancelar</button>      
  </div>
</form>
</body>
</html>