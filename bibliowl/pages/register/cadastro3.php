<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/style.css">
</head>
<body>
    <section>
        <div class="page">
            <form method="POST" class="formCadastro" action="components/validacao/validarLogin.php" onsubmit="return validarFormulario()">
                <h1>Crie uma conta!</h1>
                <div class="step-container">
                    <div class="step">1</div>
                    <div class="step">2</div>
                    <div class="step active">3</div>
                </div>

                <label for="telefone">Insira seu telefone</label>
                <input type="tel" id="telefone" placeholder="(xx) xxxxx-xxxx" required />
                
                <label for="senha">Insira sua senha</label>
                <input type="password" id="senha" placeholder="Digite sua senha" minlength="8" required />
                
                <label for="confirmar-senha">Confirme sua senha</label>
                <input type="password" id="confirmar-senha" placeholder="Digite sua senha" required />

                <input type="submit" value="Concluir" class="btn" />
            </form>
        </div>
    </section>

    <script>
        $(document).ready(function() {
            $("#telefone").mask("(00) 00000-0000"); // Máscara para telefone
        });

        function validarFormulario() {
            const senha = document.getElementById('senha').value;
            const confirmarSenha = document.getElementById('confirmar-senha').value;
            if (senha !== confirmarSenha) {
                alert('As senhas não coincidem!');
                return false;
            }
            return true;
        }
    </script>

</body>
</html>