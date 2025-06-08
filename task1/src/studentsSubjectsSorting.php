<?php
    $data = [
        ['Иванов', 'Математика', 5],
        ['Иванов', 'Математика', 4],
        ['Иванов', 'Математика', 5],
        ['Петров', 'Математика', 5],
        ['Сидоров', 'Физика', 4],
        ['Иванов', 'Физика', 4],
        ['Петров', 'ОБЖ', 4],
    ];
    $students = [];
    foreach ($data as [$name, $subject, $value]) {
        if(!isset($students[$name])) {
            $students[$name] = [];
        }
        if(!isset($students[$name][$subject])) {
            $students[$name][$subject] = 0;
        }
        $students[$name][$subject] += $value;
    }
    ksort($students);
    $subjects = array_unique(array_column($data, 1)); //get array of all unique subjects
    sort($subjects);