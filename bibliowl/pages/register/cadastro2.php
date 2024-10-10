<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BibliOwl</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/style.css">
</head>

<body>
    <section>
        <div class="page">
            <form method="POST" class="formCadastro" action="cadastro3.php">
                <h1>Crie uma conta!</h1>
                <div class="step-container">
                    <div class="step">1</div>
                    <div class="step active">2</div>
                    <div class="step">3</div>
                </div>
            
                <label for="fotoPerfil">Insira uma foto de perfil</label>
                <input type="file" id="fotoPerfil" class="ft" accept="image/*" onchange="previewImage(event)" />

                <div id="previewContainer" style="margin-top: 10px;">
                    <img id="imagePreview" src="" alt="Prévia da imagem" style="display: none; max-width: 200px; max-height: 200px;" />
                </div>

                <input type="submit" value="Avançar" class="btn" />
            </form>
        </div>
    </section>

    <script>
        function previewImage(event) {
            const input = event.target;
            const preview = document.getElementById('imagePreview');
            
            if (input.files && input.files[0]) {
                const reader = new FileReader();

                reader.onload = function(e) {
                    preview.src = e.target.result;
                    preview.style.display = 'block';
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
