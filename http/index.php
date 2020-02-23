<?php

function MinifyHTML($source) {
    $search = array(
        '/\>[^\S ]+/s',  // strip whitespaces after tags, except space
        '/[^\S ]+\</s',  // strip whitespaces before tags, except space
        '/(\s)+/s',       // shorten multiple whitespace sequences
    );

    $replace = array(
        '>',
        '<',
        '\\1',
    );

    return preg_replace($search, $replace, $source);
}

echo MinifyHTML('<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Norman Huth</title>
    <link rel="stylesheet" href="/src/css/main.css?t='.(string)filemtime(realpath('src/css/main.css')) .'">
    <link rel="stylesheet" href="/src/css/simpleLightbox.min.css?t='.(string)filemtime(realpath('src/css/simpleLightbox.min.css')) .'">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="180x180" href="/src/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/src/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/src/favicon/favicon-16x16.png">
    <link rel="manifest" href="/src/favicon/site.webmanifest">
    <link rel="mask-icon" href="/src/favicon/safari-pinned-tab.svg" color="#6f42c1">
    <link rel="shortcut icon" href="/src/favicon/favicon.ico">
    <meta name="msapplication-TileColor" content="#6f42c1">
    <meta name="msapplication-config" content="/src/favicon/browserconfig.xml">
    <meta name="theme-color" content="#6f42c1">
</head>
<body>
<div class="orientation-overlay" style="opacity: 0; pointer-events: none;">
    <div class="orientation-overlay-content">
        <div class="orientation-overlay-image"><img src="/src/images/rotate-device.svg" alt=""></div>
    </div>
</div>
<div class="wrapper">
    <div class="card">
        <div class="card-header">
            <a href="/src/images/blauzweig/Norman-Huth-1440.jpg" title="Photo by Blauzweig">
                <img src="/src/images/blauzweig/Norman-Huth-100.jpg" alt="Norman Huth" class="thumb">
            </a>
            <h1 translate="no">Norman Huth</h1>
        </div>
        <ul class="list-group list-group-flush" style="margin-top: 0;" translate="no">
            <li class="list-group-item">
                <h2 translate="no">
                    Computer Science Expert
                </h2>
                <h3 translate="no">
                    Subject Area: Software Development
                </h3>
                <hr>
                <h2 lang="de" translate="no">
                    Fachinformatiker
                </h2>
                <h3 lang="de" translate="no">
                    Fachrichtung: Anwendungsentwicklung
                </h3>
            </li>
            <li class="list-group-item">
                <div class="btn-group btn-group-sm" role="group" aria-label="Website">
                    <a href="http://normanhuth.com" target="_blank" class="btn btn-sm btn-secondary -btn-fw">
                        Website
                        <span class="flag-icon flag-icon-gb"></span>
                    </a>
                    <a href="http://normanhuth.de" target="_blank" class="btn btn-sm btn-secondary -btn-fw">
                        Website
                        <span class="flag-icon flag-icon-de"></span>
                    </a>
                </div>
            </li>
        </ul>
        <div class="card-footer p-0" translate="no">
            <ul class="nav nav-tabs nav-fill">
                <li class="nav-item">
                    <a href="https://www.linkedin.com/in/normanhuth/" target="_blank" class="nav-link btn-linkedin">
                        <i class="fab fa-linkedin fa-fw"></i>
                        <span class="sr-only">Norman Huth @ LinkedIn</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="https://www.instagram.com/muetze_official" target="_blank" class="nav-link btn-instagram">
                        <i class="fab fa-instagram fa-fw"></i>
                        <span class="sr-only">Norman Huth @ Instagram</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="https://www.facebook.com/MuetzeOfficial" target="_blank" class="nav-link btn-facebook">
                        <i class="fab fa-facebook-square fa-fw"></i>
                        <span class="sr-only">Norman Huth @ Facebook</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="https://github.com/MuetzeOfficial" target="_blank" class="nav-link btn-github">
                        <i class="fab fa-github fa-fw"></i>
                        <span class="sr-only">Norman Huth @ GitHub</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="sticky-bottom">
    <a href="https://github.com/NormanHuth/huth.it" target="_blank">Website Source</a>
</div>
<script src="/src/js/main.js?t='.(string)filemtime(realpath('/src/js/main.js')) .'"></script>
</body>
</html>');