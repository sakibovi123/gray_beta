<?php
require "config.php";


session_start();
$message = "";
if( isset($_POST['insert']) ){
    $title = "";
    $content = "";
    $is_active = "";

    if ( isset($_POST["save"]) ) {
        $title = $_POST["title"];
        $content = $_POST["content"];
        $author = "Hi";

        if ( !empty($title) && !empty($content) && !empty($is_active) ){
            $sql = "INSERT INTO blog (title, content, author) VALUES(:title, :content, :author)";
            $query = $conn->prepare($sql);

            $data = [
                ":title" => $title,
                ":content" => $content,
                ":author" => $author
            ];

            if( $query->execute($data) )
            {
                $message = "Data Inserted Successfully";
            }
            else{
                $message = "Failed To Insert Data";
            }
           
        }

        else{
            echo "<script>alert('Field can't be empty')<script>";
        }
    }

    else{
        return "Server Error";
    }
}

