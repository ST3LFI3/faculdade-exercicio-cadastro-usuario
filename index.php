<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Protifólio Gabriel Neves</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    
    <link rel='stylesheet' type='text/css' media='screen' href='./assets/css/style.css'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container mt-5">        
        <div class="row m-0 p-0 d-flex align-items-center justify-content-center">
            <form class="box-cad" method="POST" action="cadastro.php">  
                <span class="title text-center">Cadastro de usuário</span>
                <input type="text" name="nome" placeholder="Infome seu nome" class="mt-4" required/>
                <input type="email" name="email" placeholder="Infome seu email" required/>
                <input type="text" name="senha" placeholder="Infome sua senha" required/>

                <button type="submit" class="mt-3">Cadastrar</button>
            </form>
        </div>        
    </div>
    <script src='./assets/js/main.js'></script>
</body>
</html>