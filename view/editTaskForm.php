<?php
require_once('../model/Connection.php');
$idTask = $_GET['idTask'];
$task = $_GET['task'];
$state = $_GET['state'];
$priority = $_GET['priority'];
$deadline = $_GET['deadline'];
?>
<!DOCTYPE html>
<html lang="en">
<?php 
    include("partials/head.html");
?>
<body>
<div class="contenedor">
    <div class="formBoxEditTask">
        <form action="../controller/editTask.php" method="POST">
        <div>
            <div class="input-container-addTask">
                <label for="task">Task</label>
                <textarea id="editTask" required placeholder="Write something here" 
                    rows="3" cols="40" name = "task" id="task" type="text"><?php echo $task?></textarea>
            </div>
            <div class="input-container-addTask">
                <label for="state">State</label>
                <select id="editState" name="state">
                    <option selected value="<?php echo $state?>"> <?php echo $state?></option>
                    <option value="In progress">In progress</option>
                    <option value="At risk">At risk</option>
                    <option value="Delayed">Delayed</option>
                </select>
            </div>
            <div class="input-container-addTask">
                <label for="priority">Priority</label>
                <select id="editPriority" name="priority">
                    <option selected value="<?php echo $priority?>"> <?php echo $priority ?></option>
                    <option value="Low">Low</option>
                    <option value="Medium">Medium</option>
                    <option value="High">High</option>
                </select>
            </div>
            <div class="input-container-addTask">
                <label for="deadline">Deadline</label>
                <input value="<?php echo $deadline; ?>" id="editDeadline" class="mb-4" type="date" name="deadline">
            </div>
            <div class="input-container-addTask btn-submit">
                <input name="idTask" style="display:none; height: 0px;" value=<?php echo $idTask ?> type="text">
                <button class="btn" type="submit">Edit Task</button>
            </div>
        </div>
        </form>
    </div>
</div>
    </body>
</html>

<?php
$instanceConnect -> disconnect();
?>