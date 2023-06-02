<main class="main">
    <div class="wrapper_gallery">
        <div class="gallery">
            <?php
            $i = 0;
            foreach ($photoNames as $photoSrc => $name):
                $i++; ?>
                <figure>
                    <img title='<?= $name ?>' src='<?= $photoSrc ?>'>
                    <figcaption><?= $name ?></figcaption>
                </figure>
            <?php endforeach; ?>
        </div>
    </div>
</main>
<div class="overlay none">
    <div class="overlay__arrow overlay__arrow--left"></div>
    <img class="overlay__photo" src="http://<?= $_SERVER["SERVER_NAME"]; ?>/public/img/gallery/(4).jpg">
    <div class="overlay__arrow overlay__arrow--right"></div>
</div>