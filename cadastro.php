<?php session_start();
	  include_once "topo.php";
	  
?>


<body>
	
<form>
	<fieldset>
		<legend>Cadastrar Usuário</legend>
		<label>ID: <input type="text" name="id"></label>

		<label>Nome: <input type="text" name="Nome"></label>

		<label>Email: <input type="text" name="email"></label>
	</fieldset>



</form>

</body>




<?php include_once "footer.php" ?>