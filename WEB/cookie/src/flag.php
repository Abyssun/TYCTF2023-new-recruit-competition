<?php
$flag = getenv('FLAG');
if($flag=="not_flag" or $flag=="") {
    $flag = "tyctf{test_flag}";
}
