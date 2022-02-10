<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Quintessential&display=swap" rel="stylesheet"> 
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;1,100;1,200;1,300;1,400;1,500;1,600&display=swap" rel="stylesheet"> 

    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <h1>Homework</h1>
    
<?php 
   echo "<h2>PHP এ ভেরিয়েবল ব্যবহারের নিয়ম:</h2>";
?>
<ul>
    <li>একটি ভেরিয়েবল $ চিহ্ন দিয়ে শুরু হয়, ভেরিয়েবলের নাম অনুসরণ করে</li>
    <li>একটি ভেরিয়েবল নাম অবশ্যই একটি অক্ষর বা আন্ডারস্কোর অক্ষর দিয়ে শুরু করতে হবে</li>
    <li>একটি ভেরিয়েবল নাম (যেমন: 1,2,3,4,5,) একটি সংখ্যা দিয়ে শুরু করা যাবে না</li>
    <li>একটি ভেরিয়েবল নাম শুধুমাত্র আলফা-সাংখ্যিক অক্ষর এবং আন্ডারস্কোর ধারণ করতে পারে (A-z, 0-9, এবং _ )</li>
    <li>ভেরিয়েবল নামগুলি কেস-সংবেদনশীল ($age এবং $aGe দুটি ভিন্ন ভেরিয়েবল)</li>
</ul>

<?php 
   echo "<h2>স্পষ্টভাবে বললে:</h2>";
?>
<ul>
    <li>$_myName // valid</li>
    <li>$myName  // valid</li>
    <li>$myVar21 // valid</li>
    <li>$_1Big   // invalid - underscore must be followed by a letter</li>
    <li>$1Big    // invalid - must begin with a letter or underscore</li>
    <li>$_er-t   // invalid contains non alphanumeric character (-)</li>
</ul>
</div>


<div class="container">
    <?php 
    
       define("MSG","Hello I'm Muhammad Shrabon Hossain");
       define("SBN", "Jani na ki lekhbo");
       echo MSG . "<br>" ;
       echo SBN . "<br>";


       define ("SBN__2","Eta ki kaj korbe ami jani na");
       echo SBN__2 ."<br>"."<br>"."<br>";



       define("YES2",202);

       if(defined("YES2")){
          echo "Yes its working";
       }else{
           echo "Its not working, <br> Please try another way";
       }
    

       define("HI",date('H'.'S'.'Y'));
       echo "<br>".HI."<br>";

       echo(pi()."<br>");
       echo('E'."<br>");
       echo(max(21,65,6,9,5,96)."<br>");
       echo(min(21,65,6,9,5,96)."<br>");
       echo(abs(-5.6))."<br>";
       echo(sqrt(81))."<br>";
       echo(rand())."<br>";
       echo(rand(15,206))."<br>";
       echo(round(15.206))."<br>";
       echo(round(15.806))."<br>";


       echo(strlen("Hi my name is Md. Shrabon Hossain")."<br>");
       echo(str_word_count("Hi my name is Md. Shrabon Hossain")."<br>");
    

       $nn = 5636;
       $mm = 56.36;

       var_dump(is_int($nn));
       echo("<br>");
       var_dump(is_float($mm));
       echo("<br>");
    

       $nmbr = 12.3e6;
       var_dump($nmbr);
       echo("<br>");
       echo("e");
       echo("<br>");

       $bbnn = acos(8);
       var_dump($bbnn);
    ?>
</div>
<form name="form1" method="post" action="math.php">
     <input name="sum1" type="text"><br>




 <input name="sum2" type="text"><br>
 <input name="sum3" type="text"><br>
 <input type="submit" name="submit" value="Sum"><br>
</form>
<?php
$sum1=$_POST['sum1'];
$sum2=$_POST['sum2'];
$sum3=$_POST['sum3'];
$total_sum=$sum1+$sum2+$sum3;
echo $total_sum;
?>

















</body>
</html>