<?php
include "form.php" ;
echo  "<br><h3>Your Given values are is :</h3>"; 
if(isset($_POST['submit'])){
    echo '<pre>';
    echo "  name:". $_POST["userName"] ;
    echo '</pre>';
    echo '<pre>';
    echo "  email:".$_POST["userEmail"];
    echo '</pre>';
    echo '<pre>';
    echo "  group:". $_POST["Group"] ;
    echo '</pre>';
    echo '<pre>';
    echo "  Gender:". $_POST["gender"] ;
    echo '</pre>';
    if(isset($_POST['courses'])){
        echo "Selected Option :". "<br>" ;
        foreach($_POST['courses'] as $option){
            echo $option."<br>" ;
        }        
    }
    

}





?>
