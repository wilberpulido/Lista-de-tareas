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
    <link rel="stylesheet" href="style/form.css">
    <link rel="stylesheet" href="style/style.css">
    <script src="https://kit.fontawesome.com/ae8e09c608.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="images/iconTask.icon"/>
    <script defer type="text/javascript" src="./funciones.js"></script>
    <title>Home page</title>
</head>
<body>

<?php 
if (empty($user)) {
?>
<div class="contenedor">
    <header>
        <div class="menu">
            <button class="btn btn-menu"> Menu</button>
            <div class="other-submenu">
                <button class="btn"> <a href="view/login.html"> Login </a> </button> 
                <button class="btn"> <a href="view/registration.html"> Register </a></button>
            </div>
            <?php
            $whyUseUrl ="view/whyUseApp.php" ;
            $aboutMeUrl = "view/aboutMe.php";
            $contactUrl = "view/contact.php";
            include("view/landingPage/header.php");
            ?>
        </div>
    </header>
    <main>
        <div class="titleWithoutLogin">
            <h2 class="text-center" >WELCOME</h2>
            <h4 class="text-center">Organize your days in a few steps</h4>
        </div>
        <figure>
            <img src="images/fo-1200x675.jpg" alt="homePage">
        </figure>
    </main>
</div>
<?php
} else{
?>
<div class= "contenedor">
    <header class="headerProfile">
        <div class="nav-profile bg-dark">
            <div>
                <h2> WELCOME <?php echo $user['firstName']." ".$user['lastName']."</h2>";?>
            </div>
            <div>
                <a href="controller/logout.php" >LOGOUT</a>
            </div>
        </div>
    </header>
    <main>
        <button class="btn btn-dark btn-add-task-form">
            add task
        </button>
        <div class="formBoxTask">
            <?php
                include_once("view/landingPage/formTask.html");
            ?>
        </div>
        <div class="tasksBox">
            <h2> THESE ARE THE TASKS </h2>
            <table id = "tableTask" >
                <thead>
                    <tr class="theadLarge">
                        <th><h4>Task</h4></th>
                        <th><h4>State</h4></th>
                        <th><h4>Priority</h4></th>
                        <th><h4>Deadline</h4></th>
                    </tr>
                    <tr class="theadSmall">
                        <th><h4>Task</h4></th>
                    </tr>
                </thead>
                <tbody>
            <?php
            while ($row = mysqli_fetch_assoc($taskResult)) {
                $urlDelete = "services/deleteTask.php?idTask=".$row['idTask'];
                $urlEdit = "view/editTaskForm.php?idTask=".$row['idTask'];
            ?>
                    <tr class="tbodyLarge">
                        <td class="taskTable">
                            <p>
                                <?php echo $row['task']?>
                            </p>
                        </td>
                        <td>
                            <p>
                                <?php echo $row['state']?>
                            </p>
                        </td>
                        <td>
                            <p>
                                <?php echo $row['priority']?>
                            </p>
                        </td>
                        <td>
                            <p>
                                <?php echo $row['deadline']?>
                            </p>
                        </td>
                        <td>
                            <button class="btn btn-edit">
                                <a href="<?php echo $urlEdit?>"> Edit </a>
                            </button>
                        </td>
                        <td>
                            <button class="btn btn-delete">
                                <a href="<?php echo $urlDelete?>">Delete</a>
                            </button>
                        </td>
                    </tr>
                    <tr class="tbodySmall">
                        <td class="taskTable">
                            <?php echo $row['task']?>
                        </td>
                        <td>
                            <button class="btn btn-details">
                                Details
                            </button>
                            <div class="detailsBox">
                                <div>
                                    <h4>Task:</h4>
                                    <p class="taskTable">
                                        <?php echo $row['task']?>
                                    </p>
                                </div>
                                <div class="btn-centered">
                                    <button class="btn btn-edit">
                                        <a href="<?php echo $urlEdit?>"> Edit </a>
                                    </button>
                                </div>
                                <div>
                                    <h4>State:</h4> 
                                    <p>
                                        <?php echo $row['state']?>
                                    </p>
                                </div>
                                <div class = "btn-centered">
                                    <button class="btn btn-delete">
                                        <a href="<?php echo $urlDelete?>">Delete</a>
                                    </button>
                                </div>
                                <div>
                                    <h4>Priority: </h4>
                                    <p>
                                        <?php echo $row['priority']?>
                                    </p>
                                </div>
                                <div>
                                    <!-- avoid -->
                                </div>
                                <div>
                                    <h4> Deadline:</h4> 
                                    <p>
                                        <?php echo $row['deadline']?>
                                    </p>
                                </div>
                            </div>
                        </td>
                    </tr>
            <?php
            }
            ?>
                </tbody>
            </table>
        </div>
    </main>
    <!-- <footer>
        <div>
            Holas
        </div>
    </footer> -->
<?php
}
?>


</div>
    
</body>
</html>