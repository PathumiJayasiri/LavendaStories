<?php
require_once '../DbConnector/connect.php';
$editorContent=$statusMsg='';

//if form is submitted
if(isset($_POST['submit_story'])){
    $editorContent=$_POST['editor'];

    //check where empty
    if(!empty($editorContent)){
        $insert=$con->query("INSERT INTO editor (content,created) VALUES ('".$editorContent."',NOW())");

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