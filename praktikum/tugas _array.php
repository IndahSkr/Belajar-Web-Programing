<?php
// array

$customer = array(
    "A001" => "Andi",
    "A002" => "Budi",
    "A003" => "Catur",
);

$barang = array(
    "B001" => array(
        "desc" => "Flashdisk Kingston 64GB",
        "harga" => 75000,
    ),
    "B002" => array(
        "desc" => "Connector HDMI",
        "harga" => 150000,
    ),
    "B003" => array(
        "desc" => "DVD Blank",
        "harga" => 2500,
    ),

);
$belanja = array(
    array("A001", "B001", 3),
    array("A001", "B003", 10),
    array("A003", "B001", 1),
    array("A003", "B002", 1),
);

foreach ($customer as $key => $name) {
    $total = 0;
    echo $name . ' membeli barang sebagai berikut : </br><ol type="a">';
    foreach ($belanja as  $belanjaan) {
        foreach ($barang as $k => $barang1) {
            if ($key == $belanjaan[0] && $belanjaan[1] == $k) {
                echo "<li>" . $barang1["desc"] . " " . $belanjaan[2] . " buah @" . $barang1["harga"] . ", total Rp. " . ($barang1["harga"] * $belanjaan[2]) . "</li>";
                $total += ($barang1["harga"] * $belanjaan[2]);
            }
        }
    }
    echo "</ol></br>Total pembelian " . $name . " adalah Rp. " . $total . "</br></br><hr>";
}

?>
<!-- Selesai -->