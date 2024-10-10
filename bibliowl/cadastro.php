<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BibliOwl</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <section>
        <div class="page">
            <form method="POST" class="formCadastro" action="components/validacao/validarLogin.php">
                <h1>Crie uma conta!</h1>
                <div class="step-container">
                    <div class="step active">1</div>
                    <div class="step ">2</div>
                    <div class="step ">3</div>
                </div>
            

                <label for="nome">Insira seu nome</label>
                <input type="nome" placeholder="Digite seu nome" autofocus="true" />
                <label for="email">Insira seu email institucional</label>
                <input type="email" placeholder="Digite seu email institucional" />

                <div class="form-group">
                    <label for="inputEstado">Curso</label>
                    <select id="inputEstado" class="form-control">
                        <option selected>Escolher...</option>
                        <option value="ads">Análise e Desenvolvimento de Sistemas</option>
                        <option value="ge">Gestão Empresarial</option>
                        <option value="gpi">Gestão de Produção Industrial</option>
                    </select>
                </div>
                
                <a href="cadastro 2.php" class="btn">Avançar</a>
            </form>
        </div>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>
