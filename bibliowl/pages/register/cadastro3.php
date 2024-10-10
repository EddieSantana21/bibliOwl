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
                    <div class="step ">1</div>
                    <div class="step ">2</div>
                    <div class="step active ">3</div>
                </div>
            

                <label for="telefone">Insira seu telefone</label>
                <input type="tel" placeholder="(xx) xxxxx-xxxx" autofocus="true" />
                <label for="senha">Insira sua senha</label>
                <input type="password" placeholder="Digite sua senha" />
                <label for="confirmar-senha">Confirme sua senha</label>
                <input type="password" placeholder="Digite sua senha" />

                
                <a href=".html" class="btn">Avançar</a>
                <a href="cadastro 2.php" class="btn">Voltar</a>
            </form>
        </div>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>
