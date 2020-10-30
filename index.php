<?php
/**
 * @return array
 * Sukuriamas ,,card_deck'' masyvas is ,,card'' ir ,,type''
 */
function deck()
{
    $number = ['A', 'K', 'Q', 'J', 10, 9, 8, 7, 6, 5, 4, 3, 2];
    $type = ['Clubs', 'Diamonds', 'Hearts', 'Spades'];
    $card_deck = [];
    foreach ($number as $keys => $card) {
        foreach ($type as $key => $kind) {
            $card_deck[] = [
                'type' => $kind,
                'number' => $card
            ];
        }
    }
    return $card_deck;
}

$card_deck = deck();
/**
 * @param $deck
 * @return array
 * paduodamas naujai sugeneruotas visu kortu masyvas ,,card_deck'' kad random atvaizuotu 5 is ju
 */
function draw_card(array $deck): array
{
    $five_cards = [];
    for ($i = 1; $i <= 5; $i++) {
        $card_name = rand(0, count($deck) - 1);
        $five_cards[] = $deck[$card_name];
        array_splice($deck, $card_name, 1);


    }
    return $five_cards;
}

$cards_on_table = draw_card($card_deck);
/**
 *paduodam sugeruotas 5 kortas i funkcija kad patikrintu ar visos vienodos rusies
 */
function check_type($cards_on_table)
{
    $same_card = 0;
    for ($a = 0; $a < count($cards_on_table); $a++) {
        if ($cards_on_table[$a]['type'] === $cards_on_table[0]['type']) {
            $same_card += 1;
        }
    }
    $text = '';
    if ($same_card === count($cards_on_table)) {
        $text = 'Yes';
    } else $text = 'No';

    return $text;
}

$answer_same_type = check_type($cards_on_table);

function check_card($cards_on_table)
{
    $same = [];
    for ($i = 0; $i < 5; $i++) {
        if (isset($same[$cards_on_table[$i]['number']])) {
            $same[$cards_on_table[$i]['number']]++;
        } else {
            $same[$cards_on_table[$i]['number']] = 1;
        }
    }
    return $same;
}


$same = check_card($cards_on_table);


function card_pair($array){
    foreach ($array as $key => $value) {
        if($value >= 2) {
            return 'YES';
        } else return 'NO';
    }
}

$pair_answer = 'Do i have pair? :' . card_pair($same);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<section>
    <?php foreach ($cards_on_table as $on_table): ?>
        <div class="card <?php print $on_table['type']; ?>"><?php print $on_table['type']; ?>
            <h2><?php print $on_table['number']; ?></h2>
        </div>
    <?php endforeach; ?>
</section>
<h3>Do i have flush? : <?php print $answer_same_type; ?></h3>
<h3><?php print $pair_answer ?></h3>
<h2>Done</h2>
</body>
</html>
