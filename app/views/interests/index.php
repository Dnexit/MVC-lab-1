<nav class="nav anchoras">
    <h2>Содержание</h2>
    <ul></ul>
</nav>
<section class="section">
    <?php foreach ( $interests as $interest ): ?>
        <article class="article" id="<?= $interest['id'] ?>">
            <h2><?= $interest['title'] ?></h2>
            <p><?= $interest['desc'] ?></p>
        </article>
    <?php endforeach; ?>
</section>
<script src="http://<?= $_SERVER["SERVER_NAME"]; ?>/public/js/interests.js" defer></script>