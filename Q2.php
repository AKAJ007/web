<!-- grade of mark -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question 2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>Welcome To This Page</h1>
    <div>
    <h2>See Your progress</h2>
    <form method="post">
            <table>
                <tr>
                    <th>
                        <label>enter mark for grade</label>
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
$marks =$_POST['nam'];
if ( $marks >= 90 ) echo "Grade A";
elseif ($marks >= 75) echo "Grade B";
elseif ($marks >= 60) echo "Grade C";
elseif ($marks >= 50) echo "Grade D";
elseif ($marks >= 40) echo "Grade E";
else echo "Grade F or invalid entry";
?>

</body>
</html>