<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> enviar email com sendgrid</title>
</head>
<body>
    <h1>Enviar email com sendgrid</h1>
    <?php
    require 'lib/vendor/autoload.php';

    $email = new \SendGrid\Mail\Mail();

    //necessario realizar criação de sender identity no sendgrid do email que será definido no from
    $email->setFrom("ramon.lopes2014@hotmail.com", "Ramon");    
    $email->setSubject("como enviar email com sendgrid");
    $email->addTo("ramon.camargo@fatec.sp.gov.br", "Ramon Lopes");
    $email->addContent("text/plain", "somente texto");
    $email->addContent(
        "text/html", "<strong>conteudo com html</strong>"
    );
    $sendgrid = new \SendGrid('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');
    try {
        $response = $sendgrid->send($email);
        print $response->statusCode() . "\n";
        print_r($response->headers());
        print $response->body() . "\n";
    } catch (Exception $e) {
        echo 'Caught exception: '. $e->getMessage() ."\n";
    }
    ?>
</body>
</html>