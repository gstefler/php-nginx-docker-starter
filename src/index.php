<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo ($_SERVER['HTTP_HOST']); ?></title>
</head>

<body>
    <h1>(sub)domain: <?php echo ($_SERVER['HTTP_HOST']); ?></h1>
    <h2>php version: <?php echo (phpversion()); ?></h2>
    <!-- <h2>server ip: <?php echo (file_get_contents("http://ipecho.net/plain")); ?></h2> -->
</body>

</html>