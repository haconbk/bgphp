<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="common.css" />
    <title>Chẵn lẻ - Số nguyên tố</title>
    <style>
        th { text-align: center; background-color: #999; }
        td { text-align: center; }
        th, td { padding: 0.4em; }
    </style>
</head>
<body>
<h2>Bảng số chẵn/lẻ và số nguyên tố</h2>
<table cellspacing="0" border="0" style="width: 20em; border: 1px solid #666;" >
    <tr>
        <th>Số</th>
        <th>Chẵn/Lẻ</th>
        <th>Số nguyên tố</th>
    </tr>
<?php
    for ( $i = 1; $i <= 10; $i++) {
        echo "<tr><td>$i</td>";
        if ( $i%2 == 0 ) {
            echo "<td>chẵn</td>";
        } else {
            echo "<td>lẻ</td>";
        }
        $dem = 0;
        for ( $j = 1; $j < $i; $j++) {
            if ( $i%$j == 0 ) {
                $dem+=1;
            }
        }
        if ( $dem >= 2) {
            echo "<td>O</td></tr>";
        } else {
            echo "<td>X</td></tr>";
        }
    }
?>
</table>
</body>
</html>
