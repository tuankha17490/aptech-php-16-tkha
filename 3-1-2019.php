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
    <?php 
    
     function profile ($ten='kha', $project='web'){// profile là hàm 
        echo "<p>ten cua minh la :$ten<br> du an cua minh la: $project<br></p>";
    }
    $myName='Le Vu Tuan Kha';
    $myProject='hack facebook';
    profile($myName,$myProject);
    echo $myName;
    echo $myProject;

    
    function defines (){
        define("My_Name", "Le Vu Tuan Kha",true);
        echo My_Name;
    }
    defines ();
    function dataType (){
        $mang=array("1","2","tram");
        echo $mang[0].$mang[1].$mang[2];
    }
    dataType();
    function operator (){
        $a=10; // a la bien bat ki
        $b=11; // b la bien bat ki
        echo $a+$b;
    }
    function Condition(){
        $a=10;
        $b=15;
        if ($a>$b) echo "$a lon hon $b";
        else echo "$a be hon $b";
    }
    Condition ();

    


    ?>

</body>
</html>