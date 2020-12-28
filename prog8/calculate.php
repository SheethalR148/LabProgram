<html>
<head>
    <title>Calculation</title>
    <style>
    h1 {
        text-align:center;
    }
    </style>
</head>
<body>
<?php
    $op1=$_GET['op1'];
    $op2=$_GET['op2'];
    $operator=$_GET['operator'];
    $res=0;
    echo "<h1>Simple Calculator</h1>";
    switch ($operator)
    {
        case '+':$res=$op1+$op2;echo "<h1>$op1 + $op2 = $res</h1>";break;
        case '-':$res=$op1-$op2;echo "<h1>$op1 - $op2 = $res</h1>";break;
        case '*':$res=$op1*$op2;echo "<h1>$op1 * $op2 = $res</h1>";break;
        case '/':if($op2!=0) $res=$op1/$op2;echo "<h1>$op1 / $op2 = $res</h1>";break;

    }

?>
</body>
</html>
