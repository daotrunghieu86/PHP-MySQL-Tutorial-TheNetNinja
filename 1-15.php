<?php
    // STRING
    echo "------- STRING -------" . "<br>";
    define('LNAME', 'Trung');
    define('lNAME', 'TrungTau');
    
    $fname = 'Hieu';
    $age = 23;
    $fname = "Trung Hieu";

    
    $crush = "Bi";
    echo $fname.$crush ." (". $crush[0] . ") \r\n";
    echo strlen($crush);
    echo strtoupper($crush) . " ";
    echo str_replace('B', 'b', $crush);
    echo "<br>";


    echo 'Hey my name is ' . $fname . ", I'm crushing on " . $crush;
    echo "<br><br>";

    echo 'Hey my name is  $fname I am crushing on $crush But she probably do not know that \'borrow\' "huhu" ';

    echo nl2br("\n Hey my name is  $fname \r\n I'm crushing on $crush \n But she probably don't know that \n");
    echo "<br>";
    echo "If you view the source of output frame \n you will find a newline in this string.";
    echo nl2br("\n You will find the \n newlines in this string \r\n on the browser window.");
    echo "<br> <br>";

    // NUMBER
    echo "------- NUMBER -------" . "<br>";
    $radius = 5;
    $pi = 3;
    echo $radius * $pi**2 . " ";
    $radius-- ;
    $pi++;
    $pi += 2; // 6
    echo $radius + $pi . "<br>"; // 10
    
    $pi = 3.14;
    echo floor($pi) . " " . ceil($pi) . " " . pi() . "<br> <br>";

    // // ARRAY
    echo "------- ARRAY -------" . "<br>";
    $nameCrush = ['huong', 'bi', 'xoan'];
    $name = 'huongbi';
    echo $nameCrush[1] . " " . $name[0] . "<br>";

    $ages = array(1,2,3,4);
    $names = ['huong', 'bi', 'xoan'];
    $ages[0] = 1.1;
    $ages[] = 5;
    array_push($ages, 6);
    array_unshift($ages, 0);
    $merge2arrays = array_merge($names, $ages);
    
    $associateArray = ['hieu'=>23, 'huong'=>23, 'result'=>'none'];
    $associateArray['hope'] = 'no';
    $associateArray['huong'] = 22;
    
    // echo $ages; // error; have to exchange Array to string conversion
    print_r($ages); // use 'print_r' to extract to be array
    echo "<br>";
    print_r($names);
    echo "<br>";
    print_r($merge2arrays) ;
    echo "<br>";
    print_r($associateArray);
    echo "<br>" . $associateArray['hieu'];
    echo "<br>" . count($associateArray);

    $blogs = [
        ['name'=>'hieu', 'sex'=>'male', 'age'=>23],
        ['huong', 'female', 23],
        ['bi', 'female', 23]
    ];
    print_r($blogs);
    echo "<br>";
    print_r($blogs[1][0]);
    echo "<br>";
    print_r($blogs[0]['age']);
    echo "<br> <br>";

    //  LOOP
    echo "------- LOOP -------" . "<br>";
    $totals = [1,2,3,4,5];
    for ($i = 0; $i < count($totals); $i++) {
        echo $totals[$i];
    }
    echo "<br>";

    foreach($totals as $total) {
        echo $total;
    }
    echo "<br>";

    $products = [
        ['name'=>'chuoi', 'price'=>12],
        ['name'=>'tao', 'price'=>2],
        ['name'=>'buoi', 'price'=>15],
        ['name'=>'le', 'price'=>8],
        ['name'=>'xoai', 'price'=>9],
        ['name'=>'quyt', 'price'=>17],
    ];
    foreach ($products as $product) {
        echo $product['price']." ";
    }
    echo "<br>";
    $i = 0;
    while($i < count($products)) {
        echo $products[$i]['name'] . ' ';
        ++$i;
    }
    echo "<br> <br>";

    // BOOLEANS & COMPARISONS
    echo "------- BOOLEANS & COMPARISONS -------" . "<br>";
    // numbers
    echo true; // 1
    echo false; // "" 
    echo 5 < 10;
    echo 5 > 10;
    echo 5 == 10;
    echo 5 != 10;
    echo 5 <= 5;
    echo 5 >= 5;
    echo "<br>";

    // strings
    echo 'abc' < 'bcd'; // true == '1' // comparison the first letter from the left to reach to dãy cuối cùng trong alphabet hơn thì lớn hơn
    echo 'abc' > 'bad'; // false == ''
    echo 'cbc' > 'bad'; // true == '1'
    echo 'efg' > 'Efg'; // true == '1 // the lowercase letter is larger than uppercase
    echo 'hieu' == 'hieu'; // true = '1';
    echo "<br>";
    echo 'hieu ' == 'hieu'; // false = ''

    // loose and strict equal comparison
    echo 5 == '5'; // true
    echo 4 === '4'; // false
    echo true == '1'; // true
    echo false == ''; // true
    echo "<br> <br>";

    // CONDITIONAL STATEMENTS
    echo "------- CONDITIONAL STATEMENTS -------" . "<br>";
    $price = 20;
    if ($price > 30) {
        echo 'the condition is met';
    } elseif ($price > 50) {
        echo 'the elseif condition is met';
    } else {
        echo 'condition is not met';
    }
    echo "<br>";

    foreach($products as $product) {
        if ($product['price'] > 10 && $product['price'] != 17) {
            echo $product['price'] . '<br>';
        }
    }

    // CONTINUE & BREAK
    // The break statement "jumps out" of 'a loop'.
    // The continue statement "jumps over" one iteration in the loop.

    echo "------- CONTINUE & BREAK -------" . "<br>";
    foreach($products as $product) {
        if ($product['price'] == 9) {
            break;
        }
        
        if ($product['name'] == 'chuoi' ) {
            continue;
        }
        echo $product['name'] . "-" . $product['price'] . "<br>";
    }
    echo "<br>";

    // FUNCTIONS
    echo "--------- FUNCTIONS ----------" . "<br>";
    function hieu($name = 'Huong') {
        echo "My rush is $name <br />";
    }
    hieu('Bi');

    function formatProduct($product) {
        // echo "{$product['name']} costs {$product['price']} VND <br />";
        return "{$product['name']} costs {$product['price']} VND <br />";
    }
    $newFormat = formatProduct(['name'=>'buoi', 'price'=>14]);
    echo $newFormat . "<br>";

    // VARIABLE SCOPES
    echo "--------- VARIABLE SCOPES --------- " . "<br>";
    // Local scope
    function localScope1() {
        $pricess = 10;
        echo $pricess; 
    }
    localScope1();
    // echo $pricess; // Error: Undefined variable
    
    echo "<br>";
    function localScope2($agess) {
        echo $agess . '<br>';
    }
    localScope2(12);
    echo $agess; // Error: Undefined variable

    // Global scope
    $name = 'Hieu';
    function Greeting() {
        // echo $name; // Error: Undefined variable (need to do as bellow)

        global $name;
        $name = 'Trung Hieu <br />';
        echo $name;
    }
    Greeting();
    echo $name; // Trung Hieu

    function sayBye($name) {
        $name = 'Dao Trung Hieu';
        echo "bye $name <br>";
    }
    sayBye($name);
    echo $name; // Trung Hieu   // if you want to change the $name variable following the $name variable in local scope of sayBye(), you need to add like this "function sayBye(&$name)". the $name variable will be changed because means of '&' is reference to the global $name variable

    // INCLUDE & REQUIRE
    //when a file is included with the 'include' statement and PHP cannot find it, the script will continue to execute and the 'require' statement isn't because the script execution dies after the 'require' statement returned a fatal error:
    echo "------------ INCLUDE & REQUIRE -------------" . '<br>';

    include('names.php');
    require 'names.php';
    // require 'namess.php'; // fatal error
    echo 'This is after';
?>

<!DOCTYPE html>
<html lang="en">

    <?php include 'templates/header.php' ?>

    <h1><?php echo('This is my first PHP file'); ?></h1>
    <h4><?php echo $fname ; ?></h4>
    <h4><?php echo LNAME ; ?></h4>
    <h4><?php echo lNAME ; ?></h4>
    <h4><?php echo  $age; ?></h4>

    <h2>Products</h2>
    <ul>
        <?php foreach($products as $product) {?>
            <li> <?php 
                echo $product['name'] . " - ";
                echo $product['price'];
            ?></li> 
        <?php } ?>
        <li>-----------</li>
        <?php foreach($products as $product) { ?>
            <?php if ($product['price'] > 10 && $product['price'] != 12) { ?>
                <li><?php  echo $product['name'] . ' - ' . $product['price']; ?></li>
            <?php } ?> 
        <?php } ?>
    </ul>
    
    <?php include 'content.php' ?>
</body>
</html>