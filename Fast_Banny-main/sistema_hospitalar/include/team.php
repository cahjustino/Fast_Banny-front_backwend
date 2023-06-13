<?php
$teamMembers = array(
    array('Dr. João Silva', 'Cardiologia'),
    array('Dr. Maria Souza', 'Pediatria'),
    array('Dr. André Santos', 'Oncologia')
);

foreach ($teamMembers as $member) {
    echo "<li>{$member[0]} - {$member[1]}</li>";
}
?>
