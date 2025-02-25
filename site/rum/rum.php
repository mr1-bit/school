<?php
session_start(); // Start the session

// Russian Alphabet with Translations
$russian_alphabet = [
    "А" => "A",
    "Б" => "B",
    "В" => "V",
    "Г" => "G",
    "Д" => "D",
    "Е" => "E",
    "Ё" => "Yo",
    "Ж" => "Zh",
    "З" => "Z",
    "И" => "I",
    "Й" => "Y",
    "К" => "K",
    "Л" => "L",
    "М" => "M",
    "Н" => "N",
    "О" => "O",
    "П" => "P",
    "Р" => "R",
    "С" => "S",
    "Т" => "T",
    "У" => "U",
    "Ф" => "F",
    "Х" => "Kh",
    "Ц" => "Ts",
    "Ч" => "Ch",
    "Ш" => "Sh",
    "Щ" => "Shch",
    "Ъ" => "Hard sign",
    "Ы" => "Y",
    "Ь" => "Soft sign",
    "Э" => "E",
    "Ю" => "Yu",
    "Я" => "Ya"
];

// Initialize incorrect and correct arrays if not already set
if (!isset($_SESSION['incorrect'])) {
    $_SESSION['incorrect'] = array_keys($russian_alphabet); // All letters start as incorrect
    $_SESSION['correct'] = []; // No correct letters initially
}

// Reset game if all letters are correct
if (empty($_SESSION['incorrect'])) {
    echo "<p style='color: green;'>Congratulations! You've correctly guessed all the letters!</p>";
    session_destroy(); // Clear session data
    echo '<a href="' . $_SERVER['PHP_SELF'] . '">Start Over</a>';
    exit;
}

// Handle user input and update the session
$message = ''; // Initialize feedback message
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['guess'])) {
    $guess = trim($_POST['guess']);
    $key = $_SESSION['key']; // Get the current letter from the session

    if (strcasecmp($russian_alphabet[$key], $guess) === 0) {
        // Correct guess
        $_SESSION['correct'][] = $key; // Add to correct list
        $_SESSION['incorrect'] = array_diff($_SESSION['incorrect'], [$_SESSION['key']]); // Remove from incorrect list
        $message = "<p style='color: green;'>Correct! The translation of '$key' is '{$russian_alphabet[$key]}'.</p>";
    } else {
        // Incorrect guess
        $message = "<p style='color: red;'>Incorrect! The correct translation of '$key' is '{$russian_alphabet[$key]}'.</p>";
    }

    // Clear current key after processing the guess
    unset($_SESSION['key']);
}

// Ensure a letter is selected for display only after processing the previous guess
if (!isset($_SESSION['key'])) {
    $_SESSION['key'] = $_SESSION['incorrect'][array_rand($_SESSION['incorrect'])];
}
$key = $_SESSION['key']; // Current letter to display
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guess the Translation</title>
</head>
<body>
    <h1>Guess the Translation</h1>
    <p>Translate this letter: <strong><?php echo $key; ?></strong></p>

    <form action="" method="post">
        <label for="guess">Your Guess:</label>
        <input type="text" id="guess" name="guess" required>
        <input type="submit" value="Submit">
    </form>

    <?php 
    // Display feedback message, if any
    if (!empty($message)) {
        echo $message;
    }
    ?>

    <p>Progress: <?php echo count($_SESSION['correct']); ?> correct out of <?php echo count($russian_alphabet); ?></p>
</body>
</html>

