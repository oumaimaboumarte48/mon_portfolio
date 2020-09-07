<?php

require_once 'config.php';

try {
    if(isset($_POST["submit"])){
        $sqlQuery = "INSERT INTO `projet` (titre, url, description, image)
    VALUES (:titre, :url, :description, :image)";
    $stmt = $db->prepare($sqlQuery);
    
    $titre = $_POST[ 'titre' ];                    
    $url= $_POST[ 'url' ];                   
    $description= $_POST[ 'description' ];          
    
    //save img
    $target_dir = "./img/";

    $upload_image=$_FILES["image"][ "name" ];

    move_uploaded_file($_FILES["image"]["tmp_name"], "$target_dir".$_FILES["image"]["name"]);


    $result = $stmt->execute(array(':titre'=>$titre, ':url'=>$url, ':description'=>$description, ':image'=>$upload_image));

    header("location:index.php");

    }else{
        header("location:index.php");

    }
} catch (PDOException $e) {
    die("Could not connect to the database!!");
}

?>