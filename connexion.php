<?php
//connexion à la base de données
$db_username= 'root';
$db_password='';
$db_name='bd_login';
$db_host='localhost';
$db= mysqli_connect($db_host,$db_username,$db_password,$db_name)
or die('cannot connect');
$fil = filter_var($username, 'username');
$username = $_POST['username'];
$fil = filter_var($password, 'password');
$password = $_POST['password'];

$requete = " SELECT count(*) FROM utilisateur where 
nom_utilisateur='$username' and mot_de_passe='$password'";

//Récupérer les lignes de la table users
$res = $db->query("SELECT * FROM utilisateur where
nom_utilisateur ='".$username."'");
$data = array();

//Récupérer les lignes
while ($row = $res -> fetch_assoc()){
    $data[] = $row;
}

//Afficher le tableau au format JSON
echo json_encode($data);

mysqli_close($db);
?>

