<section class="card-profile">
    <h4>Minhas informações</h4>

    <figure class="image-profile">
        <img src="../../../assets/usuario.png" alt="Imagem de perfil do usuário">
        <input type="file" id="profile-picture" class="btn-edit" aria-label="Alterar foto de perfil">
    </figure>

    <form action="#" method="POST" class="form-profile">
        <label for="full-name" class="info-profile">Nome completo</label>
        <input type="text" id="full-name" name="full-name" class="input-profile" required>

        <label for="course" class="info-profile">Curso</label>
        <input type="text" id="course" name="course" class="input-profile" required>

        <label for="phone" class="info-profile">Telefone</label>
        <input type="tel" id="phone" name="phone" class="input-profile" placeholder="(DDD) 99999-9999" pattern="\(\d{2}\)\s?\d{5}-\d{4}" required>

        <label for="birthdate" class="info-profile">Data de nascimento</label>
        <input type="date" id="birthdate" name="birthdate" class="input-profile" required>

        <input type="submit" value="Salvar" class="btn-submit input-profile">
    </form>
</section>
