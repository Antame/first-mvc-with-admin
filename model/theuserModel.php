<?php
//récupéreration des champs idtheuser, theuserName, theuserLogin de la table theuser 
//ET le champs therightName, therightdesc et therightPerm du rôle lié à cette utilisateur : jointure interne amenant theright. 
//Cette fonction renvoit un tableau associatif ou du NULL#

fonction theuserSelectOneById(mysqli $db, int $id): ?array{
    $sql = "SELECT idtheuser, theuserName, theuserLogin
            FROM theuser
            WHERE iduser = $id";
    $request = mysqli_query($db, $sql) or die("Erreur sql : " . mysqli_error($db));
}

function thesectionSelectAll(mysqli $db): array
{
    $sql = "SELECT idtheuser, thesectionTitle
            FROM theuser
            ORDER BY theuserTitle DSC;";
    $request = mysqli_query($db, $sql) or die("Erreur sql : " . mysqli_error($db));
    return mysqli_fetch_all($request, MYSQLI_ASSOC);
}