<?php

$list_person_in_charge = [
    "mai-nguyen",
    "thanh-pham",
    "vo-nguyen",
    "kieu-anh",
    "minh-khue",
    "minh-nguyet",
    "lan-anh",
    "tinh-thanh",
];

shuffle($list_person_in_charge);

echo "\nOutput: \n";
foreach ($list_person_in_charge as $task_number => $person_in_charge) {
    echo sprintf("\t0%s-%s\n", $task_number + 1, $person_in_charge);
}
echo "\n";
