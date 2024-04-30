<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["query"])) {
    // Specify the full path to the Python executable
    $pythonExecutable = 'C:\Users\nisha\AppData\Local\Programs\Python\Python312\python.exe';

    // Python script to execute
    $pythonScript = 'C:\Users\nisha\Desktop\iiitg\sem2\linuxsupport\file1.py';

    // Command to execute Python script with query as argument
    $command = "$pythonExecutable $pythonScript \"" . $_POST["query"] . "\"";

    // Execute the command and capture output
    $output = shell_exec($command);

    // Display the output
    echo "<pre>$output</pre>";
}
?>
