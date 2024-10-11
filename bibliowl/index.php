<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BibliOwl</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        .password-container {
            position: relative;
            width: 100%;
        }

        input[type="password"],
        input[type="text"],
        input[type="email"] {
            width: 100%;
            height: 50px;
            /* Altura fixa para o input */
            padding: 10px;
            padding-right: 40px;
            /* Espaço para o ícone */
            box-sizing: border-box;
            /* Inclui padding na largura total */
        }

        .toggle-password {
            position: absolute;
            top: 50%;
            right: 10px;
            transform: translateY(-50%);
            /* Centraliza verticalmente */
            cursor: pointer;
            border: none;
            background: none;
            color: #999;
            /* Cor do ícone */
            height: 50px;
            /* Igual à altura do input */
            line-height: 50px;
            /* Centraliza o ícone verticalmente */
        }

        .toggle-password:hover {
            color: #333;
            /* Cor do ícone ao passar o mouse */
        }
    </style>
</head>

<body>
    <section>
        <div class="page">
            <form method="POST" class="formLogin" action="pages/dashboard.php">
                <h1>Login</h1>
                <p>Digite os seus dados de acesso no campo abaixo.</p>
                <label for="email">E-mail institucional</label>
                <input type="email" placeholder="Digite seu e-mail" autofocus="true" required />
                <label for="password">Senha</label>
                <div class="password-container">
                    <input type="password" id="password" placeholder="Digite sua senha" required minlength="8">
                    <button type="button" class="toggle-password" id="toggle-password">
                        <i class="fas fa-eye" id="eye-icon"></i>
                    </button>
                </div>
                <a href="pages/forgotpassword.php">Esqueci minha senha</a>
                <input type="submit" value="Acessar" class="btn" />
            </form>
        </div>
    </section>

    <script>
        const passwordInput = document.getElementById('password');
        const togglePasswordButton = document.getElementById('toggle-password');
        const eyeIcon = document.getElementById('eye-icon');

        togglePasswordButton.addEventListener('click', function() {
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);
            eyeIcon.classList.toggle('fa-eye');
            eyeIcon.classList.toggle('fa-eye-slash');
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>