<?php
include_once 'connect.php';


if(isset($_POST['submit']))
{

        if(!empty($_POST['password']) && ($_POST['file']) && ($_POST['email']) && ($_POST['gender']) &&($_POST['region']) && ($_POST['language'])){
                $password = $_POST['password'];
                $file = $_POST['file'];
                $email = $_POST['email'];
                $gender = $_POST['gender']; 
                $region = $_POST['region'];
                $language = $_POST['language'];  
                
                if(mysqli_query($conn, "INSERT INTO users (password, file, email, gender, region, language)VALUES('$password', '$file', '$email', '$gender', '$region', '$language')")){
                        echo ("Your data has been recorded successfully.");
                        // header("Location:form.php?signup=sucess");
                        header("refresh:2,url=form.php");
                }
                // else{
                //         echo('please check the query and try again');
                // }
        }

        else{
                echo ("Please fill in the blank fields.");
        }

}

?>