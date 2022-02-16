<!-- phpstart -->
<?php
ini_set(option:'display_errors', value:'1');
ini_set(option:'display_startup_errors'value:'1');
error_reporting(error_level:E_ALL);

//if($variable) -- sorry...
//if(isset) -- thanks for all the fish but nope
//(array_key_exists) -- see isset()
//if (!empty)
//if (count...)

echo('<pre>');
var_dump($_GET);
echo('</pre>');

// !empty ==> isset + not null
if(!empty($_GET['amount'])){
    $resultingAmountOfGBP =$_GET['amount'] * 0.84;
}

//TODO: difference between print and echo
?>
<!-- phpend -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>