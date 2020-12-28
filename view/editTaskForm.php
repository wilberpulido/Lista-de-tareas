<?php

require_once('../model/connection.php');

$query = "SELECT * FROM tasks WHERE idTask='".$_GET['idTask']."'";

$resultTask = mysqli_query($connect->conn,$query);

$task = mysqli_fetch_assoc($resultTask);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/form.css">
    <link rel="shortcut icon" href="../images/iconTask.icon"/>
    <title>Edit Task</title>
</head>
<body>

<div class="mt-5 container" style="width: 450px; background-color: lightgray; border-radius: 5px; padding: 50px 40px">
    <form action="../services/editTask.php" method="POST">
        <div class="d-flex flex-column">

            <label for="task">Task</label>
            <textarea id="editTask" required placeholder="Write something here" rows="3" cols="40" name = "task" id="task" type="text"><?php echo $task['task']?></textarea>
            
            <label class="mt-3" for="state">State</label>
            <select id="editState" name="state">
                <option selected value="<?php echo $task['state']?>"> <?php echo $task['state'] ?></option>
                <option value="In progress">In progress</option>
                <option value="At risk">At risk</option>
                <option value="Delayed">Delayed</option>
            </select>

            <label class="mt-3" for="priority">Priority</label>
            <select id="editPriority" name="priority">
                <option selected value="<?php echo $task["priority"]?>"> <?php echo $task["priority"] ?></option>
                <option value="Low">Low</option>
                <option value="Medium">Medium</option>
                <option value="High">High</option>
            </select>

            <label class="mt-3" for="deadline">Deadline</label>
            <input value="<?php echo $task['deadline']; ?>" id="editDeadline" class="mb-4" type="date" name="deadline">
            
            <input name="idTask" style="visibility: hidden; height: 0px;" value=<?php echo $task["idTask"]?> type="text">

            <button type="submit" class="btn btn-dark">Edit task</button>
        </div>
        </form>
    </div>

    </body>
</html>