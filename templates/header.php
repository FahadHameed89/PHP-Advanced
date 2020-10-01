<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $GLOBALS['pageTitle']; ?></title>

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Scripts -->
    <script type="text/JavaScript" src="js/scripts.js" defer></script>

</head>
<body>
    <h1>
    <?php echo $GLOBALS['pageTitle']; ?>
    </h1>
    
    <?php // dirname( __FILE__ ) grabs the currently executing file's absolute path (as a string)
    include dirname( __FILE__ ).'/navigation.php'; ?>