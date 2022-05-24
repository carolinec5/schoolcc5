<?php 

 session_start();

   //Recebe o nome do arquivo login.php e vai para a var logado
   if(isset($_SESSION['acesso'])){
     $logado=$_SESSION['acesso'];
   }

?>

 <?php

       // Aparece se está logado ou não

       if(isset($_SESSION['acesso'])){
         echo "logado";
         echo "
            <script>
                document.getElementById('login')
                document.getElementById('deslogar')
                login.style.display='none'
                deslogar.style.display='block'
            </script>
         ";
       }

       if(isset($_SESSION['deslogar'])){
         echo "deslogar";
         unset($_SESSION["deslogar"]);
         echo "
            <script>  
                document.getElementById('login')
                document.getElementById('deslogar')
                deslogar.style.display='none'
                login.style.display='block'  
            </script> ";
       }
    ?>