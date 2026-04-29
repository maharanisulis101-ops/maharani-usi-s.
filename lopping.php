<?php
//looping for
echo "lagu anak celeng. <br>";
$jumlah = 190;
$setengah = $jumlah / 2;
for ($i = $jumlah; $i > 0; $i--) {
    echo "tek kotek kotek kotek anak celeng turun berkotek, anak celeng turunlah $i <br>";

    if ($i == $setengah){
        echo "induk celeng berkata: anak ku kemana? kenapa tinggal setengahnya? main kemana mereka? <br>";
    }
}
echo "<hr>";

//looping while
echo "lagu anak celeng. <br>";
$i = $jumlah;
while ($i > 0) {
    echo "tek kotek kotek kotek anak celeng turun berkotek, anak celeng turunlah $i <br>";

    if ($i == $setengah){
        echo "induk celeng berkata: anak ku kemana? kenapa tinggal setengahnya? main kemana mereka? <br>";
    }
    $i--;
}
echo "<hr>";

//looping do while
echo "lagu anak celeng. <br>";
$i = $jumlah;
do {
    echo "tek kotek kotek kotek anak celeng turun berkotek, anak celeng turunlah $i <br>";

    if ($i == $setengah){
        echo "induk celeng berkata: anak ku kemana? kenapa tinggal setengahnya? main kemana mereka? <br>";
    }
    $i--;
} while ($i > 0);
echo "<hr>";

//looping foreach
echo "lagu anak celeng. <br>";
$jumlah = 190;
$data = range($jumlah, 1);
$setengah = ceil($jumlah / 2);

foreach ($data as $a) {
    echo "tek kotek kotek kotek anak celeng turun berkotek, anak celeng turunlah " . $a . "<br>";

    if ($a == $setengah){
        echo "induk celeng berkata: anak ku kemana? kenapa tinggal setengahnya? main kemana mereka? <br>";
    }
}
?>