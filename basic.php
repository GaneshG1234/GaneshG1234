<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php first website</title>
</head>
<body>
    
    <div class="container">
        This My First php website
        <?php
        //Variable in Php
        $variable1=1;
        $variable2=7;
        echo $variable1;
        echo $variable2;
        echo $variable1 + $variable2;
        echo "Hello world this is printd using php";
        
        //Operator

        //Arthimatic Operator
        echo "<br>";
        echo "The value of variable1 + variable2 is ";
       
        echo "<br>";
        echo $variable1 + $variable2;
        echo "<br>";
        echo "The value of variable1 - variable2 is ";
       
        echo "<br>";
        echo $variable1 - $variable2;

        echo "<br>";
        echo "The value of variable1 * variable2 is ";
       
        echo "<br>";
        echo $variable1 * $variable2;

        echo "<br>";
        echo "The value of variable1 / variable2 is ";
       
        echo "<br>";
        echo $variable1 / $variable2;
        // Assignment Operator
        echo "<br>";
        $newVar= $variable1;
        echo "The value of new variable is ";
        echo $newVar;
        echo "<br>";    
        // Comparision Operator
        echo "The value of 1==4 is ";
        echo var_dump (1==4);
        echo "<br>";

        echo "The value of 1!=4";
        echo var_dump(1!=4);
        echo "<br>";

        echo "The Value of 1>=4";
        echo var_dump(1>=4);
        echo "<br>";

        echo "The value of 1<=4";
        echo var_dump(1<=4);

        // Increment and Decrement Operator
        echo "<br>";
       echo $variable2 ++;
       echo "<br>";
       echo $variable2--;
       echo "<br>";
       echo ++$variable2;
       echo "<br>";
       echo --$variable2;
        
        // Logical Operator

        // 1.and(&&)
        $myVar=(true and true);
        echo "<br>";
        echo var_dump($myVar);
        $myVar=(false and false);
        echo "<br>";
        echo var_dump($myVar);
        $myVar=(true and false);
        echo "<br>";
        echo var_dump($myVar);
        $myVar=(false and true);
        echo "<br>";
        echo var_dump($myVar);
        // 2.or(||)
        $myVar=(true or false);
        echo "<br>";
        echo var_dump($myVar);
        // 3.xor
        $myVar=(true  xor true);
        echo "<br>";
        echo var_dump($myVar);
        $myVar=(false  xor false);
        echo "<br>";
        echo var_dump($myVar);
        $myVar=(true xor false);
        echo "<br>";
        echo var_dump($myVar);
        $myVar=(false  xor true);
        echo "<br>";
        echo var_dump($myVar);
        // 4.not(|)
        

        //DataTypes In Php
        
        // 1.String
        // 2.Integer
        // 3.Float
        // 4.boolean
        // 5.array
        // 6.object
        
      
        ?>
       
    </div>
</body>
</html>