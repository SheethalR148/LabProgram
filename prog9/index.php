<html lang="en">
<head>
    <title>Pattern Matching using Python</title>
</head>
<body>
<?php
$res=shell_exec("python states.py");
$resArr=explode("\n",$res);
echo "<h2>States are: $resArr[4]</h2>";
echo "<h2>State name that ends with xas: $resArr[0]</h2>";
echo "<h2>State name that begins with k and ends with s: $resArr[1]</h2>";
echo "<h2>State name that begins with m and ends with s: $resArr[2]</h2>";
echo "<h2>State name that ends with a: $resArr[3]</h2>";
?>
</body>
</html>

