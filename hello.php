<html>
    <head>
    </head>
    <body>
        <h1>Hello!</h1>

        <p>PHP version: <?php echo PHP_VERSION ?></p>
        <p>Deployed app: <?php echo getenv('SENSIO_BARKET_APP') ?></p>
        <p>Deployed version: <?php echo getenv('SENSIO_BARKET_VERSION') ?></p>
    </body>
</html>
