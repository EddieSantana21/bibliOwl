<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>""</title>
    <link rel="stylesheet" href="../css/dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body>
    <div class="sidebar">
        <img src="../assets/logo.png" alt="Logo" class="logo">
        <nav>
            <ul>
                <li class="active"><i class="fas fa-home"></i> Início</li>
                <li><i class="fas fa-bell"></i> Notificação</li>
                <li><i class="fas fa-book"></i> Empréstimo</li>
                <li><i class="fas fa-heart"></i> Match</li>
                <li><i class="fas fa-cog"></i> Configurações</li>
            </ul>
        </nav>
    </div>
    <div class="main-content">
        <header>
            <input type="text" class="search-bar" placeholder="Pesquisar...">
        </header>
        <section class="emprestimo">
            <h2>Empréstimo</h2>
            <div class="book-section">
                <img src="../assets/livro1.jfif" alt="Capa do Livro" class="livro-imagem">
                <div class="livro-info">
                    <h2>O Pequeno Príncipe</h2>
                    <p>Um piloto cai com seu avião no deserto e ali encontra uma criança loura e frágil. Ela diz ter vindo de um pequeno planeta distante. E ali, na convivência com o piloto perdido, os dois repensam os seus valores e encontram o sentido da vida....</p>
                    <div class="estrelas">
                        <i class="fas fa-star active"></i>
                        <i class="fas fa-star active"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <button class="modalBtn"><i class="fas fa-book-open"></i> Ver mais</button>
                </div>
            </div>
            <div class="modal-info">
                <div class="info">
                    <img src="../assets/livro1.jfif" alt="Capa do Livro" class="livro-imagem">
                    <div class="livro-info">
                    <h2>O Pequeno Príncipe</h2>
                    <p>Um piloto cai com seu avião no deserto e ali encontra uma criança loura e frágil. Ela diz ter vindo de um pequeno planeta distante. E ali, na convivência com o piloto perdido, os dois repensam os seus valores e encontram o sentido da vida....</p>
                        <div class="estrelas">
                            <h2>Sobre</h2>
                            <p>O pequeno príncipe é um clássico da literatura infantil que narra a amizade entre um menino e um piloto de avião. O principezinho vem do asteroide B 612, e encontra o piloto no deserto do Saara. A obra fala de amor, amizade e sobre a sabedoria infantil.</p>
                            <h2>Autor</h2>
                            <p>Antoine de Saint-Exupéry</p>
                            <h2>Editora</h2>
                            <p>Nova Fronteira</p>
                            <h2>Publicado em:</h2>
                            <p>31 de outubro de 2016</p>
                            <h2>ISBN-10</h2>
                            <p>852093014X</p>
                            <h2>ISBN-13</h2>
                            <p>978-8520930144</p>
                            <h2>Quantidade de páginas</h2>
                            <p>96 Páginas</p>
                            <h2>Idioma</h2>
                            <p>Português</p>
                            <h2>Idade de leitura</h2>
                            <p>Idade sugerida para a leitura deste livro é a partir 10 anos</p>
                        </div>
                </div>
            </div>
            </div>
        </section>

        <section class="livros">
            <h2>Livros</h2>
            <div class="categoria-botoes">
                <button class="categoria active">Categoria 1</button>
                <button class="categoria">Categoria 2</button>
                <button class="categoria">Categoria 3</button>
                <button class="categoria">Categoria 4</button>
                <button class="categoria">Categoria 5</button>
                <button class="categoria">Categoria 6</button>
                <button class="categoria">Categoria 7</button>
                <button class="navegacao"><i class="fas fa-chevron-left"></i></button>
                <button class="navegacao"><i class="fas fa-chevron-right"></i></button>
            </div>

            <div class="livro-lista">
                <div class="livro">
                    <img src="../assets/livro2.jpg" alt="Capa do Livro">
                    <h3>Título do Livro 1</h3>
                    <div class="estrelas">
                        <i class="fas fa-star active"></i>
                        <i class="fas fa-star active"></i>
                        <i class="fas fa-star active"></i>
                        <i class="fas fa-star active"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
                <div class="livro">
                    <img src="../assets/livro2.jpg" alt="Capa do Livro">
                    <h3>Título do Livro 2</h3>
                    <div class="estrelas">
                        <i class="fas fa-star active"></i>
                        <i class="fas fa-star active"></i>
                        <i class="fas fa-star active"></i>
                        <i class="fas fa-star active"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
                <div class="livro">
                    <img src="../assets/livro1.jfif" alt="Capa do Livro">
                    <h3>Título do Livro 3</h3>
                    <div class="estrelas">
                        <i class="fas fa-star active"></i>
                        <i class="fas fa-star active"></i>
                        <i class="fas fa-star active"></i>
                        <i class="fas fa-star active"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
                <div class="livro">
                    <img src="../assets/livro1.jfif" alt="Capa do Livro">
                    <h3>Título do Livro 4</h3>
                    <div class="estrelas">
                        <i class="fas fa-star active"></i>
                        <i class="fas fa-star active"></i>
                        <i class="fas fa-star active"></i>
                        <i class="fas fa-star active"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
            </div>

            <div class="livro-lista">
                <div class="livro">
                    <img src="../assets/livro1.jfif" alt="Capa do Livro">
                    <h3>Título do Livro 1</h3>
                    <div class="estrelas">
                        <i class="fas fa-star active"></i>
                        <i class="fas fa-star active"></i>
                        <i class="fas fa-star active"></i>
                        <i class="fas fa-star active"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
                <div class="livro">
                    <img src="../assets/livro1.jfif" alt="Capa do Livro">
                    <h3>Título do Livro 2</h3>
                    <div class="estrelas">
                        <i class="fas fa-star active"></i>
                        <i class="fas fa-star active"></i>
                        <i class="fas fa-star active"></i>
                        <i class="fas fa-star active"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
                <div class="livro">
                    <img src="../assets/livro1.jfif" alt="Capa do Livro">
                    <h3>Título do Livro 3</h3>
                    <div class="estrelas">
                        <i class="fas fa-star active"></i>
                        <i class="fas fa-star active"></i>
                        <i class="fas fa-star active"></i>
                        <i class="fas fa-star active"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
                <div class="livro">
                    <img src="../assets/livro1.jfif" alt="Capa do Livro">
                    <h3>Título do Livro 4</h3>
                    <div class="estrelas">
                        <i class="fas fa-star active"></i>
                        <i class="fas fa-star active"></i>
                        <i class="fas fa-star active"></i>
                        <i class="fas fa-star active"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <section class="populares">
                <h2>Livros Populares</h2>
                <div class="livro-lista">
                    <div class="livro">
                        <img src="../assets/livro1.jfif" alt="Capa do Livro">
                        <h3>Título do Livro 1</h3>
                        <div class="estrelas">
                            <i class="fas fa-star active"></i>
                            <i class="fas fa-star active"></i>
                            <i class="fas fa-star active"></i>
                            <i class="fas fa-star active"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                    <div class="livro">
                        <img src="../assets/livro1.jfif" alt="Capa do Livro">
                        <h3>Título do Livro 2</h3>
                        <div class="estrelas">
                            <i class="fas fa-star active"></i>
                            <i class="fas fa-star active"></i>
                            <i class="fas fa-star active"></i>
                            <i class="fas fa-star active"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                    <div class="livro">
                        <img src="../assets/livro1.jfif" alt="Capa do Livro">
                        <h3>Título do Livro 3</h3>
                        <div class="estrelas">
                            <i class="fas fa-star active"></i>
                            <i class="fas fa-star active"></i>
                            <i class="fas fa-star active"></i>
                            <i class="fas fa-star active"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                    <div class="livro">
                        <img src="../assets/livro1.jfif" alt="Capa do Livro">
                        <h3>Título do Livro 4</h3>
                        <div class="estrelas">
                            <i class="fas fa-star active"></i>
                            <i class="fas fa-star active"></i>
                            <i class="fas fa-star active"></i>
                            <i class="fas fa-star active"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
            </section>

    </div>
    <script src="./src/scripts.js"></script>
    <script src="../js/modal.js"></script>
</body>

</html>