<?php
function insertion($arr)
{

    for ($z = 1; $z < count($arr); $z++) {
        $key = $arr[$z];
        $s = $z - 1;
        while ($s >= 0 && $arr[$s] > $key) {
            $arr[$s + 1] = $arr[$s];
            $s = $s - 1;
            $arr[$s + 1] = $key;
        }
    }
}
echo insertion($arr);
