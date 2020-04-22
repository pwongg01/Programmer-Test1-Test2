<!DOCTYPE HTML>
<html>

<head>
</head>
<fieldset style="width: 450px;">

    <body>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $list = test_input($_POST["list"]);
            $list_ar = explode(",", $list);
            $search = test_input($_POST["search"]);
            $CatSearch = test_input($_POST["CatSearch"]);
        }

        function test_input($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        ?> <?php

            function LinearSearch($list_ar, $search)
            {
                $n = sizeof($list_ar);
                for ($i = 0; $i < $n; $i++) {
                    if ($list_ar[$i] == $search)
                        return $i;
                }
                return -1;
            }

            function BinarySearch(array $list_ar, $search)
            {
                if (count($list_ar) === 0) return false;
                $low = 0;
                $high = count($list_ar) - 1;

                while ($low <= $high) {

                    $mid = floor(($low + $high) / 2);

                    if ($list_ar[$mid] == $search) {
                        return true;
                    }

                    if ($search < $list_ar[$mid]) {
                        $high = $mid - 1;
                    } else {
                        $low = $mid + 1;
                    }
                }
                return false;
            }

            function BubbleSort(&$list_ar)
            {
                $n = sizeof($list_ar);

                for ($i = 0; $i < $n; $i++) {
                    for ($j = 0; $j < $n - $i - 1; $j++) {
                        if ($list_ar[$j] > $list_ar[$j + 1]) {
                            $t = $list_ar[$j];
                            $list_ar[$j] = $list_ar[$j + 1];
                            $list_ar[$j + 1] = $t;
                        }
                    }
                }
            }
            ?>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="row">
                <label for="List">List: </label>
                <input type="text" name="list" value="<?php echo $list; ?>"><br><br>

                <label for="search">ค้นหา: </label>
                <input type="text" name="search" value="<?php echo $search; ?>">
                <input type="submit" name="submit" value="ค้นหา"><br><br>
                <h4>ประเภทการค้นหา</h4>
                <select name="CatSearch" id="CatSearch">
                    <option value="1" <?php if ($_POST['CatSearch'] == 1) {
                                            echo "selected='selected'";
                                        } ?>>Linear Search</option>
                    <option value="2" <?php if ($_POST['CatSearch'] == 2) {

                                            echo "selected='selected'";
                                        } ?>>Binary Search</option>
                    <option value="3" <?php if ($_POST['CatSearch'] == 3) {
                                            echo "selected='selected'";
                                        } ?>>Bubble Search</option>
                </select><br><br>
            </div>
        </form>
        <h4>ผลลัพธ์</h4>
        <fieldset style="width: 300px;">
            <?php
            if ($_POST['CatSearch'] == 1) {
                echo "List: " . "[" . $list . "]" . "</br>";
                echo "Search: " . $search . "</br>";
                echo "Result:::" . "</br>";
                $i = 1;
                while ($i <= sizeof($list_ar)) {
                    $j = $i - 1;
                    if ($search != $list_ar[$j]) {
                        echo "Round: $i " . "===>" .  $search . " != $list_ar[$j] <br>";
                    } else if ($search = $list_ar[$j]) {
                        echo "Round: $i " . "===>" .  $search . " = $list_ar[$j] " . "found !!" . "<br>";
                        break;
                    }
                    $i++;
                }
            }
            if ($_POST['CatSearch'] == 2) {
                if (BinarySearch($list_ar, $search) == true) {
                    echo $search . " Exists";
                } else {
                    echo $search . " Does not Exist";
                }
            }
            if ($_POST['CatSearch'] == 3) {
                $arr = $list_ar;
                $len = sizeof($arr);
                bubbleSort($arr);

                echo "Sorted array : \n";

                for ($i = 0; $i < $len; $i++)
                    echo $arr[$i] . " ";
            }
            ?>
        </fieldset>
    </body>
</fieldset>

</html>