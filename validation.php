<! <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <h2>FORM PHP VALIDATION</h2>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        Name: <input type ="text" name ="name" require><br>
        Email: <input type ="text" name ="email" require><br>
        Gender :
        <input type ="radio" name ="gender" value="female">Female
        <input type ="radio" name ="gender" value ="male">Male
        <input type ="radio" name ="gender" value ="other">Other
        <br>
        <button type="submit" name ="button">submit </button>
    </form>
    <?php 
        function VALIDATION($data)
        {
            $data=trim($data);
            $data =stripslashes($data);
            $data=htmlspecialchars($data);
            return $data;
        }

        $name =$email=$gender ="";
        $namerr=$emailrr=$genderrr="";
        if ($_SERVER['REQUEST_METHOD']=='POST')
        {
            if(VALIDATION($_POST['name'])) {
                $name =VALIDATION($_POST['name']);
                if (!preg_match ("/^[a-zA-z]*$/",$name))
                {
                    $namerr="only letters and whitespace are allowed";
                }
                else $namerr="name of field is required";
            }
            if (VALIDATION($_POST['email'])) 
            {
                $email=VALIDATION($_POST['email']);
                if(!filter_var($email,FILTER_VALIDATE_EMAIL))
                {
                    $emailrr="invalid email format";
                }
                else $emailrr="email of field is required";
            }
            if (VALIDATION($_POST['gender']))
            {
                $gender=VALIDATION($_POST['gender']);
            }
            else $genderrr="gender is required";
        }
        if (!$namerr && !$emailrr && !$genderrr)
        {
            
        echo "NAME: $name<br>";
        echo "EMAIL:$email <br>";
        echo "GENDER:$gender<br>";
        }


    ?>
</body>
</html>