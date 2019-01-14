<!<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script> 
    <style>
        table,th,td 
        {
            border: 0.2px solid black;
        }
    </style>
  

</head>
<body>
<?php
$servername ="localhost";
$username ="root";
$password="";
$dbname="myDB";
$conn= new mysqli($servername,$username,$password,$dbname);
if ($conn->connect_error) {
    die("connection failed:".$conn->connect_error);
} 
/*$sql ="create database myDB";
if($conn->query($sql)===true)
{
    echo "database create successfull";
}
else echo "error creating database" .$conn->error ;

/*$table ="create table information (
    id int primary key auto_increment,
    name varchar(50),
    MSSV int ,
    diemToan int,
    diemVan int,
    diemAnh int )";
if ($conn->query($table)===true)
{
    echo "create table successful";
}
else echo "error creating table".$conn->error;


$delete="delete from information where id=2";
if ($conn->query($delete)===true)
{
    echo "delete is successfull";
}
else echo "delete isn't successfull. it occurs some errors".$conn->error;
$insert ="insert into information (name,MSSV,diemToan,diemVan,diemAnh) value ('kha',789456123,7,8,9)";

if ($conn->query($insert)===true)
{
    echo "insert successfull";
}
else echo "some errors occur" .$conn->error;*/
$output="select *from information ";
$result =$conn->query($output);

if ($result->num_rows>1)
{   
    echo "<table>
    <tr> 
        <th>ID</th> 
        <th>Name</th>
        <th>MSSV</th>
        <th>DiemToan</th>
        <th>DiemVan</th>
        <th>DiemAnh</th>
    </tr>";
    while($row=$result->fetch_assoc())
    {
        echo "<tr><th>".$row['id']."</th> <td>" .$row['name']."</td> <td>".$row['MSSV']."</td> <td>".$row['diemToan']."</td><td>".$row['diemVan']."</td> <td>".$row['diemAnh']."</td></tr>";
    }
    echo "</table> <br>";

}
    else echo "don't have result";  
   
    $conn->close();
    
    $servername ="localhost";
    $username ="root";
    $password="";
    $dbname="myDB";
    $conn=new mysqli($servername,$username,$password,$dbname);
    if ($conn->connect_error)
    {
        echo "connect error".$conn->connect_error;
    }
    
    $table1="create table information_2 (
        id int primary key auto_increment,
        noisinh varchar(50),
        tableID int,
        foreign key(tableID) references information(id) 
        )";
        
    // if ($conn->query($table1)===true)
    // {
    //     echo 'creating of table is successful ';
    // }
    // else {echo 'creating of table is error ';
    //     echo '<br>'.$conn->error;
    // }
    //  $add ="insert into information_2 (id,noisinh,tableID) values (1,'Da Nang',1);";
    //  $add="insert into information_2 (id,noisinh,tableID) values (2,'Hoi An',2)";
    //  $add="insert into information_2 (id,noisinh,tableID) values (3,'Quang NAm',3)";
    // $add="insert into information_2 (id,noisinh,tableID) values (4,'Da Lat',4)";
    // if($conn->multi_query($add)===true)
    // {
    //     echo "insert is successful ";   
    // }
    // else 
    // {
    //     echo "insert is error".$conn->error;
    // }
    $outPUT ="select * from information_2";
    $test =$conn->query($outPUT);
    if($test->num_rows>1)
    {
        echo "<table><tr><th>ID</th>
        <th>NoiSinh</th>
        <th>tableID</th></tr>";
        while($row=$test->fetch_assoc())
        {
            echo "<tr><th>".$row['id']."</th><td>".$row['noisinh']."</td><td>".$row['tableID']."</td></tr>";
        }
        echo "</table>";
    }
    else echo "the row isn't enough ";
    $join="select *from information left join information_2 on information.id=information_2.tableID";
    if($conn->query($join)===true)
    {
        echo "join is successful";
    }
    else echo "join isn't successful".$conn->error;
    $conn->close();
    ?>
</body>
</html>