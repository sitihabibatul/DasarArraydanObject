<?php

$pakaian = (object)[
	'nama' => 'Kaos' ,
	'ukuran' => 'S' ,
	'harga' => 500000,
	'warna' => [
		'polos' => 'hitam' ,
		'motif' => 'polkadot'
	]
];

echo "<pre>";
print_r($pakaian);
echo "<pre>";

$pakaian->warna = (object)$pakaian->warna;

?>