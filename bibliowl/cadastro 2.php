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
                    <div class="step active">2</div>
                    <div class="step ">3</div>
                </div>

                <div class="form-group">
                    <label for="inputEstado">Insira seu periodo</label>
                    <select id="inputEstado" class="form-control">
                        <option selected>Escolher...</option>
                        <option value="Primeiro">1° Semestre</option>
                        <option value="Segundo">2° Semestre</option>
                        <option value="Terceiro">3° Semestre</option>
                        <option value="Quarto">4° Semestre</option>
                        <option value="Quinto">5° Semestre</option>
                        <option value="Sexto">6° Semestre</option>
                    </select>
                </div>
            
                <label for="nome">Insira uma foto de perfil </label>
                <input type="file" placeholder="Insira sua foto" autofocus="true" class="ft" />
                
                <a href="cadastro3.html" class="btn">Avançar</a>
                <a href="cadastro.html" class="btn">Voltar</a>
                
            </form>
        </div>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>