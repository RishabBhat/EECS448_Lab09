<html>
<body>

Question 1: "What is the capital of Spain?" <br>
You answered: : <?php echo $_POST["capital"]; ?> <br>
Correct answer: Madrid <br>

Question 2: Which country has the highest population? <br>
You answered: : <?php echo $_POST["country"]; ?> <br>
Correct answer: China <br>

Question 3: Which is the longest river in the world? <br>
You answered: : <?php echo $_POST["river"]; ?> <br>
Correct answer: The Nile <br>

Question 4: What is the largest desert in the world? <br>
You answered: : <?php echo $_POST["desert"]; ?> <br>
Correct answer: Sahara Desert <br>

Question 5: Which is the tallest mountain in the world? <br>
You answered: : <?php echo $_POST["mountain"]; ?> <br>
Correct answer: Mount Everest <br>

<?php

$count = 0;
if ($_POST["capital"] == "Madrid")
{
    $count = $count + 1;
}
if ($_POST["country"] == "China")
{
    $count = $count + 1;
}
if ($_POST["river"] == "The Nile")
{
    $count = $count + 1;
}
if ($_POST["desert"] == "Sahara Desert")
{
    $count = $count + 1;
}
if ($_POST["mountain"] == "Mount Everest")
{
    $count = $count + 1;
}
?>

The total number of questions you answered correctly is: <?php echo $count ?><br>
 
Your score is: 
<?php 

$percent = 0;
$percent = $count * 20;

echo $percent;

?>%
 <br>


</body>
</html>