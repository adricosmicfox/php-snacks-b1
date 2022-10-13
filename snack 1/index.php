<!-- Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->


<?php
$partite = [

    [
        "squadraInCasa" => 'Virgo',
        "squadraOspite" => 'Aquarius',
        "puntiCasa" => 76,
        "puntiOspite" => 78,
    ],

    [
        "squadraInCasa" => 'Aries',
        "squadraOspite" => 'Cancer',
        "puntiCasa" => 45,
        "puntiOspite" => 47,
    ],

    [
        "squadraInCasa" => 'Sagittarius',
        "squadraOspite" => 'Gemini',
        "puntiCasa" => 67,
        "puntiOspite" => 99,
    ],

    [
        "squadraInCasa" => 'Scorpio',
        "squadraOspite" => 'Taurus',
        "puntiCasa" => 77,
        "puntiOspite" => 64,
    ],
]

?>

<?php foreach ($partite as $key => $value) : ?>

    <h2> <?php echo $value['squadraInCasa'] ?> - <?php echo $value['squadraOspite'] ?> | <?php echo $value['puntiCasa'] ?> - <?php echo $value['puntiOspite'] ?> </h2>

<?php endforeach ?>