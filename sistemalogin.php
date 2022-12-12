<?php include_once'cabecalho.php';?>  
   <body id="body">
    
     <h8>Área de Login</h8>


        <div class="largura-site" id="area">
        <form action="verificarlogin.php" method="post">
                Login:<br/>
                <input type="text" name="login" /><br/> 
                <br/><br/>
                Senha:<br/>
                <input type="password" name="senha" /><br/> 
                <br/><br/>
                <input type="submit" value="Logar" /><br/> 
            </form>

        </div>


      
     <?php
        if(isset($_GET["msg"])) {
          echo $_GET["msg"];
          }
        ?>
    </body>
    <?php include_once'rodape.php';?>