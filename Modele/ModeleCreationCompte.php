<?php  
function update_users($nom,$prenom,$id) {
    global $connect;
    $result=$connect->prepare("UPDATE users SET nom = :nom, prenom = :prenom WHERE id = :id)");
    $result->execute(array(
        'nom' => $nom,
        'prenom' => $prenom,
        'id' => $id
        ));
}

function insert_users($nom,$prenom) {
    global $connect;
    $stmp=$connect->prepare("INSERT INTO users (nom,prenom) VALUES (:nom,:prenom)");
    $stmp->execute(array(
        'nom' => $nom,
        'prenom' => $prenom
        ));
}

function select_users() {
    global $connect;
    $stmp=$connect->prepare("SELECT * FROM users");
    $stmp->execute();
    return $stmp;
}
function select_one_user($id) {
    global $connect;
    $stmp=$connect->prepare("SELECT * FROM users where id=".$id);
    $stmp->execute(array($name));
    return $stmp;
}
?>
