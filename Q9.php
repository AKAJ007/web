<!-- . max and min from array-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question 9</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>Welcome To This Page</h1>
    <div>
    <h2>lets find max and min from array, YOU NEED</h2>
    <form method="post">
            <table>
                <tr>
                    <th>
                        <label>enter THE array values</label>
                    </th>
                    <td>
                        <input type="text" name="nam" required >
                    </td>
                </tr>
                <tr>
                 
               
               
                <tr>
                    <td>
                        <input type="submit" value="Submit" >
                    </td>
                 </tr>
              
            </table>

     </form>

   
     <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input = $_POST["nam"];
    $input .= ","; // Add comma to handle last number

    $arr = [];
    $temp = "";

    // Convert input string to array manually
    for ($i = 0; $i < strlen($input); $i++) {
        if ($input[$i] != ",") {
            $temp .= $input[$i];
        } else {
            $arr[] = (int)$temp;
            $temp = "";
        }
    }

    // Find max and min manually
    $max = $arr[0];
    $min = $arr[0];

    for ($i = 1; $i < count($arr); $i++) {
        if ($arr[$i] > $max) {
            $max = $arr[$i];
        }
        if ($arr[$i] < $min) {
            $min = $arr[$i];
        }
    }
    echo "Array elements are $input <br>";
    echo "Maximum value: $max <br>";
    echo "Minimum value: $min";
}
?>
</body>
</html>