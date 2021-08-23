<?php

class One {
    var $V_one = 'This is variable one';

    function One() {
        return "this is my function";
    }
}

class Two extends One
{
    var $V_two = "this is variable two";

    function Two() {
        return "This is function two";
    }
}


// $output = new One();
// $output_2 = new Two();

// echo $output_2->V_two . $output_2->Two();

// $output = new Two();

// echo $output->One();


// ========================================

include 'file_one.php';


$output = new TestObject();


echo $output->testObject();