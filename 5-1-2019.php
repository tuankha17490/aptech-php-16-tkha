<! <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>practice</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
    <style>
        
        table
        {
            border:1px solid ;
            text-align:center;
            padding:2px;

        }
        th,td 
        {
            border:1px solid ;
            text-align:center;
            padding:5px;
        }
    </style>
</head>
<body>
    
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>type</th>
                <th>price</th>
                <th>size</th>
                <th>ram</th>
                <th>made by</th>
                <th>made in</th>

            </tr>
        </thead>
        <tbody>
        <?php 
    $data = [
        [
            'type' => 'iphone',
            'property' => [
                'price' => 100,
                'size' => 6.5,
                'ram' => '2 GB',
                'made' => [
                    'by' => 'California',
                    'in' => 'China',
                ],
            ],
        ],
        [
            'type' => 'ipad',
            'property' => [
                'price' => 190,
                'size' => 7.9,
                'ram' => '4 GB',
                'made' => [
                    'by' => 'California',
                    'in' => 'China',
                ],
            ],
        ],
    ];
  
    foreach($data as $key => $authors)
    {
        echo '<tr>';
        echo "<th>$key</th>";
        foreach ($authors as $key =>$author)
        {
            if ($key=='type') echo "<td> $author</td>";
            else foreach ($author as $key => $authorone)
            {
                if ($key != 'made') echo "<td> $authorone</td>";
                else foreach ($authorone as $key => $authortwo)
                {
                    echo "<td> $authortwo</td>";
                }
            }
        }
        echo '</tr>';
    }
    
?>
        </tbody>

    </table>

</body>
</html>