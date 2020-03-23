<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
include('conn.php');

if(!empty($_POST['name']) && !empty($_POST['title']) && !empty($_POST['note']) && !empty($_POST['review']))
{
    $name = $_POST['name'];
    $title = $_POST['title'];
    $note = $_POST['note'];
    $review = $_POST['review'];

    $query = "INSERT INTO review(name, title, note, review) VALUES (:name, :title, :note, :review)";
    $req = $bdd->prepare($query);
    $req->execute(array(
        'name' => $name,
        'title' => $title,
        'note' => $note,
        'review' => $review
    ));
    die('ok');

} else{
    die('erreur');
}