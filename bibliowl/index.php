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
            <form method="POST" class="formLogin">
                <h1>Login</h1>
                <p>Digite os seus dados de acesso no campo abaixo.</p>
                <label for="email">E-mail institucional</label>
                <input type="email" placeholder="Digite seu e-mail" autofocus="true" />
                <label for="password">Senha</label>
                <input type="password" placeholder="Digite seu e-mail" />


                <div class="form-group">
                    <label for="inputEstado">Curso</label>
                    <select id="inputEstado" class="form-control">
                        <option selected>Escolher...</option>
                        <option value="ads">Análise e Desenvolvimento de Sistemas</option>
                        <option value="ge">Gestão Empresarial</option>
                        <option value="gpi">Gestão de Produção Industrial</option>
                    </select>
                </div>

                <a href="/">Esqueci minha senha</a>
                <input type="submit" value="Acessar" class="btn" />
            </form>
        </div>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>