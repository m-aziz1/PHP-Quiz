<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP tutorial</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <h1>Quiz</h1>
    <form action="<?php echo htmlspecialchars(
      $_SERVER["PHP_SELF"]
    ); ?>" method="post">
        <p>Q1. The ______ named Jupiter, Mars, Mercury, Saturn, and Venus.</p>
        <input type="text" name="q1-answer">
        <p>Q2. Ganymede is a moon of which planet?</p>
        <input type="text" name="q2-answer">
        <p>Q3. Black holes are areas in space with intense _______.</p>
        <input type="text" name="q3-answer">
        <p>Q4. The Universe is static. True/False</p>
        <input type="text" name="q4-answer">
        <p>Q5. Whats the root word for Earth? (Old English or German)</p>
        <input type="text" name="q5-answer">
        <p>Q6. The Big Bang was the start of the universe. True/False</p>
        <input type="text" name="q6-answer">
        <br>
        <button type="submit">Submit</button>
    </form>


</body>

</html>

<?php
$answers = [
  "qOne" => ["romans", "roman empire"],
  "qTwo" => ["jupiter"],
  "qThree" => ["gravity"],
  "qFour" => ["false"],
  "qFive" => ["eorthe", "erde"],
  "qSix" => ["true"],
];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
}


?>
