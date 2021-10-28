<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        td {
            border: 1px solid #333;
        }
    </style>
</head>

<body>
    <?php /**
     * ecrire un script qui initialise un tableau de classe, 
     * le script génère des listes ul li des classes par niveau
     */
    $tab = [
        'licence1' => ['IAGE1', 'GRLS1', 'MAE1'],
        'licence2' => ['IAGE2', 'GRLS2', 'MAE2'],
        'licence3' => ['IAGE3', 'GRLS3', 'MAE3'],

    ]
    ?>
    <table>
        <thead>
            <tr>tableau de classe</tr>
        </thead>
        <tbody>

            <?php
            foreach ($tab as $key => $cla) {

            ?>
                <tr></tr>
                <td><?= $key ?></td>
                <td><?php
                    foreach ($cla as $cl) {

                    ?>
                        <?= $cl ?>
                    <?php
                    }
                    ?>
                </td>

            <?php
            }
            ?>
        </tbody>
    </table>
</body>

</html>