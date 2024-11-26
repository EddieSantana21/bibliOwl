<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Início</title>
    <link rel="stylesheet" href="../css/dashboard2.css">

    <!-- componentes -->
    <link rel="stylesheet" href="../components/sidebar/sidebar.css">
    <link rel="stylesheet" href="../components/header/header.css">
    <link rel="stylesheet" href="../components/sectionEmprestimo/sectionEmprestimo.css">
    <link rel="stylesheet" href="../components/sectionCategoria/sectionCategoria.css">
    <link rel="stylesheet" href="../components/sectionLivros/sectionLivros.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- fonte -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
</head>

<body>
    <?php require_once "../components/sidebar/sidebar.php"; ?>
    <main>
        <?php require_once "../components/header/header.php"; ?>
        <?php require_once "../components/sectionEmprestimo/sectionEmprestimo.php"; ?>
        <?php require_once "../components/sectionCategoria/sectionCategoria.php"; ?>
        <?php require_once "../components/sectionLivros/sectionLivros.php"; ?>
    </main>
</body>

</html>