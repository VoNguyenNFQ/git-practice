<?php

$list_person_in_charge = [
    "Mai-Nguyen",
    "Thanh-Pham",
    "Vo-Nguyen",
    "Kieu-Anh",
    "Minh-Khue",
    "Minh-Nguyet",
    "Lan-Anh",
    "Tinh-Thanh",
];

shuffle($list_person_in_charge);

echo "\nOutput: \n";
foreach ($list_person_in_charge as $task_number => $person_in_charge) {
    echo sprintf("\t0%s-%s\n", $task_number + 1, $person_in_charge);
}
echo "\n";
