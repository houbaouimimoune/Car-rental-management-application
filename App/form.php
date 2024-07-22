


<!-- le  nom de la base de données créee par la requet est gestionlocationvoiture -->


<?php
    
    $conn=mysqli_connect('localhost','root','','gestionlocationvoiture') or die(mysqli_error());
    if(    (null !== $_POST['NOM']) 
        && (null !== $_POST['CIN'])
        && (null !== $_POST['PRENOM'])
        && (null !== $_POST['DATENAISSANCE']) 
        && (null !== $_POST['ADRESSE'])
        && (null !== $_POST['TELEPHONE'])
        && (null !== $_POST['DATEINSCRIPTION'])
        && (null !== $_POST['MOTDEPASSE'])
        && (null !== $_POST['BLACKLIST'])

        && (null !== $_POST['NUMPAIMENT'])
        && (null !== $_POST['TYPE'])
        && (null !== $_POST['MONTANT'])
        && (null !== $_POST['DATEPAIMENT'])           




        && (null !== $_POST['NUMPENALISATION'])
        && (null !== $_POST['COUT'])
        && (null !== $_POST['DATEPROBLEME'])
        && (null !== $_POST['RAISON'])



        && (null !== $_POST['LOGIN'])
        && (null !== $_POST['MDP'])
        && (null !== $_POST['DATECREATION'])
        && (null !== $_POST['DATEDERNIEREAUTH'])   
        
        && (null !== $_POST['NUMLOCATION'])
        && (null !== $_POST['DATELOCATION'])
        && (null !== $_POST['DATEDEBUT'])
        && (null !== $_POST['DATEFIN'])
        && (null !== $_POST['TAUXREMISE'])

        && (null !== $_POST['MATRICULE'])
        && (null !== $_POST['MARQUE'])
        && (null !== $_POST['CARBURANT'])
        && (null !== $_POST['MODELE'])
        && (null !== $_POST['COULEUR'])
        && (null !== $_POST['CATEGORIE'])
        && (null !== $_POST['PUISSANCE'])
        && (null !== $_POST['COUTPARJOUR'])
        && (null !== $_POST['FICHETECHNIQUE'])
        && (null !== $_POST['PHOTO'])){

        $CIN=$_POST['CIN'];
        $NOM=$_POST['NOM'];
        $PRENOM=$_POST['PRENOM'];
        $DATENAISSANCE=$_POST['DATENAISSANCE'];
        $ADRESSE=$_POST['ADRESSE'];
        $TELEPHONE=$_POST['TELEPHONE'];
        $DATEINSCRIPTION=$_POST['DATEINSCRIPTION'];
        $MOTDEPASSE=$_POST['MOTDEPASSE'];
        $BLACKLIST=$_POST['BLACKLIST'];

        






        $NUMPENALISATION=$_POST['NUMPENALISATION'];
        $COUT=$_POST['COUT'];
        $DATEPROBLEME=$_POST['DATEPROBLEME'];
        $RAISON=$_POST['RAISON'];

        $LOGIN=$_POST['LOGIN'];
        $MDP=$_POST['MDP'];
        $DATECREATION=$_POST['DATECREATION'];
        $DATEDERNIEREAUTH=$_POST['DATEDERNIEREAUTH'];

        $MATRICULE=$_POST['MATRICULE'];
        $MARQUE=$_POST['MARQUE'];
        $CARBURANT=$_POST['CARBURANT'];
        $MODELE=$_POST['MODELE'];
        $COULEUR=$_POST['COULEUR'];
        $CATEGORIE=$_POST['CATEGORIE'];
        $PUISSANCE=$_POST['PUISSANCE'];
        $COUTPARJOUR=$_POST['COUTPARJOUR'];
        $FICHETECHNIQUE=$_POST['FICHETECHNIQUE'];
        $PHOTO=$_POST['PHOTO'];


        $NUMPAIMENT=$_POST['NUMPAIMENT'];
        $TYPE=$_POST['TYPE'];
        $MONTANT=$_POST['MONTANT'];
        $DATEPAIMENT=$_POST['DATEPAIMENT'];

        $NUMLOCATION=$_POST['NUMLOCATION'];
        $DATELOCATION=$_POST['DATELOCATION'];
        $DATEDEBUT=$_POST['DATEDEBUT'];
        $DATEFIN=$_POST['DATEFIN'];
        $TAUXREMISE=$_POST['TAUXREMISE'];

        $req1="INSERT INTO client (CIN , NOM , PRENOM , DATENAISSANCE , ADRESSE , TELEPHONE , DATEINSCRIPTION , MOTDEPASSE , BLACKLIST) values ('$CIN' , '$NOM', '$PRENOM', '$DATENAISSANCE', '$ADRESSE', '$TELEPHONE', '$DATEINSCRIPTION', '$MOTDEPASSE', '$BLACKLIST')"; 
        $req2="INSERT INTO voiture (MATRICULE , MARQUE , CARBURANT , MODELE , COULEUR , CATEGORIE , PUISSANCE , COUTPARJOUR , FICHETECHNIQUE , PHOTO) values ('$MATRICULE' , '$MARQUE', '$CARBURANT', '$MODELE', '$COULEUR', '$CATEGORIE', '$PUISSANCE', '$COUTPARJOUR', '$FICHETECHNIQUE' , '$PHOTO')";
        $req5="INSERT INTO penalisation (NUMPENALISATION , COUT , DATEPROBLEME , RAISON) values ('$NUMPENALISATION' , '$COUT', '$DATEPROBLEME', '$RAISON')";
        $req6="INSERT INTO user (LOGIN , MDP , DATECREATION , DATEDERNIEREAUTH) values ('$LOGIN' , '$MDP', '$DATECREATION', '$DATEDERNIEREAUTH')";
        $req3="INSERT INTO paiement (NUMPAIEMENT , TYPE , MONTANT , DATEPAIMENT , NUMLOCATION) values('$NUMPAIMENT' , '$TYPE' , '$MONTANT' , '$DATEPAIMENT' , $NUMLOCATION)";
        $req7="INSERT INTO lalocation (NUMLOCATION , DATELOCATION , DATEDEBUT , DATEFIN , TAUXREMISE , CIN , MATRICULE) values ('$NUMLOCATION' , '$DATELOCATION' , '$DATEDEBUT' , '$DATEFIN' , '$TAUXREMISE' , '$CIN' , '$MATRICULE')";        

                
        $res1=mysqli_query($conn,$req1);
        $res2=mysqli_query($conn,$req2);
        $res5=mysqli_query($conn,$req5);
        $res6=mysqli_query($conn,$req6);
        $res7=mysqli_query($conn,$req7);
        $res3=mysqli_query($conn,$req3);

        header('location:merci.php');
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>APPLICATION DE GESTION DE LOCATION DE VOITURE</title>
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
label{
    color: rgb(255, 255, 255);
    font-size : 23px;
    font-family:Lucida Handwriting;
    margin-right: 70px;
    margin-top : 70px;
}
legend{
    color: aqua;
    font-size : 30px;
    font-family:Cooper;
}
.select , input ,textarea{
    border-radius: 10px;
    background-color: rgb(153, 215, 219);
    color: black;
    font-size: 16px;
    padding: 13px;

}
span{
    color: white ; 
    font-family : broadway ; 
}
button {
    padding: 7px 10px;
    font-family:Cooper;
    cursor: default;
    text-align: center;
    font-size: 20px;
    display: inline-block;
    border-top: 2px solid rgb(233, 230, 230);
    margin-bottom: 10px;
    box-shadow: 0 2px 6px rgba(5, 4, 4, 0.8);
    color: white;
    width: 120px;
    background: linear-gradient(#176080 0%, #80f4fc 100%);
    border-radius: 7px;
}

button:hover {
    background: linear-gradient(#faf9fc 0%, #fffefe 100%);
    color : aqua ; 
}

button:active {
    box-shadow: none;
}
.bttn {
    margin: 100px auto;
    width: 400px;
    box-shadow: 0 7px 10px rgba(0, 0, 0, .8);
}

fieldset {
    margin: 100px auto;
    width: 800px;
    border: 1px solid rgb(77, 72, 72);
    box-shadow: 0 7px 10px rgba(0, 0, 0, .8);
}
    </style>
</head>
<body>
    <h1>WELCOME</h1>
    <form method="post" >
            <fieldset>
                        <legend>USER</legend>
                <table>
                    <tr>
                        <td><label >LOGIN</label></td>
                        <td><input name="LOGIN" type="email" required></td>
                    </tr>
                    <tr>
                        <td><label>MOT DE PASS</label></td>
                        <td><input name="MDP" type="password" required></td>
                    </tr>
                    <tr>
                        <td><label>DATE DE CREATION</label></td>
                        <td><input name="DATECREATION" type="date" required></td>
                    </tr>
                    <tr>
                        <td><label>DATE DERNIERE D'AUTENTIFICATION</label></td>
                        <td><input name="DATEDERNIEREAUTH" type="date" required></td>
                        </tr>
                    </table>         
                </fieldset>
        <fieldset>
                    <legend>LES INFORMATION DE CLIENT</legend>
                    <table  >
                    <tr>
                            <td>
                                <label>CIN</label>
                            </td>
                            <td>
                                <input type="text" placeholder="FAXXXXX" name="CIN" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>NOM</label>
                            </td>
                            <td>
                                <input type="text" placeholder="NOM" name="NOM" required> 
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>PRENOM</label>
                            </td>
                            <td>
                                <input type="text" placeholder="PRENOM" name="PRENOM" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>DATE DE NAISSANCE</label>
                            </td>
                            <td>
                                <input type="date"  name="DATENAISSANCE" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>ADRESSE</label>
                            </td>
                            <td>
                                <textarea cols="20" rows="7" name="ADRESSE" required></textarea> 
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>N° DE TELEPHONE</label>
                            </td>
                            <td>
                                <input type="text" placeholder="06XXXXXXXX" name="TELEPHONE" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>DATE D'INSCRIPTION</label>
                            </td>
                            <td>
                                <input type="date"  name="DATEINSCRIPTION" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>MOT DE PASS</label>
                            </td>
                            <td>
                                <input type="password" placeholder="password" name="MOTDEPASSE" required>
                            </td>
                        </tr>
                        <tr>
                            <td><label>EST CE QU'IL EST DANS LA LIST NOIRE </label></td>
                            <td>
                                <input  class="radio" type="radio" name="BLACKLIST" value="OUI" required > <span>OUI</span> </input>
                                
                                <input  class="radio" type="radio" name="BLACKLIST" value="NON"  required><span>NON</span> </input>
                            </td>
                        </tr>
                    </table>                          
        </fieldset>
        <fieldset>
            <legend>LES INFORMATIONS SUR LA VOITURE </legend>
            <table>
                <tr>
                    <td>
                        <label>MATRICULE</label>
                    </td>
                    <td>
                        <input type="text" name="MATRICULE" placeholder="XXXXXXXAXX" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>LA MARQUE  </label>                                
                    </td>
                    <td>
                        <select class="select" name="MARQUE"  required>
                            <option value="" selected></option>
                            <option value="AUDI">AUDI</option>
                            <option value="NISSAN">NISSAN</option>
                            <option value="OPEL">OPEL</option>
                            <option value="TOYOTA">TOYOTA</option>
                            <option value="VOLVO">VOLVO</option>
                            <option value="BMW">BMW</option>
                            <option value="CITROEN">CITROEN</option>
                            <option value="DACIA LOGAN">DACIA LOGAN</option>
                            <option value="CLIO">CLIO </option>
                            <option value="MERCEDES">MERCEDES</option>
                            <option value="PEUGEOT">PEUGEOT</option>
                            <option value="RENAULT">RENAULT</option>
                            <option value="FIAT">FIAT</option>
                            <option value="HONDA">HONDA</option>
                            <option value="JEEP">JEEP</option>
                            <option value="KIA">KIA</option>
                        </select> 
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>CARBURANT</label>
                    </td>
                    <td>
                        <select class="select"  name="CARBURANT" id="" required>
                        <option value="" selected></option>
                        <option value="ESSENCE">ESSENCE</option>
                        <option value="DEISEL">DEISEL</option>
                        <option value="HYBRIDE">HYBRIDE</option>
                    </select>
                    </td>
                <tr>   
                        <td>
                            <label>MODELE</label>
                        </td>
                        <td>
                        <input type="month"  name="MODELE" required>
                        </td>
                </tr>
                <tr>
                        <td>
                        <label>COULEUR</label>
                        </td>
                        <td>           
                                <select class="select" name="COULEUR" id="" required>
                                    <option value="" selected></option>
                                    <option value="ROUGE">ROUGE</option>
                                    <option value="NOIRE">NOIRE</option>
                                    <option value="BLANCHE">BLANCHE</option>
                                    <option value="BLUE">BLUE</option>
                                    <option value="GRIS">GRIS</option>
                                </select>
                        </td>
                </tr>
                <tr>
                    <td>
                        <label>CATEGORIE</label>
                    </td>
                    <td>
                        <select class="select" name="CATEGORIE" required>
                            <option value="" selected></option>
                            <option value="BERLINE">BERLINE</option>
                            <option value="CITADINE">CITADINE</option>
                            <option value="SPORT">SPORT</option>
                            <option value="LUIDOPACE">LUDOSPACE</option>
                            <option value="ROUTIERS">ROUTIERS</option>
                            <option value="BERLINE COMPACTES">BERLINE COMPACTES </option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>PUISSANCE</label>
                    </td>
                    <td>
                            <input type="text"  name="PUISSANCE" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>COUT PAR JOUR</label>
                    </td>
                    <td>
                        <input type="text" name="COUTPARJOUR" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>FICHE TECHNIQUE</label>
                    </td>
                    <td>
                        <input type="file" name="FICHETECHNIQUE" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>PHOTO DE LA VOITURE </label>
                    </td>
                    <td>
                            <input type="file" name="PHOTO" required>
                    </td>
                </tr>           
            </table>         
        </fieldset>   
        <fieldset>
        <legend>LOCATION</legend>
                <table>
                    <tr>
                        <td><label>LE NUM DE LOCATION</label></td>
                        <td><input name="NUMLOCATION" type="text" required></td>
                    </tr>
                    <tr>
                        <td><label>LA DATE DE LOCATION</label></td>
                        <td><input name="DATELOCATION" type="date" required></td>
                    </tr>
                    <tr>
                        <td><label>LA DATE DE DEBUT</label></td>
                        <td><input name="DATEDEBUT" type="date" required></td>
                    </tr>
                    <tr>
                        <td><label>LA DATE DE FIN</label></td>
                        <td><input name="DATEFIN" type="date" required></td>
                    </tr>
                    <tr>
                        <td><label>TAUX REMISE</label></td>
                        <td><input name="TAUXREMISE" type="text" required></td>
                    </tr>
                </table>         
        </fieldset>     
        <fieldset>
        <legend>PENALISATION</legend>
        <table>
            <tr>
                <td><label>LE NUM DEPENALISATION</label></td>
                <td><input name="NUMPENALISATION" type="text" required></td>
            </tr>
            <tr>
                <td><label>COUT</label></td>
                <td><input name="COUT" type="text" required></td>
            </tr>
            <tr>
                <td><label>DATE DE PROBLEME</label></td>
                <td><input name="DATEPROBLEME" type="date" required></td>
            </tr>
            <tr>
                <td><label>RAISON</label></td>
                <td><input name="RAISON" type="text" required></td>
            </tr>
            </table>         
        </fieldset>
        <fieldset>
                <legend>PAIEMENT</legend>
        <table>
            <tr>
                <td><label>LE NUM DE PAIEMENT </label></td>
                <td><input name="NUMPAIMENT" type="text" required></td>
            </tr>
            <tr>
                <td><label>LE TYPE DE PAIEMENT </label></td>
                <td><input class="radio" name="TYPE" type="radio" name="paimnt" value="Cash" required><span>CASH</span> </input></td>
                <td><input  class="radio" name="TYPE" type="radio" name="paimnt" value="Par carte" required><span>PAR CARTE</span> </input></td>
            </tr>
            <tr>
                <td><label>MONTANT</label></td>
                <td><input name="MONTANT" type="text" required></td>
            </tr>
            <tr>
                <td><label>DATE DE PAIEMENT </label></td>
                <td><input name="DATEPAIMENT" type="date" required></td>
                </tr>
            </table>         
        </fieldset>
        <div class="bttn">
                <button type="reset" value="EFFACER">EFFACER</button>
                <button  type="submit" value="VALIDER">VALIDER</button>
        </div>

    </form>
    
</body>
</html>