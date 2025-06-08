<?php 
    require_once "src/studentsSubjectsSorting.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task1</title>
    <link rel="stylesheet" href="css/styles.css"/>
</head>
<body>
    <table>
        <thead>
            <tr>
                <td scope="col"></td>
                <? foreach($subjects as $subject) { ?>
                    <td scope="col"><?= $subject ?></td>
                <? } ?>
            </tr>
        </thead>
        <tbody>
            <? foreach($students as $name => $values) { ?>
                <tr>
                    <td><?= $name ?></td>
                    <? foreach($subjects as $subject) { ?>
                        <td><?= isset($values[$subject]) ? $values[$subject] : "" ?></td>
                    <? } ?>
                </tr>
            <? } ?>
        </tbody>
    </table>
</body>
</html>
