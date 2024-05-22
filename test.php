<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connecting php file with mysql</title>
</head>
<body>
    <?php 
   /* $servername = "localhost";
    $username = "root";
    $password = "root";

    $conn = mysqli_connect($servername, $username, $password);
    
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
   

    $sql = "CREATE DATABASE student_marks";
    
    if (mysqli_query($conn, $sql)) {
        echo "Database was created successfully";
    } else {
        echo "Error creating the database: " . mysqli_error($conn);
    }*/
   
    $name=$_POST["txtname"];
    $regno=$_POST["txtregno"];
    $cat=$_POST["txtcat"];
    $exam=$_POST["txtexam"];


    $conn=mysqli_connect("localhost","root","root","student_marks") or die("couldnt connect to server");
    if(!$conn){
        die("connection not succesful".mysqli_connect_error());
    }
    $sql="INSERT INTO tbstudent(Stname,Reg_no,Cat,Exam) VALUES('$name',' $regno',' $cat',' $exam')";
    if(mysqli_multi_query($conn,$sql)){
        echo"Records entered successfully";
    }
    else{
        echo"error inserting records".mysqli_error($conn);
    }



    /*$sql="CREATE TABLE tbstudent
    (
        Stname VARCHAR(50) NOT NULL,
        Reg_no VARCHAR(50),
        Cat INT(50),
        Exam INT(50),
        PRIMARY KEY(Reg_no)
    )";

    if(mysqli_query($conn,$sql)){
        echo"Table created successfully";
    }
    else{
        echo"Error creating the table".mysqli_error($conn);
    }*/


    mysqli_close($conn);

     ?>
</body>
</html>
