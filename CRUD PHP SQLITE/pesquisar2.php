<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>



    <title>Cadastro Produtos</title>
</head>
<body class = "bg-dark text-light">

    <div class="container-md">

    <div class="row">
        <div class="col-md-12">
            <h1>Pesquisa de Produtos</h1>
        </div>
    </div>

    <form action = "pesquisar2.php" method = "get">
        <div class="row">   
            <div class="col-md-12">
        


            
            <div class="mb-3">
            <label class="form-label">Descrição Produto:</label>
            <input required class="form-control"  type="text" name="descricao" id="descricao" />
            </div>

        
            
        </div>

        <div class="form-button">


            <button class="btn btn-primary" type="submit">Localizar</button>
            <a class="btn btn-danger" href="index.php">Voltar</a>


            </div>

        <?php
        

        require 'classes/Produto.php';
        
        $produtos=[];   
        if (isset($_GET ['descricao'])) {
            
            $pro = new Produto();
            $produtos=$pro->ProdDesc($_GET['descricao']);
            

        }
        ?>

        <?php if (isset($_GET ['descricao'])) { ?>
            <br></br>
            <br></br>
            <h3>Produto encontrado!</h3>
            
 
        <?php } ?>
        <br></br>
        <br></br>
        

        <table class="table table-white text-white">
        <thead>
            <tr>
            <th scope="col">Id</th>
            <th scope="col">Nome</th>
            <th scope="col">Descrição</th>
            <th scope="col">Valor</th>
            <th scope="col"></th>
            </tr>
        </thead>
        <tbody>

            <?php foreach($produtos as $produto) { ?>
                        <tr>
                            <td><?php echo $produto ['codigo']?></td>
                            <td><?php echo $produto ['nome']?></td>
                            <td><?php echo $produto ['descricao']?></td>
                            <td><?php echo $produto ['valor']?></td>
                            
                        </tr>
            <?php } ?>    

    </tbody>
    </table>



        


    </form>

</body>
</html>