<html>
<head>
    <title>Connection Example</title>
</head>
<body>
    <h1>Content of Login Table</h1>
    <table>
        <tr>
            <th>Name</th>
            <th>Mobile</th>
            <th>Username</th>
            <th>Password</th>
        </tr>
    <?php
        include "sql.php";
        $str="select * from login where ActiveFlag=1";
        $res=mysqli_query($sql,$str);
        while($arr=mysqli_fetch_assoc($res)){  ?>
            <td><</td>
        }
    ?>
    </table>
</body>
</html>
