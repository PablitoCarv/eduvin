<?php include('ligacao.php');


$produto_id = $_GET['id'];

// Obtém os detalhes do produto do banco de dados
$sql = "SELECT * FROM produtos WHERE id='$produto_id'";
$result = $ligacao->query($sql);

if ($result->num_rows > 0) {
    $produto = $result->fetch_assoc();
} else {
    echo "Produto não encontrado.";
    exit();
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $produto['name']; ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
     <?php include_once('cabecalho.php');?>
    <main>
        <div class="product-container">
            <img src="images/<?php echo $produto['imagem']; ?>" alt="<?php echo $produto['nome']; ?>">
            <h1><?php echo $produto['nome']; ?></h1>
            <p><?php echo $produto['descricao']; ?></p>
            <p>Preço: €<?php echo $produto['preco']; ?></p>
            <button>Adicionar ao Carrinho</button>
        </div>
    </main>

    <?php include_once('footer.php');?>
</body>
</html>
