<?php $currentPage = preg_replace('/\.php$/', '', basename($_SERVER['PHP_SELF'])); ?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="shortcut icon" href="favicon.png">

    <!-- TODO: ONLY show the total-hashrate in <title> when on index.php / Dashboard -->
    <title>
    <?php echo ($currentPage == 'index') ? 'Dashboard' : '' ?>
    <?php echo ($currentPage == 'settings') ? 'Settings' : '' ?>
    <?php echo ($currentPage == 'help') ? 'README.md' : '' ?>
    <?php echo ($currentPage == 'changelog') ? 'CHANGELOG.md' : '' ?>
    <?php echo ($currentPage == 'wallet') ? 'Wallet Details' : '' ?>
    <?php echo ($currentPage == 'rig') ? 'Rig Details' : '' ?>
    <?php echo ($currentPage == 'update') ? 'Updating cryptoGlance...' : '' ?>
    :: cryptoGlance</title>
    <link rel="stylesheet" href="styles.css">

    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <script type="text/javascript">
        var documentTitle = document.title;
        var DATA_FOLDER = '<?php echo DATA_FOLDER; ?>';
        var CURRENT_VERSION = '<?php echo CURRENT_VERSION?>';
        <?php echo ($settings['general']['updates']['enabled'] == '1') ? 'var updateType = "' . $updateFeed[$settings['general']['updates']['type']]['feed'] . '";' : '' ?>
        var rigUpdateTime = <?php echo $settings['general']['updateTimes']['rig'] ?>;
        var poolUpdateTime = <?php echo $settings['general']['updateTimes']['pool'] ?>;
        var walletUpdateTime = <?php echo $settings['general']['updateTimes']['wallet'] ?>;
    </script>
</head>