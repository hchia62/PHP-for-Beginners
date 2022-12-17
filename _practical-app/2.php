<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

		<aside class="col-xs-4">

	<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


		<article class="main-content col-xs-8">
		

<?php



		/* Step 1: Make 2 variables called number1 and number2 and set 1 to value 10 and the other 20:

		  Step 2: Add the two variables and display the sum with echo:


		  Step3: Make 2 Arrays with the same values, one regular and the other associative

		 
		 */

		 	// creating variables and assigning values to them
			$number1 = 7;
			$number2 = 13;

			// display the sum of the two variables
			echo $number1+$number2;
			echo "<br>";

			// display the difference of the two variables
			echo $number1-$number2;
			echo "<br>";

			// create original style array variable
			$numberList1 = array(
				1,3,7,13,"random"
			);

			// create new style array variable
			$numberList2 = [
				17,23,"prime"
			];

			// display array variable
			echo $numberList1[3];
			echo "<br>";
			echo $numberList1[4];
			echo "<br>";
			echo $numberList2[1];
			echo "<br>";

			// create associative array
			$names = array(
				"first_name" => 'Edwin',
				"last_name" => 'Diaz'
			);

			// display associative array values
			print_r($names);
			echo "<br>";

			// display formatted associative array values
			echo "<h1>First Name:</h1>"." ".$names['first_name']."<br>";
			echo "<h1>Last Name:</h1>"." ".$names['last_name']."<br>";

?>

	

		</article><!--MAIN CONTENT-->

<?php include "includes/footer.php"; ?>