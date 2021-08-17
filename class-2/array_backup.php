<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
    <title>PHP Array</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=STIX+Two+Text:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    
<div class="container-fluid">
    <br>
    <a href="/php">Back</a>
    <h1>PHP Array</h1>
    <br>

    1. array(); <br>
    2. count(); <br>
    3. sizeof(); <br>
    4. in_array(); <br>
    5. array_search(); <br>

    <?php
        $array = ['a' => 'red', 'b' => 'green', 'c' => 'blue'];
    ?>

    <?php
        // in_array('a', $array); // return true or false;
        // array_search('b', $array); // return key or array;
    ?>

    6. array_replace(); <br>
    7. array_replace_recursive(); <br>

    <?php
        // array_replace($array_one, $array_two); // return a new array;
        // array_replace_recursive($array_one, $array_two) // for multi dimension array;
    ?>

    8. array_pop(); <br>
    9. array_push(); <br>
    10. array_shift(); <br>
    11. array_unshift(); <br>
    12. array_merge(); <br>
    13. array_merge_recursive(); <br>
    14. array_slice(); <br>
    15. array_splice(); <br>
    16. array_keys(); <br>
    17. array_key_exists(); <br>

    <?php
        // array_slice($array, $start, $end, true); // return a new array and preserved value return previous keys;
        // array_splice($array, $start, $end, $replace_array_data); // replace array data; 
    ?>

    18. array_intersect(); <br>
    19. array_intersect_key(); <br>
    20. array_intersect_assoc(); <br>

    <?php
        // array_intersect($array, $array_2); // return a new array with common value;
        // array_intersect_key($array, $array_2); // return a new array with common key;
        // array_intersect_assoc($array, $array_2); // return a new array with common key and value;
    ?>

    21. array_diff(); <br>
    22. array_diff_key(); <br>
    23. array_diff_assoc(); <br>

    <?php
        // array_diff($array, $array_2); // return a new array with difference value;
        // array_diff_key($array, $array_2); // return a new array with difference key;
        // array_diff_assoc($array, $array_2); // return a new array with difference key and value;
    ?>

    24. array_values(); <br>
    25. array_unique(); <br>

    26. array_column(); <br>
    27. array_chunk(); <br>

    28. array_flip(); <br>

    <?php
        // array_column($array, 'first_name', 'id'); return all first_name column value as new array with 'id' as key (optional);
        // array_chunk($array, 2, true);
        // array_flip($array); // return reverse array; 
    ?>

    29. array_rand();  <br>
    30. array_walk(); <br>
    31. array_walk_recursive(); <br>

    <?php
        // array_walk($array, 'myFunction');
        // function myFunction($value, $key) {
        //     echo $value . ' . ' . $key;
        // }

        // return as loop;
    ?>

    32. array_map(); <br>

    <?php
        // array_map('myFun', $array);
        // function myFun($a) {
        //     return $a == 100;
        // }; // return new array with condition;

        // array_map(null, $a, $b); // return a associative array;


    ?>

    33. sort(); <br>
    34. rsort(); <br>
    35. asort(); <br>
    36. arsort(); <br>
    36. ksort(); <br>
    37. krsort(); <br>
    38. natsort(); <br>
    39. natcasesort(); <br>
    40. extract(); <br>
    41. compact(); <br>

    <?php
        // extract($array); // return all key as variable;
        // EXTR_OVERWRITE, EXTR_SKIP, EXTR_PREFIX_SAME
        // compact('a', 'b');
    ?>









</div>

<br>
<br>
<br>
</body>
</html>