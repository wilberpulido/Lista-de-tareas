<?php
session_start();
require_once("./model/connection.php");

if (isset($_SESSION["idUser"])) {

    $queryTaks = "SELECT DISTINCT tasks.*, users.* FROM tasks, users WHERE tasks.idUser = "."'".$_SESSION["idUser"]."' AND users.idUSer = '".$_SESSION["idUser"]."'";
    $taskResult = mysqli_query($connect->conn,$queryTaks );

    $queryUser = "SELECT * FROM users WHERE idUser ="."'".$_SESSION["idUser"]."'";
    $userResult = mysqli_query($connect->conn,$queryUser);

    $user = null;

    if ($userResult->num_rows > 0) {
        $user = mysqli_fetch_assoc($userResult);

    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale = 1, user-scalable=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
    <link rel="shortcut icon" href="images/iconTask.icon"/>
    <title>Home page</title>
</head>
<body>

<?php 
if (empty($user)) {
?>
<div class="container-fluid">
    <header>
        <div>
            <button class="btn btn-dark btn-menu"> Menu</button>
            <div class="other-submenu">
                <button class="btn btn-dark"> login </button> 
                <!-- <?php echo __DIR__ ?> -->
                <button class="btn btn-dark"> Register</button>
            </div>
            <?php
            $whyUseUrl ="view/whyUseApp.php" ;
            $loginUrl ="view/login.html";
            $aboutMeUrl = "view/aboutMe.php";
            $registerUrl = "view/registration.html";
            $contactUrl = "view/contact.php";
            include("view/landingPage/header.php");
            ?>
        </div>
    </header>

    <main>
        <div class="withoutLogin">
            <div  class="titleWithoutLogin">
                <h2 class="text-center" >WELCOME</h2>
                <h4 class="text-center">Organize your days in a few steps</h4>
            </div>
        </div>
    </main>
</div>
<?php
} else{
?>
<div class= 'container-fluid'>
    <header class="navbar navbar-expand-lg navbar-dark bg-dark row">
        <div class='col-3'>
        </div>
        <div class='col-6 text-center'>
            <h2 class='text-white'> WELCOME <?php echo $user['firstName']." ".$user['lastName']."</h2>";?>
        </div>
        <div class= 'col-3 text-right'>
            <a class='text-white' href="controller/logout.php" >LOGOUT</a>
        </div>
    </header>
    <main class="mb-5">
        <div class="row">
            <div class="col-3 form">
                <?php
                    include_once("view/landingPage/formTask.html");
                ?>
            </div>
            <div class="col-9 tasksBox">
                <h3 class="text-center mt-4 mb-4"> THESE ARE THE TASKS </h3>
                <div class="row taskRow">
                    <div class="col-3 text-center">
                        <h4>Task</h4>
                    </div>
                    <div class="col-2 text-center">
                        <h4>State</h4>
                    </div>
                    <div class="col-2 text-center">
                        <h4>Priority</h4>
                    </div>
                    <div class="col-2 text-center">
                        <h4>Deadline</h4>
                    </div>
                </div>
                <div class="listTask">
                <?php
                while ($row = mysqli_fetch_assoc($taskResult)) {
                
                    $urlDelete = "services/deleteTask.php?idTask=".$row['idTask'];
                    $urlEdit = "view/editTaskForm.php?idTask=".$row['idTask'];
                ?>
                <br>
                <div class="row taskRow">
                    <div class="col-3 taskIndividualBox">
                        <p>
                            <?php echo $row['task']?>
                        </p>
                    </div>
                    <div class="col-2 text-center">
                        <p>
                            <?php echo $row['state']?>
                        </p>
                    </div>
                    <div class="col-2 text-center">
                        <p>
                            <?php echo $row['priority']?>
                        </p>
                    </div>
                    <div class="col-2 text-center">
                        <p>
                            <?php echo $row['deadline']?>
                        </p>
                    </div>
                    <div class="col-3 text-center">
                        <a href="<?php echo $urlEdit?>" class="btn btn-dark"> Edit </a>
                        <a href="<?php echo $urlDelete?>" class="btn btn-dark">Delete</a><?php ?>
                    </div>
                    
                </div>
                <br>
                <?php
                }
                ?>
            </div>
            </div>
        </div>
    </main>

<?php
}
?>


</div>
    
</body>
</html>