<?php

/**
 * @var $errno \wfm\ErrorHandler
 * @var $errstr \wfm\ErrorHandler
 * @var $errfile \wfm\ErrorHandler
 * @var $errline \wfm\ErrorHandler
 */

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ошибка</title>
</head>
<body>

<h1>Произошла ошибка</h1>
<p><b>Код:</b> <?= $errno ?></p>
<p><b>Описание:</b> <?= $errstr ?></p>
<p><b>В файле:</b> <?= $errfile ?></p>
<p><b>На строке:</b> <?= $errline ?></p>

</body>
</html>
