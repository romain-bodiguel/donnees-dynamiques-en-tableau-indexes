<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-reboot@4.4.1/reboot.css">
    <link rel="stylesheet" href="./css/style.css">
    <title>Les 12 permiers iPhone</title>
</head>
<body>
    <?php if ($f > 0) :?>
    <h1>Liste des iPhone de l'année <?= $f ?></h1>
    <?php else : ?>
    <h1>Liste des 12 premiers iPhone de Apple</h1>
    <?php endif ?>

    <table>
        <!-- Emmet: thead>tr>th{Nom}+th{Année}+th{Image} -->
        <thead>
            <tr>
                <th>Nom</th>
                <th>Année</th>
                <th>Image</th>
            </tr>
        </thead>
        <!-- Emmet: tbody>tr>th*3 -->
        <tbody>
            <?php foreach($dataForTemplate as $iphon) : ?>
            <tr>
                <th><?= $iphon['name'] ?></th>
                <th><?= $iphon['releaseYear'] ?></th>
                <th>
                    <img src="./img/<?= $iphon['picture'] ?>" alt="<?= $iphon['name'] ?>">
                </th>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</body>
</html>