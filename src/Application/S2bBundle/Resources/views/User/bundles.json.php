<?php

$array = array();
foreach($repos as $repo) {
    $array[] = $bundle->getRawValue()->toSmallArray();
}

echo json_encode($array);
