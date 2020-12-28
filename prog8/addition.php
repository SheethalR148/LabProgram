<html>
<head>
    <title>Add</title>
</head>
<body>
<?php
    $arr1=array(
        array(1,2,3),
        array(4,5,6)
    );
    $arr2=array(
        array(7,8,9),
        array(10,11,12)
    );
    echo "<h3>Matrix A is: </h3>";
    for($i=0;$i<count($arr1);$i++)
    {
        for($j=0;$j<count($arr1[0]);$j++)
        {
            echo $arr1[$i][$j]." ";

        }
        echo "<br/>";
    }
    echo "<h3>Matrix B is: </h3>";
    for($i=0;$i<count($arr2);$i++)
    {
        for($j=0;$j<count($arr2[0]);$j++)
        {
            echo $arr2[$i][$j]." ";

        }
        echo "<br/>";
    }

    if(count($arr1)==count($arr2) && count($arr1[0])==count($arr2[0])){
        echo "<h3>Resultant Matrix after addition is: </h3>";
        for($i=0;$i<count($arr1);$i++)
        {
            for($j=0;$j<count($arr1[0]);$j++)
            {
                echo $arr1[$i][$j]+$arr2[$i][$j]." ";

            }
            echo "<br/>";
        }
    }
    else{
        echo "<h3>Dimension does not match</h3>";
    }

?>
</body>
</html>

