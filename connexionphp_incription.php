<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel="stylesheet">
   
    <link rel="stylesheet" href="css_connexion_adminT.css">

    <link rel="stylesheet" href="Acceuil_N.css">

    <title>Document</title> 
</head>
<body>

<!-- PARTIE NAVE -->
<nav class="navbar" >
                <img src="serp0.jpeg" alt="" width="4%"  >
                <ul>
                    <li> <a href="Accueil_N.html"> HOME </a> </li>
                    <li> <a href="connexionphp_incription.php"> CONNEXION </a> </li>
                    <li> <a href="connexion_Admin.php">ADMINISTRATEUR</a> </li>
                    <li> <a href="#"> CONTACT </a> </li>
                </ul>
                
            </nav>
<!-- FIM PARTIE NAVE -->
    <div class="wrapper">
        <div class="login_box">
            <div class="login-header">
                <span>Login</span>
            </div>
            <form method="POST" action="connexionphp_incription.php">
            <div class="input_box">
                <input type="text" name="Email_client" class="input-field"  required>
                <label for="user" class="label">Adresse couriel</label>
                <i class="bx bx-user icon"></i>
            </div>
            
            <div class="input_box">
                <input type="password" name="Mot_passe"   class="input-field" required>
                <label for="pas" class="label">Password</label>
                <i class="bx bx-lock-alt icon"></i>
            </div>
            <div class="remenber-forgot">
                   
                <div class="forgot">
                    <a href="#">Mot de passe oublié ?</a>
                </div>
                <div class="input_box">
                    <input type="submit" class="input-submit" value="connexion">
                </div>
                <div class="register">
                    <span> ou Crée <a href="Inscription.html"> un nouveau Compte </a></span>
                </div>
            </div>
        </form>
        </div>
    </div>
</body>
</html>


<?php
 if($_POST)
 {
//Connextion

$server="localhost";
$user="root";
$password="";
$base="bases_site";
$R= mysqli_connect($server,$user,$password,$base);
if(!$R){
    die("imposible de se connecter auserveur".mysqli_connect_error());
}
$Email=$_POST['Email_client'];
$MP=$_POST["Mot_passe"];
$A = mysqli_query($R," SELECT * FROM client WHERE  Email_client='$Email' AND Mot_passe='$MP'");
if(mysqli_fetch_row($A)==0){
	
	echo'<!DOCTYPE html>
	<html lang="en">
	
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Document</title>
	</head>
	
	<body>
		<style>
			p {
			   
				font-style: italic;
				font-family: Verdana, Geneva, Tahoma, sans-serif;
				color: #fbc02d;
			   text-align: center;
				margin-top: -80px;
				margin-left: 400px;
				margin-right: 400px;
				margin-bottom: 60px;
				padding-right: 0px;
				padding-bottom: 10px;
				padding-left: 0px;
				padding-top: 10px;
				 
				box-shadow: 0em 0em 1em 1em #ffc107;
				background-color: #f3e5f5;
			   
				border-radius:  5em 5em 5em 5em;
			 
			   
			}
		</style>
		<p>mot_passe incorrect veuille reeseyez ou crée un nouveau compte ! <a href="connexionphp_incription.php">Fermer</a>
			
		</p>
	 
	</body>
	
	</html>';
 
   
 }
 else{
	
	header("location: Afficher_Medicament");
	exit();
 }
  }
?>
