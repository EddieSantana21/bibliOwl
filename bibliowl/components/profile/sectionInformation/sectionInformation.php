<section class="card-profile">
    <h4>Minhas informações</h4>

    <form action="#" method="POST" class="form-profile">
        <div class="image-profile">
            <img src="../assets/usuario.png" alt="Imagem de perfil do usuário">
            <label class="edit" for="arquivo"><svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.00003 21.9997L23.6666 3.33368L29 8.66635L10.3333 27.333L3.66669 28.6663L5.00003 21.9997Z" stroke="#49454E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M20.9025 6.20792L26.1247 11.43" stroke="#49454E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M20.9025 6.20792L26.1247 11.43" stroke="#49454E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M6.54138 21.2215L11.1108 25.7908" stroke="#49454E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M9.15247 23.1798L23.5136 8.81897" stroke="#49454E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg></label>
            <div class="nome-curso">
                <input type="file" id="arquivo" class="btn-edit" aria-label="Alterar foto de perfil" name="arquivo" >
                <label for="full-name" class="info-profile">Nome completo</label>
                <input type="text" id="full-name" name="full-name" class="input-profile" required placeholder="Nome completo">

                <label for="course" class="info-profile">Curso</label>
                <input type="text" id="course" name="course" class="input-profile" required placeholder="Curso">
            </div>
        </div>

        <div class="tel-data">
            <div class="input-tel">
                <label for="phone" class="info-profile">Telefone</label>
                <input type="tel" id="phone" name="phone" class="input-profile" placeholder="(DDD) 99999-9999" pattern="\(\d{2}\)\s?\d{5}-\d{4}" required>
            </div>
            <div class="input-data">
                <label for="birthdate" class="info-profile">Data de nascimento</label>
                <input type="date" id="birthdate" name="birthdate" class="input-profile" required>
            </div>
        </div>


        <button type="submit" class="btn-salvar">
                Salvar
        </button>
    </form>
</section>