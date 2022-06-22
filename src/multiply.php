<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table style="border: 1px solid">
        <tr style="border: 1px solid">
            <?php for ($a = 1; $a <= 10; $a++){?>
                <th><?php echo $a ?></th>
            <?php }?>
        </tr>
        <?php for ($a = 2; $a <=10; $a++){?>
            <tr>
                <?php for ($b = 1; $b <= 10; $b++){?>
                    <td><?php echo $a * $b ?></td>
                <?php } ?>
            </tr>
        <?php } ?>
    </table>
</body>
</html>