<?php

// Simulasi Data Penjualan
$dataPenjualan = [
    [
        'nama' => 'Produk A',
        'harga' => 10000,
        'jumlah' => 5
    ],
    [
        'nama' => 'Produk B',
        'harga' => 7500,
        'jumlah' => 10
    ],
    [
        'nama' => 'Produk C',
        'harga' => 12000,
        'jumlah' => 8
    ]
];

// Menghitung Total Penjualan
$totalPenjualan = 0;
foreach ($dataPenjualan as $penjualan) {
    $totalPenjualan += $penjualan['harga'] * $penjualan['jumlah'];
}

// Menampilkan Laporan Penjualan
echo "<h1>Laporan Penjualan</h1>";
echo "<table>";
echo "<tr><th>Nama</th><th>Harga Per Produk</th><th>Jumlah Terjual</th><th>Total</th></tr>";
foreach ($dataPenjualan as $penjualan) {
    $total = $penjualan['harga'] * $penjualan['jumlah'];
    echo "<tr>";
    echo "<td>" . $penjualan['nama'] . "</td>";
    echo "<td>" . $penjualan['harga'] . "</td>";
    echo "<td>" . $penjualan['jumlah'] . "</td>";
    echo "<td>" . $total . "</td>";
    echo "</tr>";
}
echo "<tr><td><b>Total Penjualan</b></td><td></td><td><b>" . array_sum(array_column($dataPenjualan, 'jumlah')) . "</b></td><td><b>" . $totalPenjualan . "</b></td></tr>";
echo "</table>";

?>
<!DOCTYPE html>
<html>
<head>
<title>Sistem Pencatatan Data Penjualan</title>
<style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #f2f2f2;
}

th {
  background-color: #4CAF50;
  color: white;
}
</style>
</head>
<body>

<h2>Contoh Output yang Diinginkan:</h2>

<hr>

<h3>Sistem Pencatatan Data Penjualan</h3>
<hr>

<h3>[Form Input untuk Data Penjualan]</h3>
<hr>

<h3>Laporan Penjualan:</h3>

<table>
  <tr>
    <th>Nama</th>
    <th>Harga Per Produk</th>
    <th>Jumlah Terjual</th>
    <th>Total</th>
  </tr>
  <tr>
    <td>Produk A</td>
    <td>10000</td>
    <td>5</td>
    <td>50000</td>
  </tr>
  <tr>
    <td>Produk B</td>
    <td>7500</td>
    <td>10</td>
    <td>75000</td>
  </tr>
  <tr>
    <td>Produk C</td>
    <td>12000</td>
    <td>8</td>
    <td>96000</td>
  </tr>
  <tr>
    <td>Total Penjualan</td>
    <td></td>
    <td>23</td>
    <td>221000</td>
  </tr>
</table>

</body>
</html>