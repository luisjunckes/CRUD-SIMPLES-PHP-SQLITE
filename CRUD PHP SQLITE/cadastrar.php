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
            <h1>Cadastrar Produtos</h1>
        </div>
    </div>

    <form action = "cadastrar.php" method = "post">
        <div class="row">   
            <div class="col-md-12">
        


            <div class="mb-3">
                
            <label class="form-label" >Nome:</label>
            
            <input required class="form-control" type="text" name="nome" id="nome"/>
            </div>

            <div class="mb-3">
            <label class="form-label">Descrição Produto:</label>
            <input required class="form-control"  type="text" name="descricao" id="descricao" />
            </div>

        
            <div class="mb-3">
            <label class="form-label">Valor:</label>
            <input required class="form-control" type="text" name="valor" id="valor"/>
        </div>

        <div class="form-button">

            <button class="btn btn-primary" type="submit">Salvar</button>
                    
                    
                   

                    <div class="btn-group" role="group" aria-label="Basic outlined example">
                        
                        <a class="btn btn-danger" href="index.php">Voltar</a>

                    </div>
                    
                    

            </div>

        <?php
        

        require 'classes/Produto.php';

        if (isset($_POST ['nome'])) {
            $pro = new Produto();
            $pro->AdicionaProd($_POST['nome'], $_POST['descricao'], $_POST['valor']);
        }
        ?>

        <?php if (isset($_POST ['nome'])) { ?>
            <br></br>
            <h5><div class="alert alert-success">Produto Cadastrado com Sucesso!</div></h5>
            

        <?php } ?>

        <br/><br/>
            

    </form>

    <br/><br/>

</body>
</html>