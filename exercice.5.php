<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php /**
     * ecrire un script qui initialise un tableau de couleur puis genere une table html
     * dont nbrligne=nbrcouleurs une ligne contient deux colonnes et a la meme couleur que 
     * celle définit dans le tableau de couleur
     */
    $couleurs = [
        'pink', 'blue'
    ];
    ?>
    <table>
        <thead>

            <tr>
                <th>
                    tableau de couleur
                </th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($couleurs as $couleur) {
            ?>
                <tr style="background-color:<?= $couleur ?> ;">
                    <td><?= $couleur ?> </td>
                </tr>
            <?php
            }
            ?>


        </tbody>
    </table>
</body>

</html>