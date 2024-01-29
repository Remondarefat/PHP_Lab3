<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">
    <h3 class="text-center  mt-2 text-danger">Application Name :AAST_BIS class registration</h3>
    <form action = "index.php" method = "POST" class="container border border-black border-1 w-50 mt-2 p-3">
        <span class="text-danger">*Required Field</span>
        <div class="form-floating mb-3 w-75">
            <input type="text" class="form-control " id="userName" name="userName" placeholder="userName">
            <label for="userName">Name</label>
            <span class="text-danger">*
                <?php 
                    if(isset($_POST['submit'])){
                        if(empty($_POST['userName'])){
                            echo "Name is required";
                        }else{
                            $name = $_POST['userName'];
                        }
                    }
                ?>
            </span>
        </div>
        <div class="form-floating mb-3 w-75">
            <input type="email" class="form-control" id="userEmail" name="userEmail" placeholder="email">
            <label for="userEmail">email</label>
            <span class="text-danger">*<?php 
                    if(isset($_POST['submit'])){
                        if(empty($_POST['userEmail'])){
                            echo "Email is required";
                        }else{
                            $name = $_POST['userEmail'];
                        }
                    }
                    ?>
            </span>
        </div>
        <div class="form-floating w-75">
            <input type="number" class="form-control" id="userGroup" name="Group" placeholder="Group">
            <label for="userGroup">GroupNo</label>
            <span class="text-danger">*<?php 
                    if(isset($_POST['submit'])){
                        if(empty($_POST['Group'])){
                            echo "Group is required";
                        }else{
                            $name = $_POST['Group'];
                        }
                    }
                    ?>
            </span>
        </div>
        <div class="w-75 my-3" >
            <label>Gender</label>
            <input type="radio" value="female" name="gender">
            <input type="radio" value="male" name="gender"><span class="text-danger">*</span>
        </div>
        <div class="w-75">
            <select name="courses[]" multiple >
                <option value="PHP">PHP</option>
                <option value="Java Script">Java Script</option>
                <option value="my sql">my sql</option>
                <option value="HTML">HTMl</option>
            </select>
        </div>
        <div class="w-75 mt-3">
            <label>Agree</label>
                <input  type="checkbox" name="agree" value="agree" ><span class="text-danger">*</span>
        </div>
        

        <button type="submit" name="submit" class="btn btn-primary mt-3">Submit</button>
    </form>

<link rel="stylesheet" href="/node_modules/bootstrap/dist/js/bootstrap.min.js">
</body>
</html>