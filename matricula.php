<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
<link rel="stylesheet" href="_css/matricula.css">

    <script src="jquery.min.js"></script>
    <script src="agend-email.js"></script>
</head>
<body>

<section id="corpo">
<!-- <img src="images/cartaz1.jpg" alt=""> -->
<div class="cartaz">
          
<img src="images/cartaz1.jpg" alt="" class="cartaz1">
</div>



<div id="formulario">
        
                   <form action=""  id="form2" method="post">

                    <h3>Agende Sua Pré Matricula</h3>
                    <label for="nome" class="form-label">Nome</label>
                    <input type="text" name="nome" class="form-control mb-4" id="nome"  id="formGroupExampleInput" placeholder="Example input placeholder">

                    <label for="mensagem" class="form-label">Informe o Horário</label>
                    <input type="text" name="mensagem" class="form-control mb-4" id="mensagem"  id="formGroupExampleInput" placeholder="Example input placeholder">

                    <!-- <textarea name="mensagem" id="mensagem" cols="30" rows="4" class="form-control mb-4" placeholder="Deixe sua opinião."></textarea> -->
                
                    <label for="email" class="form-label">Email</label>
                    <input type="text" name="email" class="form-control mb-4" id="email" placeholder="" id="formGroupExampleInput">

                  
		            <input type="submit" name="enviar" form="form1" value="Enviar " class="btmat" id="submit">
                    </form>

        
	<div class="recebeDados">	
		<?php
                 //  if (isset($resultado)) {
                  //  echo "<p>" . $resultado . "</p>";
                  //}
                  ?> 
	</div>


</div>
       



</section>
    

<script src="jquery.min.js"></script>

<script src="agend-email.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>



</body>
</html>