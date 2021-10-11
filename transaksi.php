<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
    <style>
        *{
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }
    </style>
</head>
<body>
    <?php require 'menu.php' ?>
    <h2>Transaksi</h2>
    
    <?php
    $peserta = [
        'one' => [
            'tarikh' => '01-10-2021',
            'perkara' => 'Terima dari pemborong',
            'masuk' => '100',
            'keluar' => '',
            'baki' => '100',
        ],

        'two' => [
            'tarikh' => '03-10-2021',
            'perkara' => 'CBR Enterprise',
            'masuk' => '',
            'keluar' => '30',
            'baki' => '70',
        ]
    ];
    ?>
    <table border='1' cellspacing='0'>
        <tr>
            <th>Bil</th>
            <th>Tarikh</th>
            <th>Perkara</th>
            <th>Masuk</th>
            <th>Keluar</th>
            <th>Baki</th>
        </tr>
        <?php
        $bil = 1;
        foreach($peserta as $pelajar){
            ?>
            <tr>
            <td><?php echo $bil++; ?></td>
            <td><?php echo $pelajar ['tarikh']; ?></td>
            <td><?php echo $pelajar ['perkara']; ?> </td>
            <td><?php echo $pelajar ['masuk']; ?></td>
            <td><?php echo $pelajar ['keluar']; ?></td>
            <td><?php echo $pelajar ['baki']; ?></td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>
</html>