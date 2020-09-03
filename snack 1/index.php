
<?php

$match = [
   [
        'team1' => 'Milano',
        'team2' => 'Cantù',
        'score1' =>'55',
        'score2' => '60',
    ],
    [
        'team1' => 'Firenze',
        'team2' => 'Roma',
        'score1' =>'12',
        'score2' => '50',
    ],

    [
        'team1' => 'Torino',
        'team2' => 'Napoli',
        'score1' =>'10',
        'score2' => '55',
    ],

];

foreach ($match as $m) {
    echo $m['team1'] . ' - ' . $m['team2']
    . ' | ' .$m['score1'] . ' - ' .$m['score2']
    . '<br>';
}
?>
