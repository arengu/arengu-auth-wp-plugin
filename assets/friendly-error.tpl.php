<?php

defined('WPINC') or die('WPINC is not defined'); ?>

<!DOCTYPE html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="text-center card mt-5 pt-4">
            <div class="mb-3">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 174.239 174.239"
                    style="max-width:75px" fill="#e24c4b">
                    <path d="M87.12 0C39.082 0 0 39.082 0 87.12s39.082 87.12 87.12 87.12 87.12-39.082
                        87.12-87.12S135.157 0 87.12 0zm0 159.305c-39.802 0-72.185-32.383-72.185-72.185S47.318 14.935
                        87.12 14.935s72.185 32.383 72.185 72.185-32.384 72.185-72.185 72.185z" />
                    <path d="M120.83 53.414c-2.917-2.917-7.647-2.917-10.559 0L87.12 76.568 63.969
                        53.414c-2.917-2.917-7.642-2.917-10.559 0s-2.917 7.642 0 10.559l23.151 23.153-23.152 23.154a7.464
                        7.464 0 000 10.559 7.445 7.445 0 005.28 2.188 7.437 7.437 0 005.28-2.188L87.12 97.686l23.151
                        23.153a7.445 7.445 0 005.28 2.188 7.442 7.442 0 005.28-2.188 7.464 7.464 0 000-10.559L97.679
                        87.127l23.151-23.153a7.465 7.465 0 000-10.56z" />
                </svg>
            </div>

            <h1 class="text-center">Authentication error</h1>

            <p><?= $msg; ?></p>

            <a class="btn btn-link" href="<?= get_site_url(); ?>">&laquo; Go home</a>
        </div>
    </div>
</body>
</html>
