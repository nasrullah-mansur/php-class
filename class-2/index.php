<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class - 02</title>
</head>
<body>
    <h2 style="text-align: center; margin: 100px 0">Class - 02</h2>


    1. str_split(); <br> <br>
    2. str_chunk(); <br> <br>
---------------------------------
<br>
<br>
    <?php


        // $str = 'I love php programming. also love js function.';

        // $result =  str_split($str); // return array;
        // $result =  chunk_split($str, 3); // return array;

        // echo strtolower($str);
        // echo strtoupper($str);
        // echo ucfirst($str);
        // echo ucwords($str);
        // echo lcfirst($str);

        // echo str_word_count($str);

    //     echo substr($str, -5, 2);


    //     echo '<br>';


    //    echo substr_count($str, 'love');

    //     echo '<br>';

    //    echo str_replace('love', 'like', $str);

        // echo '<pre>';
        // print_r($result);
        // echo '</pre>';

    //     echo '<br>';
    //     $str_2 = "hello string";

    //    echo trim($str_2);

       echo '<br>';

       $phone = "+8801728252533";
       $search_char = substr($phone, -6, 4);
       $user_show = str_replace($search_char, '****', $phone);

       echo 'Your phone No. is: ' . $user_show;

       echo '<br>';

        $four_char = '2525';

        if($four_char == $search_char) {
            echo "<p> Your data is correct</p>";
        } else {
            echo "<p> Your data is not correct</p>";
        }

        // 1. 4 characters ke star kore dibo;
        // 2. user ke bolbo star er jaygay ki hobe?
        // 3. jodi right hoy to thank you otherwise sorry;








    ?>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

</body>
</html>