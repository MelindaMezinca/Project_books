<?php
$conn = mysqli_connect("localhost", "root", "", "books") or die("nu se poate conecta la baza de date");

$titlu=mysqli_real_escape_string($conn,$_POST["titlu"]);
$descriere=mysqli_real_escape_string($conn,$_POST["descriere"]);;
$categorie=mysqli_real_escape_string($conn,$_POST["categorie"]);;
$rating=mysqli_real_escape_string($conn,$_POST["rating"]);;

mysqli_query($conn,"insert into carti(titlu, descriere, categorie, rating) values ('$titlu', '$descriere', '$categorie', '$rating')") or die("nu merge");

echo "Cartea a fost salvata";

?>