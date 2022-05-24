<script>

var h3= document.getElementById("h3")
var form= document.getElementById("form")

<?php

 if (!isset($_SESSION["acesso"])){
 ?>
 h3.innerHTML="Você precisa estar logado para comentar!"
 form.style.display='none'    
 <?php  
 }
?>

</script>