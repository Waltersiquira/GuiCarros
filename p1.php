<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GuiCarros</title>
</head>
<body>
    <table>
        <?php 
        require_once 'includes/lojas.php';
        $id = $_GET['i'] ?? 1;
        $busca = $l->query("select * from carros where id = '$id'");
        if (!$busca){
            echo 'erro';
        } else {
            if ($busca->num_rows == 0){
                echo 'erro';
            } else {
                while ($reg=$busca->fetch_object()){
                    echo "<tr><td><img src='$reg->imagem' width='180'></td><td>$reg->nome</td><td>$reg->especificação</td><td>$reg->localização</td><td>$reg->preço</td>";
                }
            }
        }
        ?>
    </table>
    <button style="background-color: blue;"><a href="p2.php" style="color: white; text-decoration: none;">Comprar</a></button>
</body>
</html>