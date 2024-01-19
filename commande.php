


<!DOCTYPE html>
<html>

<head>
	<title>commande</title>
	
	<link rel="stylesheet"  href="InscriptionT.css">
	<link rel="stylesheet"  href="ACCEUIL_N.css">
</head>

<body>
<nav class="navbar" >
             <img src="serp0.jpeg" alt="" width="4%"  >
                <ul>
                    <li> <a href="Accueil_N.html"> HOME </a> </li>
                    <li> <a href="connexionphp_incription.php"> CONNEXION </a> </li>
                    <li> <a href="connexion_Admin.PHP">ADMINISTRATEUR</a> </li>
                    <li> <a href="Contacte.html"> CONTACT </a> </li>
                </ul>
                
            </nav>
			
	<center>
		<form method="POST" action="commande.php">
			<fieldset style="width: 50%">

				<h1>Veuillez saisir  vos  besoin ici !</h1>
				<hr>

				<table >
					
					
						<tr>
							<td> Description: </td>
							<td><textarea name="description" type="text" id="" cols="35" rows="2"  placeholder="Nom_medicament (quantité)" required></textarea></td>
						</tr>
						
						<tr>
							<td>date: </td>
							<td><input type="date" name="Date_commande" value="" required></td>
						</tr>
						<tr>
							<td>Choix: </td>
							<td>
                            <input type="text"  name="choix_client"   placeholder="Livraison ou Récherche" required></td>
						</tr>
                        <tr>
							<td>Email client: </td>
							<td><input type="text" name="Email_client" value="" required></td>
						</tr>

						<tr>
							<td colspan="2"><input type="submit" class="input-submit" value="Commander"></td>
						</tr>
						 <tr> <td colspan="2"> Une fois envoyer vos commande  Veuillez  contactez-nous pour asurer l'ordonnance   <a href="Contacte.html">contactez-nous</a></td> </tr>
						 

				</table>

				
		</form>
	</center>

	</fieldset>
	</hr>

</body>

</html>

<?php
 if($_POST)
 {

// la partie connection 
$server="localhost";
$user="root";
$password="";
$base="bases_site";
$sum= mysqli_connect($server,$user,$password,$base);
// la partie recuperation



$Description=$_POST['description'];
$Date=$_POST['Date_commande'];
$Choix=$_POST['choix_client'];
$Email =$_POST['Email_client'] ;
// la partie de recrutement
$a="INSERT INTO commande values( NULL,'$Description','$Date','$Choix','$Email')";
if(mysqli_query($sum,$a)){
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
			  margin-top: 0px;
			  margin-left: 400px;
			  margin-right: 400px;
			  margin-bottom: 500px;
			  padding-right: 0px;
			  padding-bottom: 10px;
			  padding-left: 0px;
			  padding-top: 10px;
			   
			  box-shadow: 0em 0em 1em 1em #ffc107;
			  background-color: #f3e5f5;
			 
			  border-radius:  5em 5em 5em 5em;
		   
			 
		  }
	  </style>
	  <p>Votre commande est envoyer  ! <a href="">Fermer</a>
		  
	  </p>
   
  </body>
  
  </html>';


   
	
}


else{
   echo("non reçue");
    
     }

 }
?>
<p> <a href="Afficher_Medicament.php"><input type="submit" class="retourner" value="retourner" ></a></p>


<style>    /* <!-- CSS --> */
 
 fieldset{
	background:silver;
 }
 table{
	 border:0;
	 margin-top:2%;
	
	 /* background-color:silver; */
	 color:black;
	 text-align: left;
 }
 H1{
	 
	 color:blue;
	 text-transform: uppercase;
	
 }
 
 td{
	 border:0;
	 padding:8px;
	 background-color: silver }
 th{
	 background-color: blue ;
	 padding: 7px;
	 color:aqua;
 }     /* <!-- CSS du bouton retourner au menus admin --> */
.input-submit{
		
		
        width: 50%;
        height: 50px;
        background:blue;
        font-size: 18px;
        border-radius: 50px ;
		margin-left:25%
        
     }
	 .retourner{
		
		
        width: 20%;
        height: 50px;
        background:brown;
        font-size: 18px;
        border-radius: 50px ;
		margin-left:40%;
		
        
     }
     
	 </style> 