<?php 

require_once('global.php');

$user->verificarLogin();

?>

<!DOCTYPE html>
<html lang = "pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Senacar</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link href=".\css\style.css" rel="stylesheet" type="text/css" />
  <link href=".\css\normalize-min.css" rel=" stylesheet" type="text/css"/>
  <!-- font awesome --> 
  <script src="https://kit.fontawesome.com/6e9c638913.js" crossorigin="anonymous"></script>
<body>

    <?php
    require_once('config/header.php');
    ?>
    
        <div  class = "painel"> 
            <div class = "aluga"><h1><br><b>Alugue seu carro!</b></br></h1></div>
            <div class="localidade"><br><h4>Localidade:</h4></br></div>
            <div class="carro"><img src = ".\img\hero.png"></div>   
            <form action="<?php echo SITE_URL ?>catalogo.php" method="POST">          
            <div class="search-box">
              <select required name="cidade" id="" style="margin-left: -2%; text-indent: 2%; width: 100%;height: 150%;border-radius: 40px;">

              <!-- options para capitais dos Estados do Brasil --> 
                <option value="AC">Acre</option>
                <option value="AL">Alagoas</option>
                <option value="AM">Amazonas</option>
                <option value="AP">Amapá</option>
                <option value="BA">Bahia</option>
                <option value="CE">Ceará</option>
                <option value="DF">Distrito Federal</option> 
                <option value="ES">Espírito Santo</option> 
                <option value="GO">Goiás</option> 
                <option value="MA">Maranhão</option> 
                <option value="MT">Mato Grosso</option> 
                <option value="MS">Mato Grosso do Sul</option> 
                <option value="MG">Minas Gerais</option> 
                <option value="PA">Pará</option> 
                <option value="PB">Paraíba</option> 
                <option value="PR">Paraná</option> 
                <option value="PE">Pernambuco</option> 
                <option value="PI">Piauí</option> 
                <option value="RJ">Rio de Janeiro</option> 
                <option value="RN">Rio Grande do Norte</option> 
                <option value="RO">Rondônia</option> 
                <option value="RS">Rio Grande do Sul</option> 
                <option value="RR">Roraima</option> 
                <option value="SC">Santa Catarina</option> 
                <option value="SE">Sergipe</option> 
                <option value="SP" selected>São Paulo</option> 
                <option value="TO">Tocantins</option>
              </select>
                <input type="datetime-local" name="dt_locacao" class="search-text-data" placeholder="Data" required>
                <input type="datetime-local" name="dt_final" class="search-text-data2" placeholder="Data" required>
                
                <div class = "data"><h4>Data de Retirada</h4></div>
                <div class = "data2"><h4>Data de Entrega</h4> </div>
              
            </div>
            <input type="submit" name="submit" class="btn btn-warning" style="margin-left: 60%; margin-top: -28%;" value="Alugar!"/>

            </form>

        </div>

        <div class="sobre">
            <div class="sobre2"><p><h1><br>SOBRE NÓS</h1></p></div>
            <p>Bem-vindo à nossa locadora de veículos! Nós somos uma empresa especializada em oferecer serviços de locação de veículos para pessoas e empresas. 
                Com uma ampla  de veículos disponíveis, desde carros populares até modelos mais sofisticados, nossos clientes podem escolher o veículo que melhor atende às suas 
                necessidades e preferências.</p>
                <p>A nossa frota de carros é composta por veículos modernos e bem cuidados, que são regularmente revisados e mantidos para garantir a segurança e o conforto dos nossos clientes. Temos uma ampla 
                  variedade de modelos e categorias, desde carros compactos até veículos de luxo, para atender a todas as necessidades e orçamentos.</p>
                <img class="carrobn" src=".\img\carro.jpg" alt="carro">
                
        </div>
        
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>