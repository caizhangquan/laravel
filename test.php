<?php 

try {
    echo @$b;
} catch (Exception  $e) {
    echo "error".$e->getMessage();
}
echo 3333;

