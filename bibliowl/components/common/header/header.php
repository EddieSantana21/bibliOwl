<header>
    <!-- Campo de pesquisa -->
    <input type="search" id="search" placeholder="Pesquisar" aria-label="Pesquisar no site">

    <!-- Navegação do usuário -->
    <nav class="nav-perfil">
        <!-- Ícone de seta para navegação -->

        <div class="menu-perfil">
            <button class="drop-dawn" onclick="mudarVisualizacaoMenu()">
                <svg class="arrow" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#1D1A22">
                    <path d="M480-345 240-585l56-56 184 183 184-183 56 56-240 240Z" />
                </svg>
            </button>

            <!-- Menu suspenso do perfil -->
            <ul class="ul-perfil">
                <li><a href="profile.php "><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M10 3.33325C8.15837 3.33325 6.66671 4.82492 6.66671 6.66659C6.66671 8.50825 8.15837 9.99992 10 9.99992C11.8417 9.99992 13.3334 8.50825 13.3334 6.66659C13.3334 4.82492 11.8417 3.33325 10 3.33325ZM11.6667 6.66659C11.6667 5.74992 10.9167 4.99992 10 4.99992C9.08337 4.99992 8.33337 5.74992 8.33337 6.66659C8.33337 7.58325 9.08337 8.33325 10 8.33325C10.9167 8.33325 11.6667 7.58325 11.6667 6.66659ZM15 14.1666C14.8334 13.5749 12.25 12.4999 10 12.4999C7.75004 12.4999 5.16671 13.5749 5.00004 14.1749V14.9999H15V14.1666ZM3.33337 14.1666C3.33337 11.9499 7.77504 10.8333 10 10.8333C12.225 10.8333 16.6667 11.9499 16.6667 14.1666V16.6666H3.33337V14.1666Z" fill="#49454E" />
                        </svg>Perfil</a></li>
                <li><a href="#"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3.88896 17.5C3.51396 17.5 3.18868 17.3623 2.91313 17.0869C2.63771 16.8113 2.5 16.486 2.5 16.111V3.88896C2.5 3.51396 2.63771 3.18868 2.91313 2.91313C3.18868 2.63771 3.51396 2.5 3.88896 2.5H9.98604V3.88896H3.88896V16.111H9.98604V17.5H3.88896ZM13.6944 13.8194L12.7152 12.8194L14.8402 10.6944H7.5V9.30562H14.8125L12.6875 7.18062L13.6667 6.18062L17.5 10.014L13.6944 13.8194Z" fill="#49454E" />
                        </svg>Sair</a></li>
            </ul>
        </div>

        <!-- Seção do perfil -->
        <div class="profile-container">
            <h5>Olá, Usuário!</h5>
            <a href="../../profile/sectionInformation/sectionInformation.php" aria-label="Ir para informações">
                <img src="../assets/usuario.png" alt="Foto do usuário" class="profile-picture">
            </a>
        </div>
    </nav>
</header>