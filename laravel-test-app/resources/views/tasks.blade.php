<?php
use App\Models\Tasks;
?>
<!DOCTYPE html>
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<title>Task Manager</title>
<body>
<h1>Task Manager</h1>
<div>
<p>Enter any new tasks you wish to plan in this form, then hit submit.</p>
    <div id="form">
     <form action="/addtask" method="post">
     @csrf
      <label for="taskname">Task Name:</label>
      <input type="text" id="taskname" name="taskname" placeholder="Name Of Task"><br><br>
      <label for="priority">Priority:</label>
      <input type="text" id="priority" name="priority" placeholder="1"><br><br>
      <label for="timestamp">Timestamp:</label>
      <input type="text" id="timestamp" name="timestamp" placeholder="1698011725"><br><br>
      <input type="submit" value="Submit">
    </form> 
    </div>

<?php $tasks = Tasks::all(); ?>
<div id="table">
<p>If you want to edit or remove any entries, you can do so in this table.
Click on any entry to edit its data.
Click and hold to drag and drop to change priority.</p>
    <table>
    <tr><td><div>Task Name</div></td><td><div>Priority</div></td><td><div>Timestamp</div></td></tr>
    <tbody>
    <?php 
        if (!empty($tasks)) {
            foreach ($tasks as $task) {
                echo '<tr><td><div contenteditable>' . $task->taskname . '</div></td>
        <td><div contenteditable>' . $task->priority . '</div></td>
        <td><div contenteditable>' . $task->timestamp . '</div></td></tr>';
            }
        }
    ?>
    </tbody>
    </table>
    </div>
</div>
</body>
</html>