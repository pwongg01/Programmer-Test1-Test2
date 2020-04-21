<?php
//TestNo.1.1
echo "TestNo.1.1<br/>";
echo '<p align="right">';
for ($i = 1; $i <= 5; $i++) {
    echo  str_repeat('O', $i);
    echo "<br />";
}
echo "</p>";
echo "<hr />";
//TestNo.1.2
echo "TestNo.1.2<br/>";
$j = 9;
$k = 0;
$char = "O";
echo "<center>";
for ($i = 1; $i <= 5; $i++) {
    echo $char;
    for ($l = 1; $l <= $k; $l++) {
        echo $char;
    }
    echo "<br>";
    $k += 2;
}
echo "</center>";
echo "<hr />";
//TestNo.2.1
echo "TestNo2.1<br/>";
$salary = 10000;
if ($salary < 10000) {
    $S1 = $salary + 200;
    echo "เดือนนี้จะได้เงิน $S1<br />";
    echo "เข้าเงื่อนไขที่1";
} else if ($salary < 11000) {
    $S2 = $salary + 200;
    echo "เดือนนี้จะได้เงิน $S2<br />";
    echo "เข้าเงื่อนไขที่2";
} else if ($salary < 12000) {
    $S3 = $salary + 300;
    echo "เดือนนี้จะได้เงิน $S3<br />";
    echo "เข้าเงื่อนไขที่3";
}
echo "<hr />";
//TestNo.2.2.1
echo "TestNo2.2.1<br/>";
$bath = 100;
echo "Output คือ ";
echo ($bath == 300 ? "300" : "200");
echo "<hr />";
//TestNo.2.2.2
echo "TestNo2.2.2<br/>";
$score = 9;
$age = 10;
echo "Your Score is : ";
echo ($score > 10 ? ($age > 10 ? "Average" : "Exceptional") : ($age > 10 ? "Horroble" : "Average"));
echo "<hr />";
//TestNo.3.1
echo "TestNo3.1<br/>";
$data = array(
    10000 => 15000,
    15000 => 20000,
    "salary" => 30000
);
foreach ($data  as $value) {
    if ($value < 15000) {
        $S1 = $value + 200;
        echo "$S1<br />";
    } else if ($value < 20000) {
        $S2 = $value + 200;
        echo "$S2<br />";
    } else if ($value < 30000) {
        $S3 = $value + 300;
        echo "$S3<br />";
    }
}
echo "<hr />";
//TestNo.3.2.1
echo "TestNo3.2.1<br/>";
$mark = array(
    "mohammad" => array(
        "physics" => 35,
        "maths" => 30,
        "chemistry" => 39
    ),
    "qadir" => array(
        "physics" => 30,
        "maths" => 32,
        "chemistry" => 29
    ),
    "zara" => array(
        "physics" => 31,
        "maths" => 22,
        "chemistry" => 39
    )
);
print_r($mark["mohammad"]["physics"]);
echo "<hr />";
//TestNo.3.2.2
echo "TestNo3.2.2<br/>";
print_r(($mark["mohammad"]["physics"]) . " " . $mark["mohammad"]["maths"] . " " . $mark["mohammad"]["chemistry"] . " " .
        ($mark["qadir"]["physics"]) . " " . $mark["qadir"]["maths"] . " " . $mark["qadir"]["chemistry"] . " " .
        ($mark["zara"]["physics"]) . " " . $mark["zara"]["maths"] . " " . $mark["zara"]["chemistry"]
       );
echo "<hr />";
?>
