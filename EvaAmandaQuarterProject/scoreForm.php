<html>
<style> 
body {background-color: aliceBlue; color: salmon; text-align: center; font-size: 125%}
button#retry {width: 150px; height: 40px; background-color:salmon; color: aliceBlue;}
</style>
<body>
<h1> Test Results </h1>
<?php
/* These are the variables I will be using */
$score = 0;

for($x=1; $x<11; $x++){
	$qnumber = "q".$x."";
	if(empty($_POST[$qnumber])) {
		$score += 0;
	}
	else{
		$score += 1;
	}
}

/* This is calculating the subtotal*/

echo "Your score is " .$score. " out of 10 <br>";
$message = "";
if($score<8){
	$message = "Unfortunately, you did not pass the test. Study harder next time!";
}
else{
	$message = "Congratulations! You passed the test!";
}

?>
<br>
Thank you for taking your test!!! 
<?php
echo $message;
?>
<br> Want to take a different one? Click on the button below! <br> <br>
<button id="retry" name = "form" onclick = "location.href='chooseTest.html'"> Order Again </button> 
</body>
</html>