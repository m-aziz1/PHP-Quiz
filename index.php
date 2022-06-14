<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Quiz</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <h1>Quiz</h1>
    <form action="./index.php" method="$_GET">
        <p>Q1. The ______ named Jupiter, Mars, Mercury, Saturn, and Venus.</p>
        <input type="text" name="1">
        <p>Q2. Ganymede is a moon of which planet?</p>
        <input type="text" name="2">
        <p>Q3. Black holes are areas in space with intense _______.</p>
        <input type="text" name="3">
        <p>Q4. The Universe remains a constant size. True/False</p>
        <input type="text" name="4">
        <p>Q5. Whats the root word for Earth? (Old English or German)</p>
        <input type="text" name="5">
        <p>Q6. The Big Bang was the start of the universe. (as far as we know) True/False</p>
        <input type="text" name="6">
        <br>
        <button type="submit">Submit</button>
    </form>
</body>

</html>

<?php
$answers = [
  ["romans", "roman empire"],
  ["jupiter"],
  ["gravity"],
  ["false"],
  ["eorthe", "erde"],
  ["true"],
];

$badResponses = ["You need to study", "Get good", "Try harder next time"];
$goodResponses = ["You are the goat", "Peak awesomeness", "Good job"];

// Returns 6 when Submitted
$questionsLength = count($_GET);

// If Submit Button Clicked
if ($questionsLength > 0) {
  $score = 0;
  $highestPossible = $questionsLength;

  for ($i = 1; $i <= $questionsLength; $i++) {
    if (in_array(strtolower($_GET[$i]), $answers[$i - 1])) {
      echo "<p class='correct'>Q{$i} correct</p>";
      $score++;
    } else {
      $corrections = implode(" or ", $answers[$i - 1]);
      echo "<p class='incorrect'>Q{$i} incorrect, the answer is: {$corrections}</p>";
    }
  }

  // Calculate and Output Final Score
  $finalScore = round(($score / $highestPossible) * 100);
  echo "<p>Your score is: {$score} / {$highestPossible} ({$finalScore}%)</p>";

  // Display Random response
  $randInd = rand(0, 2);
  if ($finalScore >= $highestPossible - 1) {
    echo "<p class='correct'>{$goodResponses[$randInd]}</p>";
  } else {
    echo "<p class='incorrect'>{$badResponses[$randInd]}</p>";
  }
}
?>
