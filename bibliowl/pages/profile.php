<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <link rel="stylesheet" href="../css/home.css">
    <link rel="stylesheet" href="../css/profile.css">

    <link rel="stylesheet" href="../components/common/sidebar/sidebar.css">
    <link rel="stylesheet" href="../components/common/header/header.css">
    <link rel="stylesheet" href="../components/profile/sectionInformation/sectionInformation.css">
    <link rel="stylesheet" href="../components/profile/sectionMeusEmprestimos/sectionMeusEmprestimos.css">
</head>

<body>
    <?php require_once "../components/common/sidebar/sidebar.php"; ?>
    <main>
        <?php require_once "../components/common/header/header.php"; ?>
        <div class="perfil-emprestimos">
            <?php require_once "../components/profile/sectionInformation/sectionInformation.php"; ?>
            <?php require_once "../components/profile/sectionMeusEmprestimos/sectionMeusEmprestimos.php"; ?>
        </div>
    </main>
</body>
<script src="../components/common/header/header.js"></script>

</html>