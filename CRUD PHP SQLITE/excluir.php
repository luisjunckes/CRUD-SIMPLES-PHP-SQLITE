
<?php
 require 'classes/Produto.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.rtl.min.css" integrity="sha384-dc2NSrAXbAkjrdm9IYrX10fQq9SDG6Vjz7nQVKdKcJl3pC+k37e7qJR5MVSCS+wR" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
   
    <title>Excluir</title>
 
  
</head>
<body class = "bg-dark text-light">


<?php
if (isset($_GET ['cod'])) {
    $pro = new Produto();
    $produtos = $pro->CodProd($_GET ['cod']);
    foreach($produtos as $produto){}
    ?>
    <h3 class="mt-3">Excluir</h3>

    <div class="form-group">
        <p><b> Voce deseja realmente Excluir o produto <?php echo $produto['nome'];?> ?</b></p>
    </div>
        

<a class="btn btn-danger" type="submit" href="index.php?excluir=<?php echo $_GET ['cod']?>">Excluir</a>  

<br><br>

<a class="btn btn-success" href="index.php">Voltar</a>
<?php } else { ?>
Algo deu errado
    <?php }?>
<body>
</html>

