<?php
$cards = ['A', 'K', 'Q', 'J', 10, 9, 8, 7, 6, 5, 4, 3, 2, 1];
$kinds = ['Clubs', 'Diamonds', 'Hearts', 'Spades'];
$card_deck = [];
foreach ($cards as $keys => $card) {
    foreach ($kinds as $key => $kind) {
        $card_deck[] = [
            'kind' => $kind,
            'card' => $card
        ];
    }
}
var_dump($card_deck);
?>