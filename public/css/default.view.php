<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="public/bootstrap-cerulean.min.css">
    <link rel="stylesheet" href="public/app.css">

    <title><?=$title ?></title>
</head>
<body>

    <div class="container">
        <?php \helper\flashError() ; \helper\flashSuccess() ?>
        <?= $__CONTENT__ ?>
    </div>
    <footer>

    </footer>
    <script src="public/jquery-3.2.1.min.js"></script>
<script src="public/app.js"></script>
</body>
</html>

<?php
