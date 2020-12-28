<html>
<head>
    <title>Multiply</title>
</head>
<body>
<?php
$arr1=array(
    array(1,2,3),
    array(4,5,6)
);
$arr2=array(
    array(7,8),
    array(9,10),
    array(11,12)
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
$res=array();
if(count($arr1)==count($arr2[0]) && count($arr1[0])==count($arr2)){
    echo "<h3>Resultant Matrix after multiplication is: </h3>";
    for($i = 0; $i < count($arr1); $i++)
        for($j = 0; $j < count($arr2[0]); $j++)
        {
            $res[$i][$j]=0;
            for($k=0;$k<count($arr2);$k++)
                $res[$i][$j]=$res[$i][$j]+$arr1[$i][$k]*$arr2[$k][$j];
        }
    for($i = 0; $i < count($res); $i++)
    {
        for ($j = 0; $j < count($res); $j++)
        {
            echo $res[$i][$j] . " ";
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


