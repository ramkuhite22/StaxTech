<?php
session_start();

// Define the range
$min = 1;
$max = 100;

// Generate a random number if not already set
if (!isset($_SESSION['random_number'])) {
    $_SESSION['random_number'] = rand($min, $max);
    $_SESSION['attempts'] = 0;
}

// Process user input
$message = "";
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['guess'])) {
    $guess = intval($_POST['guess']);
    $_SESSION['attempts']++;

    if ($guess < $_SESSION['random_number']) {
        $message = "Too low! Try again.";
    } elseif ($guess > $_SESSION['random_number']) {
        $message = "Too high! Try again.";
    } else {
        $message = "Congratulations! You guessed the correct number {$_SESSION['random_number']} in {$_SESSION['attempts']} attempts.";
        session_destroy(); // Reset the game
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <title>Number Guessing Game</title>
</head>
<body>
    <h2>Guess the Number (Between <?php echo $min . " and " . $max; ?>)</h2>
    
    <form method="post">
        <input type="number" name="guess" required min="<?php echo $min; ?>" max="<?php echo $max; ?>">
        <button type="submit">Submit</button>
    </form>

    <p><?php echo $message; ?></p>
</body>
</html>
