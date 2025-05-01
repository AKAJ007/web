<!-- . vowel count-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question 8</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>Welcome To This Page</h1>
    <div>
    <h2>lets count vowels, YOU NEED</h2>
    <form method="post">
            <table>
                <tr>
                    <th>
                        <label>enter THE string for count vowels</label>
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
function countVowels($str) {
$count = 0;
$vowels = ['a', 'e', 'i', 'o', 'u'];
foreach (str_split(strtolower($str)) as $char) {
if (in_array($char, $vowels)) $count++;
}
return "vowels in $str is $count";
}
$n=$_POST['nam'];
echo countVowels("$n");
?>
</body>
</html>