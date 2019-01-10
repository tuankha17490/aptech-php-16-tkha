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
    <form action="<?php echo $_SERVER ['PHP_SELF']?>" method ="POST" >
        your name: <input type="text" name ="name"><br>
        Projoct: <input type ="text" name ="project"><br>
        <button type ="submit">submit</button>

    </form>
    <?php 
    
        if ($_SERVER['REQUEST_METHOD']=='POST') {
            $name = $_POST['name'];
            $project =$_POST['project'];
            echo "YOUR NAME IS $name AND YOUR PROJECT IS $project";
        } 
    ?>
</body>
</html>