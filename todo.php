<?php

$file = "vscode_todo.php";
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["task"])) {
    $task = escapeshellarg($_POST["task"]);
    $batFile = "C:\\path\\to\\AddTask.bat";
    
    // Run the batch file with the task as an argument
    exec("$batFile $task");

    echo "<p>Task added successfully! <a href='index.php'>Go Back</a></p>";
    $task = trim($_POST["task"]);
    $datetime = date("Y-m-d H:i:s");
    $todoEntry = "// TODO: $task (Added on $datetime)";

    // Append to the VS Code TODO file
    file_put_contents($file, $todoEntry . PHP_EOL, FILE_APPEND);

    echo "<p>Task added to VS Code TODOs! <a href='index.php'>Go Back</a></p>";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="style.css">
    <title>To-Do List</title>
</head>
<body>

<h2>To-Do List</h2>
<form method="POST">
    <input type="text" name="task" required>
    <button type="submit">Add Task</button>
</form>

<a href="tasks.txt" download>📥 Download Tasks</a>
<p>📂 Open `vscode_todo.php` in VS Code to see your TODOs.</p>


</body>
</html>
