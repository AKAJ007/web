<!-- . GCD of Two Numbers-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question 7</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>Welcome To This Page</h1>
    <div>
    <h2>Here to find the GCD of numberS, YOU NEED</h2>
    <form method="post">
            <table>
                <tr>
                    <th>
                        <label>enter THE First number for GCD</label>
                    </th>
                    <td>
                        <input type="number" name="nam" required >
                    </td>
                </tr>
                <tr>
                    <th>
                        <label>enter THE Second number for GCD</label>
                    </th>
                    <td>
                        <input type="number" name="sec" required >
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

    function gcd($a, $b) {
        while($b!=0){
            $temp=$b;
            $b=$a%$b;
            $a=$temp;
        }
        return $a; 
    }
    $a=$_POST['nam'];
    $b=$_POST['sec'];
    echo "GCD of two numbers $a and $b is: ".gcd($a, $b);
 ?>
</body>
</html>