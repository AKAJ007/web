<!-- //print all even numbers 1 to 100 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question 3</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>Welcome To This Page</h1>
    <div>
    <h2>Here the Even NumberS YOU NEED</h2>
    <form method="post">
            <table>
                <tr>
                    <th>
                        <label>Starting number</label>
                    </th>
                    <td>
                        <input type="number" name="nam" required >
                    </td>
                </tr>
                <tr>
                    <th>
                        <label>ending number</label>
                    </th>
                    <td>
                        <input type="number" name="end" required >
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
$start=$_POST['nam'];
$end=$_POST['end'];
echo " the enen numbers from $start to $end are  ";
for ($i =$start; $i <= $end; $i++) {
if ($i % 2 == 0) echo " $i ";
}
?>

</body>
</html>