<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?= $this->getMeta(); ?>
</head>
<body>
    <h1>Шаблон DEFAULT (layout)</h1>
    <?= $content; ?>
    <?php 
    
    $logs = R::getDatabaseAdapter()
            ->getDatabase()
            ->getLogger();

    debug( $logs->grep( 'SELECT' ) );
    
    ?>
</body>
</html>