<?php

$list_person_in_charge = [
    "MAI-NGUYEN",
    "THANH-PHAM",
    "VO-NGUYEN",
    "KIEU-ANH",
    "MINH-KHUE",
    "MINH-NGUYET",
    "LAN-ANH",
    "TINH-THANH",
];

shuffle($list_person_in_charge);

echo "\nOutput: \n";
foreach ($list_person_in_charge as $task_number => $person_in_charge) {
    echo sprintf("\tTask-0%s-%s\n", $task_number + 1, $person_in_charge);
}
echo "\n";
