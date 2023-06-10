<<<<<<< HEAD
<?php
// 6 Element String
$Perangkat_keras = ['Motherboard', 'Processor', 'Hard Disk', 'PC Coller', 'VGA Card', 'SSD'];
?>


<html>

<body>
    <h2>Macam-macam perangkat keras komputer</h2>
    <ol>
        <?php foreach ($Perangkat_keras as $p) { ?>
            <li><?= $p;  ?></li>
        <?php } ?>

        <?php
        // Menambahkan Perangkat baru
        array_push($Perangkat_keras, 'Card Reader', 'Modem');

        // Mengurutkan dengan Sort sesuai abjad a-z
        sort($Perangkat_keras);
        ?>
    </ol>

    <h2>Macam-macam perangkat kerat baru</h2>
    <ol>
        <?php foreach ($Perangkat_keras as $p) { ?>
            <li><?= $p;  ?></li>
        <?php } ?>
    </ol>

</body>

=======
<?php
// 6 Element String
$Perangkat_keras = ['Motherboard', 'Processor', 'Hard Disk', 'PC Coller', 'VGA Card', 'SSD'];
?>


<html>

<body>
    <h2>Macam-macam perangkat keras komputer</h2>
    <ol>
        <?php foreach ($Perangkat_keras as $p) { ?>
            <li><?= $p;  ?></li>
        <?php } ?>

        <?php
        // Menambahkan Perangkat baru
        array_push($Perangkat_keras, 'Card Reader', 'Modem');

        // Mengurutkan dengan Sort sesuai abjad a-z
        sort($Perangkat_keras);
        ?>
    </ol>

    <h2>Macam-macam perangkat kerat baru</h2>
    <ol>
        <?php foreach ($Perangkat_keras as $p) { ?>
            <li><?= $p;  ?></li>
        <?php } ?>
    </ol>

</body>

>>>>>>> f327e519a49df2bfd446fb810f73f9a43233d5f2
</html>