<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class - 03</title>
</head>
<body>
    
<h1 style="text-align: center; padding: 30px;">Class - 03</h1>


    <?php

        // $array = [
        //     'a' => 'one',
        //     'b' => 'two',
        //     'c' => 'three',
        // ];

        // $array_2 = [
        //      'one',
        //      'two',
        //      'three',
        // ];

        // $new_arr = array_map('myFun', $array_2);

        // function myFun($value) {
        //     return $value == 'one' || $value == 'two';
        // }

        // echo '<pre>';
        // print_r($new_arr);

        // echo '</pre>';


        // $a = sort($array);

        // echo '<pre>';
        // print_r( sort($array_2) );
        // echo '</pre>';






        // date
        // -------
        // d = 01 - 31,
        // j = 1 - 31,
        // S = 'st, nd';

        // Month
        // ----------
        // F = 'january, february',
        // m = 01 - 12,
        // n = 1 - 12,
        // M = 'jan, feb'

        // Year
        // -------
        // Y = 2021,
        // y = 21,


        // Week
        // -------
        // D = 'Sat, sun',
        // l = 'Saturdays, sunday',
        // N = 1,
        // w = 1,



        // Hour
        // -----
        // h = 01 - 12
        // H = 01 - 24
        // g = 1 -12
        // G = 1 - 24

        // Minute
        // ------
        // i = 00 - 59;

        // Second
        // ------
        // s = 00 - 59;

        // Meridiem
        // ------
        // a = 'am, pm';
        // A = 'AM, PM';

        // date_default_timezone_set('Asia/Dhaka');

        // $today_date = date('j'); // 5
        // $today_date = date('d'); // 05
        // $today_date = date('d S'); // 05

        // Sunday 19th August 2021 | 03:44:55 PM

        // $updated_at = '2021-04-11 20:26:36';

        // $today_date = date('l dS F Y | H:i:s A'); // 05

        // echo($today_date);



        // function myFun() {
        //     // 'This is my function';
        //     // $test = 1000;

        //     // if($test == 100) {
        //     //     return 'You are right';
        //     // } else {
        //     //     return 'Sorry brother!';
        //     // }


        //     $a = 'test@email.com';

        //     $output = null;

        //     if($a == 'test@email.com') {
        //         $output = 'Your email is right'; 
        //     } else {
        //         $output = 'Your email is not right'; 
        //     }

        //     return $output;

        // }

        // myFun() = 'This is my function';


    //    echo myFun();



    // function myFun2($p) {
    //     if($p == 100) {
    //         $output = 'Yes';
    //     } else {
    //         $output = 'No';
    //     }

    //     return $output;
    // }


    // echo myFun2(50);


    // $a = 100;
    // $b = 200;

    // function myFun3() {

    //     global $a;

    //     echo $a;
    // }

    // myFun3();

    

    // $array = ['one', 'two', 'three'];

    // foreach($array as $test) {
    //     echo $test . '<br>';
    // }


    // for($i = 1; $i < 100; $i++) {
    //     echo $i;
    // }

    
    class Test {

       var $test = 'This is test'; // object;

       function myFun() { // method;
           return 'This is my function';
       }

    };


    $output = new Test();

    echo $output->test;






    ?>






</body>
</html>