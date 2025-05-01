<!-- Write a script that accepts user input (name, age) and displays a personalized message. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question 1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Welcome To This Page</h1>
    <div>
    <h2>Greeting Page</h2>
    <form method="post">
            <table>
                <tr>
                    <th>
                        <label>Name</label>
                    </th>
                    <td>
                        <input type="text" name="nam" required >
                    </td>
                </tr>
                <tr>
                    <th>
                        <label>Age</label>
                    </th>
                    <td>
                        <input type="number" name="age" required min="1" >
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


$name=$_POST['nam'];
$Age=(int)$_POST['age'];
echo"<div class='mes'>";
if($Age<18)
{
    echo"Hello <strong>$name</strong>!You're a Young explorer at $Age years old.Keep Dream Bigger......";
}
else if($Age>=18  && $Age<55)
{
    echo"Hello <strong>$name</strong>!At $Age years old ,you're in the Prime of your Life.Make every Moment count";
}
else
{
    echo"Greeting <strong>$name</strong>!with $Age years of  wisdom.your experience is truly inspiring!";
}
echo"</div>";
?>

</div>
    
    
    </body>
    </html>

