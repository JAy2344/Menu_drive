<html>
<head>
    <title>Menu-Driven Calculator</title>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['submit'])) {
        $choice = $_POST["choice"];
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $result = 0;

        if ($choice == 1) {
            $result = $num1 + $num2;
        } elseif ($choice == 2) {
            $result = $num1 - $num2;
        } elseif ($choice == 3) {
            $result = $num1 * $num2;
        } elseif ($choice == 4) {
            if ($num2 != 0) {
                $result = $num1 / $num2;
            } else {
                echo "Error: Division by zero is not allowed.";
                exit;
            }
        } else {
            echo "Invalid choice.";
            exit;
        }

        echo "Result: " . $result;
    }
}

?>
    <h3>Menu-Driven Calculator</h3>
    <form Method="post" action ="">
        <table border="2"> 
            <tr>
                <td>Enter first number:</td>
                <td><input type="number" name="num1"></td>
            </tr>
            <tr>
                <td>Enter second number:</td>
                <td><input type="number" name="num2" ></td>
            </tr>
			<tr>
                <td><label for="choice">Select your choice:</label></td>
                <td>
                    <select name="choice">
                        <option value="1">Addition</option>
                        <option value="2">Subtraction</option>
                        <option value="3">Multiplication</option>
                        <option value="4">Division</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" value="Calculate"></td>
            </tr>
            <tr>
			
                <td>Your result:</label></td>
                
            </tr>
        </table>
    </form>
	

</body>
</html>