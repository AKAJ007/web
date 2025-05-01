<!-- calculator using separate fuction -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question 10</title>
    <link rel="stylesheet" href="style.css">
        
</head>
<body>
    <form method="post" action="">
    
<h1>Welcome To This Page</h1>
    <div>
    <h2>lets calculate, YOU NEED</h2>
        <table>
            <tr>
                <th>
                    <label>
                            Enter the First Number
                    </label>

                </th>
                <th>
                    <input type="number" id="" value="" name="First">
                    </th>
            </tr>
            <tr>
                <th>
                    <label>
                        Enter the Second Number
                    </label>
                </th>
                <th>
                    <input type="number" id="" value="" name="Second">
                </th>
            </tr>
            <tr>
                <th>
                <select name="OPERATOR">
                            <option value="x" >MULTIPLICATION</option>
                            <option value="/">DIVISION</option>
                            <option value="+">ADDITION</option>
                            <option value="-" >SUBSTRACTION</option>
                        </select>
                </tr>
                <tr>
        
                <th>
                    <input type="submit"  value="RESULT">
                </th>

                <!-- <th>
                <input type="text" id="" value="<?php echo $RESULT ?>" name="Result">
                </th> -->
            </tr>
        </table>
    </form>

    <?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
$FIRST_NUMBER=$_POST['First'];
$SECOND_NUMBER=$_POST['Second'];
$OPERATOR=$_POST['OPERATOR'];
$RESULT="";
switch($OPERATOR)
{
    case 'x':
        $RESULT=$FIRST_NUMBER*$SECOND_NUMBER;
    
        break; 
        
        case '/':
            $RESULT=$FIRST_NUMBER/$SECOND_NUMBER;
    
            break;

            case '+':
                $RESULT=$FIRST_NUMBER+$SECOND_NUMBER;
              
                break;

                case '-':
                    $RESULT=$FIRST_NUMBER-$SECOND_NUMBER;
        
                    break;
                   
}

echo " Here  $FIRST_NUMBER $OPERATOR $SECOND_NUMBER = $RESULT";
}
?>
</body>
</html>
