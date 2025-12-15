<?php
function getBdd() {
    // Pour Docker : 'mysql' est le nom du service dans docker-compose
    // Pour local : 'localhost'
    $host = getenv('DB_HOST') ?: 'localhost';
    $dbname = getenv('DB_NAME') ?: 'monblog';
    $username = getenv('DB_USER') ?: 'root';
    $password = getenv('DB_PASSWORD') ?: '';
    
    $bdd = new PDO(
        "mysql:host=$host;dbname=$dbname;charset=utf8",
        $username, 
        $password, 
        array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)
    );
    return $bdd;
}

function getBillets() {
    $bdd = getBdd();
    $billets = $bdd->query('select BIL_ID as id, BIL_DATE as date, BIL_TITRE as titre, BIL_CONTENU as contenu from T_BILLET order by BIL_ID desc');
    return $billets;
}

function getBillet($idBillet) {
    $bdd = getBdd();
    $billet = $bdd->prepare('SELECT BIL_ID as id, BIL_DATE as date, BIL_TITRE as titre, BIL_CONTENU as contenu FROM T_BILLET WHERE BIL_ID=?');
    $billet->execute(array($idBillet));
    
    if ($billet->rowCount() == 1)
        return $billet->fetch();
    else
        throw new Exception("Aucun billet ne correspond à l'identifiant '$idBillet'");
}

function getCommentaires($idBillet) {
    $bdd = getBdd();
    $commentaires = $bdd->prepare('SELECT COM_ID as id, COM_DATE as date, COM_AUTEUR as auteur, COM_CONTENU as contenu FROM T_COMMENTAIRE WHERE BIL_ID=?');
    $commentaires->execute(array($idBillet));
    return $commentaires;
}
?>