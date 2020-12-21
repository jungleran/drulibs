<?php

file_put_contents('docs/CNAME', "drulibs.com\n");
$path = 'docs/index.html';
$lines = file($path);
$ga = <<<GA
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-BVLJR0H5W0"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-BVLJR0H5W0');
    </script>

GA;

$footer = <<<DOF
<p align="center"><a href="https://github.com/drulibs/drulibs">https://github.com/drulibs/drulibs</a></p>
<p align="center"><a href="https://www.drupal.org/u/jungle">Built by https://www.drupal.org/u/jungle</a></p>

DOF;

$new_lines = [];
foreach ($lines as $line) {
  if (trim($line) === '<head>') {
    $new_lines[] = $line;
    $new_lines[] = $ga;
    continue;
  }
  if (trim($line) === '</body>') {
    $new_lines[] = $footer;
    $new_lines[] = $line;
    continue;
  }
  $new_lines[] = $line;
}

file_put_contents($path, implode('', $new_lines));
