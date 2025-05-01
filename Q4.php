<!-- sum of digits using while loop -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question 4</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>Welcome To This Page</h1>
    <div>
    <h2>Here the Sum of digits, YOU NEED</h2>
    <form method="post">
            <table>
                <tr>
                    <th>
                        <label>enter number</label>
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
$num =$_POST['nam'];
$n=$num;
$sum = 0;
while ($num != 0) {
$sum += $num % 10;
$num = (int)($num / 10);
}
echo "Sum of digits in $n: $sum";
?>
</body>
</html>