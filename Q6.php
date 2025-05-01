<!-- factorial-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question 6</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>Welcome To This Page</h1>
    <div>
    <h2>Here to find the factorial of number, YOU NEED</h2>
    <form method="post">
            <table>
                <tr>
                    <th>
                        <label>enter number for factorial</label>
                    </th>
                    <td>
                        <input type="number" name="nam" required >
                    </td>
                </tr>
               
               
                <tr>
                    <td>
                        <input type="submit" value="Submit" >
                    </td>
                 </tr>
              
            </table>

     </form>
     <?php
function factorial($n) {
    $result = 1;
    for ($i = 2; $i <= $n; $i++) {
        $result *= $i;
    }
    return  "factorial of $n is  $result";
}

$f=$_POST['nam'];
echo factorial($f); 

?>
</body>
</html>