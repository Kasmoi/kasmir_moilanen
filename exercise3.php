<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>php3</title>

</head>
<body>
<h1>exercise3</h1>
<h2>1 if august</h2>
<?php
#variable that gets the month in a text format
$curr_m=date("F");
if ($curr_m=="August") {
  #executes if august
  echo "It's August, so it's still holiday.";
}
else {
  #executes when not august
echo "Not August, This is ".$curr_m." so i don't have any holidays";
}
?>
<h2>2 color change</h2>
<?php
#color variable
$color="red";
if ($color=="red") {
  #prints red text if color is red
  echo"<p style=\"color:".$color.";\">The color is red.</p>";
} else {
#color is not red so displays this
echo "<p>The color is not red.</p>";
}

?>
<h2>3 program to grade</h2>
<?php
#var score is the grade
$score = 74;
#prints score to check what the score is
echo "Current score is ".$score." out of 100.<br>";
switch ($score) {
  #prints if above 80
  case $score>80:
    echo "Excellent";
    break;
    #prints if between 70 and 80
    case $score>70 && $score<80:
      echo "Great";
      break;
      #prints if between 60 and 70
      case $score>60 && $score<70:
        echo "Good";
        break;
        #prints if between 50 and 60
        case $score>50 && $score<60:
          echo "Pass";
          break;
          #prints if under 50
          case $score>50:
            echo "Fail";
            break;
  #a default
  default:
    echo "something went wrong. you dont have a grade";
}
?>
<h2>4 input</h2>
<!--form that asks for user input: name and Age
sends the information to the same page/refreshes the page
-->

<form action="exercise3.php" method="get">
Name: <input type="text" name="name"><br>
Age: <input type="number" name="age"><br>
<input type="submit">
</form>
<?php
echo "hello ".$_GET["name"]."<br>";
#checks if user has inputted name and age
if ($_GET["age"]!="" && $_GET["name"]!="") {
  #checks if user is inputted age of 18 or above
  if ($_GET["age"]>=18) {
    echo "Gongratulations! you are ".$_GET["age"]." years old so you are allowed to vote";
  }
  else {
    #gets the age
    echo "you are not old enough because you are ".$_GET["age"]." years old.<br>";
  }
}
#output if age or name null
else {
  echo "you didnt input your age and/or name";
}

 ?>
<h2>5 loopin statement</h2>
<?php
#loops the rows
for($i=8;$i>=0;$i--){
  #loops the rows content
  for($j=1;$j<=$i;$j++){
  echo $j;
  }
  #change row with pagebreak
echo "<br>";
}
?>
<h2>6 whileg looping</h2>
<?php
#current row
$i=0;
# max rows
 $rows=8;
 #which star it is on the row
  $star=0;

while($i < $rows ) {
  #ra new row starts
    $rows=8; $star=0;
    #prints a * when star is less than that rows size
    while($star <= $i){
        echo "*";
        $star++;
    }
    #change row with pagebreak
    echo "<br>";
    #i++ so that it repeats
    $i++;
}
?>
<h2>7 gits</h2>
<a href="https://github.com/Kasmoi/kasmir_moilanen.git">link to github</a><br>
<a href="https://kasmoi.github.io/Website_project/">link to team project page(hosted on my githubpages)</a>

</body>
