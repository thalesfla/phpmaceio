<?php session_start();
include_once "topo.php";
$login = "admin";
$senha = "admin";
//setcookie("login",'admin');
//setcookie("senha",'admin');
	
 ?>

	<hr>
	<div name="content">
	
		<form  method="post">
			<fieldset>
				<legend>Acesso Restrito</legend>
			
				<label>Login: <input type="text" name="login" value="<?=_REQUEST['email'] ?>"></label><br>
				
				<label>Senha: <input type="text" name="login" value="<?=_REQUEST['email'] ?>"></label><br>

				<input type="submit" name="submit" value="Entrar"></input>
			</fieldset>
		</form>


	</div>

</body>

<?php include_once "footer.php";

if ($_POST["login"] == "admin" and $_POST["senha"]=="admin") {
	$_SESSION['logado'] = true;
	header("location: dashboard.php"); 
}
else{
	echo "Não Logou!";
}
print_r($_COOKIE["login"]);
print_r($_COOKIE["senha"]); ?>
