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
    <link rel="stylesheet" href="style/form.css">
    <link rel="stylesheet" href="style/style.css">
    <script src="https://kit.fontawesome.com/ae8e09c608.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="images/iconTask.icon"/>
    <title>Home page</title>
</head>
<body>
<?php 
if (empty($user)) {
?>
<div class="contenedor">
    <header>
        <?php
            $whyUseUrl ="view/whyUseApp.php" ;
            $aboutMeUrl = "view/aboutMe.php";
            $contactUrl = "view/contact.php";
            $loginUrl = "view/login.php";
            $registerUrl = "view/registration.php";
            include("view/partials/header.php");
            ?>
    </header>
    <main>
        <section class="containerImagesHome">
            <div class="titleWithoutLogin">
                <div>
                    <h2 >WELCOME</h2>
                    <h4>Organize your days in a few steps</h4>
                </div>
            </div>
            <figure>
            </figure>
        </section>
    </main>
    <?php
        include("view/partials/footer.html");
    ?>
</div>
<?php
} else{
?>
<div class= "contenedor">
    <button class="menuProfile" >
        <i class="fas fa-bars fa-1x"></i>
    </button>
    <header id="headerProfile">
        <div class="nav-profile">
            <div>
                <h2> WELCOME <?php echo $user['firstName']." ".$user['lastName']."</h2>";?>
            </div>
            <div>
                <a href="controller/logout.php" >LOGOUT</a>
            </div>
        </div>
    </header>
    <main id=mainProfile>
        <div class="tasksBox">
            <h2> THESE ARE THE TASKS </h2>
            <div class="tableBox">
            <table id = "tableTask" >
                <thead>
                    <tr class="theadLarge">
                        <th><h4>Task</h4></th>
                        <th><h4>State</h4></th>
                        <th><h4>Priority</h4></th>
                        <th><h4>Deadline</h4></th>
                        <th></th>
                        <th></th>
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
                <script>
                function showDetails(id) {
                    document.getElementById("idTask"+id).style.marginBottom = "290px";
                    document.getElementById(id).style.display = "grid";
                }
                function hideDetails(id) {
                    document.getElementById("idTask"+id).style.marginBottom = "0px";
                    document.getElementById(id).style.display = "none";
                }
                </script>
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
                                <a href="<?php echo $urlEdit?>"><i class="far fa-edit"></i></a>
                            </button>
                        </td>
                        <td>
                            <button class="btn btn-delete">
                                <a href="<?php echo $urlDelete?>"><i class="fas fa-trash-alt"></i></a>
                            </button>
                        </td>
                    </tr>
                    <tr id="<?php echo "idTask".$row["idTask"]?>" class="tbodySmall">
                        <td class="taskTable">
                            <?php echo $row['task']?>
                        </td>
                        <td>
                            <button class="btn btn-details" onclick="showDetails(<?php echo $row["idTask"]?>)">
                                Details
                            </button>
                            <div id="<?php echo $row["idTask"]?>" class="detailsBox">
                                <div 
                                onclick="hideDetails(<?php echo $row["idTask"]?>)">
                                    <i class="fas fa-window-close fa-2x"></i>
                                </div>
                                <div>
                                    <h4>Task:</h4>
                                    <p class="taskTable">
                                        <?php echo $row['task']?>
                                    </p>
                                </div>
                                <div>
                                    <h4>State:</h4> 
                                    <p>
                                        <?php echo $row['state']?>
                                    </p>
                                </div>
                                <div>
                                    <h4>Priority: </h4>
                                    <p>
                                        <?php echo $row['priority']?>
                                    </p>
                                </div>
                                <div>
                                    <h4> Deadline:</h4> 
                                    <p>
                                        <?php echo $row['deadline']?>
                                    </p>
                                </div>
                                <div>
                                    <button class="btn btn-edit">
                                        <a href="<?php echo $urlEdit?>"><i class="far fa-edit"></i></a>
                                    </button>
                                </div>
                                <div>
                                    <button class="btn btn-delete">
                                        <a href="<?php echo $urlDelete?>"><i class="fas fa-trash-alt"></i></a>
                                    </button>
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
        </div>
        <button class="btn btn-add-task-form">
            ADD TASK
        </button>
        <div class="formBoxTask">
            <?php
                include_once("view/partials/formTask.html");
            ?>
        </div>
    </main>
<?php
}
?>
</div>
</body>
</html>