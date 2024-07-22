
<?php
    
    $conn=mysqli_connect('localhost','root','','gestionlocationvoiture') or die(mysqli_error());
    if(!$conn){
        die("probleme de connexion ".mysqli_connect_error());
    }
    $sql="SELECT NOM , PRENOM FROM client";
    $rslt=mysqli_query($conn,$sql);
    if(mysqli_num_rows($rslt)>0){
        while($row=mysqli_fetch_assoc($rslt)){
        echo" <p>MONSIEUR ".$row["NOM"]." "." ".$row["PRENOM"]." LES DONNEES SONT    BIEN   ENVOYER A LA BASE DE DONNEES!!</p>
        <p>MERCI POUR VOTRE TEMPS</p> MERCI MONSIEUR ";
        echo"<h1>THANK YOU ".$row["NOM"]." ".$row["PRENOM"]."</h1>";

        }
    }
    else {
        echo"zero result";
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>remerciement</title>
    <style>
        body{
    background: url(R.jpeg) center fixed;
    background-repeat: no-repeat;
    background-size: cover;
    font-family: serif;

}
h1 {
    color: rgb(255, 255, 255);
    text-align: center;
    margin-bottom: 30px;
    font-size : 100px;
    font-family:Monotype Corsiva;
}
p{
    text-align : center ;
    color: rgb(255, 255, 255);
    font-size : 23px;
    font-family:Lucida Handwriting;
    margin-right: 70px;
    margin-top : 70px;
}



    </style>
</head>

<body>
    
</body>
</html>
