<?php
$dirname = dirname(__FILE__);
$manifest = json_decode(file_get_contents("{$dirname}/asset-manifest.json"), true);
$_ = function ($path = '') use ($manifest) { return $manifest[$path]; };
$spriteSvg = file_get_contents("{$dirname}/assets/sprites/index.svg");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <link href="<?= $_('assets/stylesheets/index.css') ?>" rel="stylesheet" />
  <link href="favicon.ico" rel="icon" />
  <title>Webpack Boilerplate</title>
</head>
<body>
  <?= $spriteSvg ?>

  <h1 class="heading" data-target>Webpack Boilerplate</h1>

  <picture>
    <source type="image/webp" srcset="<?= $_('assets/images/logo.webp') ?>" />
    <img src="<?= $_('assets/images/logo.png') ?>" class="image" />
  </picture>

  <ul class="list">
    <li class="item">
      <button class="trigger" data-trigger>
        <svg class="icon">
          <use xlink:href="#sprite-flask"></use>
        </svg>
      </button>
    </li>
    <li class="item">
      <a
        href="https://github.com/dsktschy/webpack-boilerplate"
        target="_blank"
        rel="noopener noreferrer"
        class="trigger"
      >
        <svg class="icon">
          <use xlink:href="#sprite-github"></use>
        </svg>
      </a>
    </li>
  </ul>

  <script src="<?= $_('assets/scripts/index.js') ?>"></script>
</body>
</html>
