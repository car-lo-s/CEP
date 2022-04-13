<?php
  require("pesquisa.php");

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Busca</title>
    <link rel="stylesheet" href="./style.css" />
  </head>
  <body>
    <header>
      <h1>Search - CEP</h1>
    </header>
    <section class="entrada">
      <form action="" method="post">
        <div>
          <input type="text" name="cep" id="" placeholder="Digite o CEP" />
          <button type="submit">Procurar</button>
        </div>
      </form> 
      
    </section>
    <section class="saida">
      <?php
      if(@@$endereco != NULL){
        echo "<p>Rua: ".$endereco->logradouro."</p>";
        echo "<hr>";
        echo "<p>Complemento: ".$endereco->complemento."</p>";
        echo "<hr>";
        echo "<p>Bairro: ".$endereco->bairro."</p>";
        echo "<hr>";
        echo "<p>Localidade: ".$endereco->localidade."</p>";
        echo "<hr>";
        echo "<p>Estado: ".$endereco->uf."</p>";
        
      }else{
        echo "<p>Valor inválido, digite novamente.</p>";
      }
      ?>
    </section>
  </body>
</html>
