<?php
	/* if the form has been submitted, show the thank you message */	
	if ($_POST['submit'] == 'Go'){
		echo "Thanks for giving me your name, ";
		$name = $_POST['firstname'];
		echo $name;
		
	/* if it hasn't been submitted, show the form */
	} else {
		?>
		<form action="form.php" method="post">
		First name: <input type="text" name="firstname"><br/>
		Last name: <input type="text" name="lastname">
		<input type="hidden" name="remember_first" value=""/>
		<input type="submit" name="submit" value="Go"/>
		</form>
		<?php
	}

?>

<h2>debug:</h2>
<?php
echo '<pre>';
print_r($_POST);
echo '<pre>';

?>