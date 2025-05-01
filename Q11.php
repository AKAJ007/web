<!-- . Sum  of array elements-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question 11</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>Welcome To This Page</h1>
    <div>
    <h2>lets find som of  array elements, YOU NEED</h2>
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
    $sum=0;

    // Convert input string to array manually
    for ($i = 0; $i < strlen($input); $i++) {
        if ($input[$i] != ",") {
            $temp .= $input[$i];
        } else {
            $num = (int)$temp;
            $sum += $num;
            $temp = "";
        }
    }

    echo "Array elements are $input <br>";
    echo "sum of array elements = ".$sum;

}
?>
</body>
</html>