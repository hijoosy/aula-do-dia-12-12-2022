
<?php session_start(); ?> 
<?php include_once'cabecalho4.php';?>
   <body>
   <body id="body">
    <div id="topo">
        <div class="largura-site">
            <div id="logotipo">
                <img src="img/receitinhas.png" height="60px" alt="logotipo do site" />

            </div>
            <!--fecha logotipo-->

            <div id="menu">
                <a href="index.php">Página Inicial</a>
                <a href="index.php">Drinks</a>
                <a href="index.php">Login</a>

            </div>
            <!--fecha menu-->

        </div>
        <!--fecha largura do site-->

    </div>
    <div> <h3>Painel do sistema<h3> </div>
    <hr>
    
       <?php
           echo "<h6><br>Seja Bem Vindo(a) :</h6> " .$_SESSION["nome"];
          
        ?>



      <h4>Menu:<h4>


       <p> <a href="receitas.php">↬ Nova Receita </a>
        <br/></p>
        <p><a href="consultar.php">↬ Consultar Receitas </a>
        <br/></br></p>
        <p><a href="sair.php"> Sair </a></p>
    
    </body>
    <?php include_once'rodape.php';?>