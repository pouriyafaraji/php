<?php
// 1. Syntax Error
echo "Hello, World!";

// 2. Undefined Variable
echo $undefinedVar;

// 3. Type Error
$number = 5;
echo $number + "five";

// 4. Unused Variable
$notUsed = 42;

// 5. Code Style Issue
function BadFunctionname($ARG1) {
    return $ARG1*2;
}

// 6. Long Function
function complexLogic($x) {
    if($x > 0){
        if($x < 10){
            if($x %2 == 0){
                echo "even";
            }else{
                echo "odd";
            }
        }
    }
}

// security issu
$user_input=$_GET['input'];
eval($user_input);

// 8. Type Hint Mismatch
function addNumbers(int $a, string $b) {
    return $a + $b; // $b is a string, causes issue
}
addNumbers(5,"ten");

// 9. Logic Error
$age = 20;
if ($age < 10 && $age > 30) {
    echo "Age is between 10 and 30";
}

// 10. Deprecated Function
split(",", 'a,b,c');
?>
