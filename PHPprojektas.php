<?php
/*$items = [
    ["Olga", "Olgyte", "Plunge", 20],
    ["Jurgis", "Jurgonas", "Telsiai", 24],
    ["Adele", "Adeliuke", "Ukmerge", 17]
 ];
/*
for ($i=0; $i<count($items); $i++) {
    for ($e=0; $e<count($items[$i]); $e++) {
        echo $items[$i][$e] . " ";
    }
    echo "<br>";
}

$i = 0;
while ($i < count($items)) {
    $e = 0;
    while ($e < count($items[$i])) {
        echo $items[$i][$e] . " ";
        $e++;
    }
    echo "<br>";
    $i++;
}

$j = 0;
do {
    echo $items[$j][0] . " ";
    echo $items[$j][1] . " ";
    echo $items[$j][2] . " ";
    echo $items[$j][3] . " ";
    $j++;
} while ($j < count($items));
*/
  $items = [
    "1Mok" => [
        "Kodas" => 654,
        "Vardas" => "Petras",
        "Pavarde" => "Petraitis",
        "Klase" => 5
    ],
    "2Mok" => [
        "Kodas" => 945,
        "Vardas" => "Rokas",
        "Pavarde" => "Rokaitis",
        "Klase" => 9
    ],
    "3Mok" => [
        "Kodas" => 784,
        "Vardas" => "Olga",
        "Pavarde" => "Olgyte",
        "Klase" => 12
    ]
];
/*
foreach ($items as $key => $item) {
    echo "<ul>". $key ."</ul>";
    foreach ($item as $itm) {
        echo "<li>". $itm."</li>";
    }
}

*/
//Išvesti mokinio duomenis naršyklėje naudojant funkciją. Sukurti funkciją,
// kuri surikiuoja (pagal mokinio kodą didėjančia tvarka) ir išveda mokinių duomenis HTML saraše.
// Masyvas, funkcijai paduodamas, kaip parametras ją kviečiant.

function sortAndPrintArrayByKeyAsc($array,$key){
    array_multisort (array_column($array, $key), SORT_ASC, $array);
    foreach ($array  as $key => $item) {
        echo "<ul>". $key ."</ul>";
        foreach ($item as $itm) {
            echo "<li>". $itm."</li>";
        }
    }
};

sortAndPrintArrayByKeyAsc($items,'Kodas');






