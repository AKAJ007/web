<!-- palindrome -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question 5</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>Welcome To This Page</h1>
    <div>
    <h2>Here to check the palindrome , YOU NEED</h2>
    <form method="post">
            <table>
                <tr>
                    <th>
                        <label>enter word to check palindrome</label>
                    </th>
                    <td>
                        <input type="text" name="nam" required >
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
$str = $_POST['nam'];
$str = strtolower(str_replace(' ', '', $str)); // optional: ignore case and spaces
$reversed = strrev($str);

if ($str === $reversed) {
    echo " $str is a Palindrome";
} else {
    echo " $str is Not a palindrome";
}
?>
</body>
</html>