<?php
include('../DbConnector/connect.php');
$editorContent=$statusMsg='';

//if form is submitted
if(isset($_POST['submit'])){
    $editorContent=$_POST['story'];

    //check where empty
    if(!empty($editorContent)){
        $insert=$con->query("INSERT INTO story (content,created) VALUES ('".$editorContent."',NOW())");

        if($insert){
            $statusMsg="story has been inserted successfully.";
        }else{
             $statusMsg="story has been not inserted successfully."; 
        }
    }else{
          $statusMsg="Please try again.";
    }
}
?>