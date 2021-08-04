<!DOCTYPE html>
<html>
<head>
	<title>First Page</title>
</head>
<body>
	<fieldset>
 <font color="green"><h2><b>Page 1 [Home]</b></h1></font>
    <font color="green"><h2><b>Digital Wallet</b></h1></font>

	<a  target="_blank" href="Page1.php">1.Home</a>
    <a  target="_blank" href="Page2.php">2.Tansaction History</a>
        

	<form name="digital wallet" action="digitalwalletAction.php" onsubmit="return validate()" method="POST">
		
		<font color="red"><h2>Fund Transfer:</h1></font>
        <select>
        <option value="0" style ="display:none" selected>Select Category</option>
        <option>mobile recharge</option>
        <option>send money</option>
        <option>merchabt pay</option>
        </select><br><br>


        <label for="to">To:</label>
		

		<input type="text" name="to" id="to">

		<br><br>

		<label for="ammount">Ammount:</label>
		<input type="ammount" name="ammount" id="ammoumt">

		<br><br>

		<input type="submit" name="submit" value="Submit">

	</form>

	<p id="errorMsg"></p>

	<script>
			function validate() {
				var isValid = false;
				var to = document.forms["digital wallet"]["to"].value;
				var ammount = document.forms["digital wallet"]["ammount"].value;

				if(to == "" || ammount== "") {
					document.getElementById("errorMsg").innerHTML = "<b>Please fill up the form properly.</b>";
					document.getElementById("errorMsg").style.color = "green";
				}
				else {
					isValid = true;
				}

				return isValid;
			}
		</script>

</body>
</html>