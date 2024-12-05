<?php
function generateCombinations($cpus, $motherboards, $memory, $storage, $powerUnits) {
    $result = [];

    foreach ($cpus as $cpu) {
        foreach ($motherboards as $mb) {
            foreach ($memory as $mem) {
                foreach ($storage as $st) {
                    foreach ($powerUnits as $psu) {
                        $result[] = [
                            'cpu' => $cpu,
                            'motherboard' => $mb,
                            'ram' => $mem,
                            'hdd' => $st,
                            'psu' => $psu,
                        ];
                    }
                }
            }
        }
    }
    return $result;
}
?>
