
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


    

       
    <title>Inicio</title>

    
  
</head>
<body class = "bg-dark text-light">

    
    <div><h1>Pagina Inicial!</h1><div>
    <br></br>

    
    <a href="pesquisar2.php"><button class="btn btn-success">Pesquisar Produto</button>  </a> 
    <a href="cadastrar.php"><button class="btn btn-success">Cadastrar Produto</button>  </a> 
    <br></br>      

    <?php


        require 'classes/Produto.php';

        $pro = new Produto();

        if (isset($_GET ['excluir'])){
            $pro->DeletarProd($_GET ['excluir']); 
       }

        
        $produtos = $pro->listar();
        
       
        
    ?>

    <table class="table bg-light mt-3">
    <thead>
        <tr>
        <th scope="col">Id</th>
        <th scope="col">Nome</th>
        <th scope="col">Descrição</th>
        <th scope="col">Valor</th>
        <th scope="col">  Acão</th>
        </tr>
    </thead>
    <tbody>

        <?php foreach($produtos as $produto) { ?>
                    <tr>
                        <td><?php echo $produto ['codigo']?></td>
                        <td><?php echo $produto ['nome']?></td>
                        <td><?php echo $produto ['descricao']?></td>
                        <td><?php echo $produto ['valor']." R$"?></td>
                        <td><a href="alterar.php?cod=<?php echo $produto ['codigo']?>"><button class="btn btn-warning">Alterar</button></a>
                        <a class="btn btn-danger" href="excluir.php?cod=<?php echo $produto ['codigo']?>">Excluir</a> </td>
                    </tr>
        <?php } ?>    

    </tbody>
    </table>
<body>
</html>

