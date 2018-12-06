<html>
<style>
body {background-color: aliceBlue; color: salmon; text-align: center;}
table {float: auto; margin: auto; font-size: 125%; border: 10px; text-align: center;}
th {padding: 20px;}
input#question {width: 55px;}
input#submit{width: 100px; height: 40px; background-color:salmon; color: aliceBlue; font-size: 125%;}
input#retry {width: 150px; height: 40px; background-color:salmon; color: aliceBlue; font-size: 125%;}
</style>
<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$dbname = "testDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

mysqli_select_db($conn, 'math');

// sql to create table
/*$sql = "CREATE TABLE math(
mID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
mQuestion VARCHAR(150) NOT NULL,
mAnswer VARCHAR(20) NOT NULL,
mPoints INT(4)
)";

if (mysqli_query($conn, $sql)) {
    echo "Table math created successfully";
} 
else {
    echo "Error creating table: " . mysqli_error($conn);
}

*/

$sql = "SELECT * FROM math where mAnswer = '2' || '1322.240' || '3.1DA75' || '160' || '4'";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) < 1 ){
	$sql = "INSERT INTO math (mQuestion, mAnswer, mPoints) VALUES ('Given a^10 = 74 (mod 650), find the GCD of a and 650', '2', 1), ('Convert 212.56 to base 5', '1322.240', 4),('Convert pi to base 14, get 4 digits after the fraction separator point; use A to represent the digit 10, B for 11, C for 12, and D for 13', '3.1DA75', 5), ('What is 650^650 (mod 240)?', '160', 1), ('Without finding the decimal expansion, find the length of the period length of the base 12 expansion of 11/360', '4', 1), ('What is ord 15 of 13?','4', 1),('How many combinations of nickels, dimes, and quarters can have 16 coins totaling two dollars?', '4', 1), ('What is the Euler-Phi function of 1429?', '1428', 1), ('If 12*w is congruent to 1234(mod 1331), what is w?', '1212(mod 1331)', 1), ('What is the reciprocal of 12(mod 1331)?', '111(mod 1331)', 1), ('If a^x is congruent to a^y which is congruent to 1(mod n), what is a^(x,y)?','1(mod n)', 1), ('What is 3^984 (mod 31)?', '2(mod 31)', 1), ('What is phi(21,000,000)?', '4800000', 1), ('True of false: 2047 is a base two pseudoprime', 'True', 1), ('What is the name of a number that is a psuedoprime to every integer base?', 'Carmichael number', 1) ";

	if (mysqli_query($conn, $sql)){
		//echo "New record created successfully";
	} 
	else{
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
	$sql = 'SELECT * FROM math';
	$result = mysqli_query($conn, $sql);
	if(mysqli_num_rows($result) > 0 ){
		while($row = mysqli_fetch_assoc($result)){
			echo "Question number ".$row["mID"]."<br> Question: ". $row["mQuestion"] ."<br> Correct Answer: ".$row["mAnswer"]. "<br> Score: ".$row["mPoints"] ."<br> <br>";
		}
	}
}
else {
	//echo "These records are already created!";
}




mysqli_select_db($conn, 'history');

// sql to create table
/*$sql = "CREATE TABLE history(
hID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
hQuestion VARCHAR(250) NOT NULL,
hAnswer VARCHAR(20) NOT NULL,
hPoints INT(4)
)";

if (mysqli_query($conn, $sql)) {
    echo "Table history created successfully";
} 
else {
    echo "Error creating table: " . mysqli_error($conn);
}

*/
$sql = "SELECT * FROM history where hAnswer = '1066'";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) < 1 ){
	$sql = "INSERT INTO history (hQuestion, hAnswer, hPoints) VALUES ('When was the Tower of London built?', '1066', 1), ('How many murex snails does it take to make one gram of Phoenician purple dye?', '9000', 1), ('What happened to the fourth wife of Henry VIII?', 'Divorced', 1), ('What word means throwing something out of a window?', 'Defenestration', 1), ('In which battle did Spain stop the Muslim advance into Europe?', 'Battle of Tours', 1), ('What language do they speak in Quito?', 'Quechua', 1), ('When did Greenwich mean time start?', '1884', 1), ('Who was the first democratically elected President of Russia?', 'Boris Yeltsin', 1),('What was the first city to reach a population of one million?', 'Rome', 1), ('How many years did the Hundred Years War last?', '116', 1), ('The first postage stamp was introduced in what year?', '1840', 1), ('What war lasted approximately 38 minutes?', 'Anglo-Zanzibar War', 1), ('How many major dynasties did China have?', '11',1), ('What year did World War II start?', '1939',1), ('Who was the first female Canadian Prime Minister?', 'Kim Campbell', 1)";
	if (mysqli_query($conn, $sql)){
		//echo "New record created successfully";
	} 
	else{
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
	$sql = 'SELECT * FROM history';
	$result = mysqli_query($conn, $sql);

	if(mysqli_num_rows($result) > 0 ){
		while($row = mysqli_fetch_assoc($result)){
			echo "Question number ".$row["hID"]."<br> Question: ". $row["hQuestion"] ."<br> Correct Answer: ".$row["hAnswer"]. "<br> Score: ".$row["hPoints"] ."<br> <br>";
		}
	}
}
else{
	//echo "These records are already created!";
}



mysqli_select_db($conn, 'chemistry');

// sql to create table
/*$sql = "CREATE TABLE chemistry(
cID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
cQuestion VARCHAR(250) NOT NULL,
cAnswer VARCHAR(30) NOT NULL,
cPoints INT(4)
)";

if (mysqli_query($conn, $sql)) {
    echo "Table chemistry created successfully";
} 
else {
    echo "Error creating table: " . mysqli_error($conn);
}
*/
$sql = "SELECT * FROM chemistry where cAnswer = '22.4'";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) < 1 ){
	$sql = "INSERT INTO chemistry (cQuestion, cAnswer, cPoints) VALUES  ('How many atoms/molecules are in a mole?', '6.02^23', 1), ('How many litres of gas are in 1 mole at STP?', '22.4', 1), ('How many functional groups are there?', '14', 1), ('What is the atomic number of hydrogen?', '1', 1), ('How many double bonds are in napthalene?', '5', 1), ('What is the common name of Ascorbic acid?', 'Vitamin C', 1), ('What is the molecular formula of water?', 'H2O', 1), ('How many atoms are in one molecule of Calcium Oxide?', '2', 1), ('What is the most electronegative element?', 'Fluorine', 1), ('What is the chemical name of table salt?', 'Sodium Chloride', 1), ('Is cyclohexane a polar or nonpolar molecule?', 'Nonpolar', 1), ('How many types of intermolecular forces are there?', '3', 1), ('What is the organization that decides on the naming conventions of organicc molecules?', 'IUPAC', 1), ('What is the common name of 2-hydroxyethanoic acid?', 'Glycolic acid', 1), ('Which functional group does propanone fall under?' , 'Ketone',1)";
	if (mysqli_query($conn, $sql)){
		echo "New record created successfully";
	} 
	else{
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
	$sql = 'SELECT * FROM chemistry';
	$result = mysqli_query($conn, $sql);
	if(mysqli_num_rows($result) > 0 ){
		while($row = mysqli_fetch_assoc($result)){
			echo "Question number ".$row["cID"]."<br> Question: ". $row["cQuestion"] ."<br> Correct Answer: ".$row["cAnswer"]. "<br> Score: ".$row["cPoints"] ."<br> <br>";
		}	
	}
}
else{
	//echo "These records already exist";
}



?>

<!-- This is the form -->
<h1>
<?php 
	echo "Hello ". $_POST['firstName'] ." ". $_POST['lastName']."! Welcome to the ". $_POST['test'] ." test!";
?>
</h1>
<form action = "scoreForm.php" method = "POST">
<table>
	<colgroup>
	<tr>
	<th>
<?php 
	$table = "";
	$column = "";
	if ($_POST['test'] == 'math'){
		$table = 'math';
		$column = 'm';
	}
	else if ($_POST['test'] == 'history'){
		$table = "history";
		$column = "h";
	}	
	else{
		$table = "chemistry";
		$column = "c";
	}
	$randquestion = rand(1, 15);
	$randIDs = array();
	for($x = 0; $x<10; $x++){
		$randquestion = rand(1,15);
		while(array_search($randquestion, $randIDs) != FALSE){
			$randquestion = rand(1,15);
		}
		$randIDs[$x] = $randquestion;
		
	}
	
	$sql = "SELECT ". $column ."Question from ".$table ." WHERE ".$column."ID = ".$randIDs[0]."";
	mysqli_select_db($conn, $table);
	//echo $sql;
	$questionType = ''.$column.'Question';
	$result = mysqli_query($conn, $sql);
	if(mysqli_num_rows($result) > 0 ){
		while($row = mysqli_fetch_assoc($result)){
			echo $row[$questionType];
		}
	}
?>	
	</th>
	<th>  <input id = "question" type = "text" name = "q1"><br> </th>
	</tr>
	<tr> 
	<th>
	
<?php 
	
	$sql = "SELECT ". $column ."Question from ".$table ." WHERE ".$column."ID = ".$randIDs[1]."";
	mysqli_select_db($conn, $table);
	//echo $sql;
	$questionType = ''.$column.'Question';
	$result = mysqli_query($conn, $sql);
	if(mysqli_num_rows($result) > 0 ){
		while($row = mysqli_fetch_assoc($result)){
			echo $row[$questionType];
		}
	}
?>
	</th>
	<th> <input id= "question" type = "text" name = "q2"> <br> </th>
	</tr> 
	<tr> 
	<th>
	
<?php
	
	$sql = "SELECT ". $column ."Question from ".$table ." WHERE ".$column."ID = ".$randIDs[2]."";
	mysqli_select_db($conn, $table);
	//echo $sql;
	$questionType = ''.$column.'Question';
	$result = mysqli_query($conn, $sql);
	if(mysqli_num_rows($result) > 0 ){
		while($row = mysqli_fetch_assoc($result)){
			echo $row[$questionType];
		}
	}
?>
	</th>
	<th> <input id= "question" type = "text" name = "q3"> <br> </th>
	</tr> 
	<tr> 
	<th>
	
<?php
	
	$sql = "SELECT ". $column ."Question from ".$table ." WHERE ".$column."ID = ".$randIDs[3]."";
	mysqli_select_db($conn, $table);
	//echo $sql;
	$questionType = ''.$column.'Question';
	$result = mysqli_query($conn, $sql);
	if(mysqli_num_rows($result) > 0 ){
		while($row = mysqli_fetch_assoc($result)){
			echo $row[$questionType];
		}
	}
?>
	</th>
	<th> <input id= "question" type = "text" name = "q4"> <br> </th>
	</tr> 
	<tr> 
	<th>
	
<?php
	
	$sql = "SELECT ". $column ."Question from ".$table ." WHERE ".$column."ID = ".$randIDs[4]."";
	mysqli_select_db($conn, $table);
	//echo $sql;
	$questionType = ''.$column.'Question';
	$result = mysqli_query($conn, $sql);
	if(mysqli_num_rows($result) > 0 ){
		while($row = mysqli_fetch_assoc($result)){
			echo $row[$questionType];
		}
	}
?>
	</th>
	<th> <input id= "question" type = "text" name = "q5"> <br> </th>
	</tr> 
	<tr> 
	<th>
	
<?php
	
	$sql = "SELECT ". $column ."Question from ".$table ." WHERE ".$column."ID = ".$randIDs[5]."";
	mysqli_select_db($conn, $table);
	//echo $sql;
	$questionType = ''.$column.'Question';
	$result = mysqli_query($conn, $sql);
	if(mysqli_num_rows($result) > 0 ){
		while($row = mysqli_fetch_assoc($result)){
			echo $row[$questionType];
		}
	}
?>
	</th>
	<th> <input id= "question" type = "text" name = "q6"> <br> </th>
	</tr> 
	<tr> 
	<th>
	
<?php
	
	$sql = "SELECT ". $column ."Question from ".$table ." WHERE ".$column."ID = ".$randIDs[6]."";
	mysqli_select_db($conn, $table);
	//echo $sql;
	$questionType = ''.$column.'Question';
	$result = mysqli_query($conn, $sql);
	if(mysqli_num_rows($result) > 0 ){
		while($row = mysqli_fetch_assoc($result)){
			echo $row[$questionType];
		}
	}
?>
	</th>
	<th> <input id= "question" type = "text" name = "q7"> <br> </th>
	</tr> 
	<tr> 
	<th>
	
<?php
	
	$sql = "SELECT ". $column ."Question from ".$table ." WHERE ".$column."ID = ".$randIDs[7]."";
	mysqli_select_db($conn, $table);
	//echo $sql;
	$questionType = ''.$column.'Question';
	$result = mysqli_query($conn, $sql);
	if(mysqli_num_rows($result) > 0 ){
		while($row = mysqli_fetch_assoc($result)){
			echo $row[$questionType];
		}
	}
?>
	</th>
	<th> <input id= "question" type = "text" name = "q8"> <br> </th>
	</tr> 
	<tr> 
	<th>
	
<?php
	
	$sql = "SELECT ". $column ."Question from ".$table ." WHERE ".$column."ID = ".$randIDs[8]."";
	mysqli_select_db($conn, $table);
	//echo $sql;
	$questionType = ''.$column.'Question';
	$result = mysqli_query($conn, $sql);
	if(mysqli_num_rows($result) > 0 ){
		while($row = mysqli_fetch_assoc($result)){
			echo $row[$questionType];
		}
	}
?>
	</th>
	<th> <input id= "question" type = "text" name = "q9"> <br> </th>
	</tr> 
	<tr> 
	<th>
	
<?php
	
	$sql = "SELECT ". $column ."Question from ".$table ." WHERE ".$column."ID = ".$randIDs[9]."";
	mysqli_select_db($conn, $table);
	//echo $sql;
	$questionType = ''.$column.'Question';
	$result = mysqli_query($conn, $sql);
	if(mysqli_num_rows($result) > 0 ){
		while($row = mysqli_fetch_assoc($result)){
			echo $row[$questionType];
		}
	}
?>
	</th>
	<th> <input id= "question" type = "text" name = "q10"> <br> </th>
	</tr> 
	</table>
<br>
<input id = "submit" type = "submit" value = "Submit">
<!-- This will refresh the page so the user can resubmit -->
<input type="button" id="retry" name = "redo" onclick = "location.href='EvaTestPage.php'" value = "Clear Form"></button> 
</form>
</html>