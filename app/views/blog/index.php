<main>
    <section class="page-name">
        <span><?= $title ?></span>
    </section>
    <div class="content-wrapper grey-block">

        <?php if (!empty($blogRecords)): ?>
            <table>
                <tr>
                    <th>Тема сообщения</th>
                    <th>Изображение</th>
                    <th>Текст сообщения</th>
                    <th>Дата добавления</th>
                </tr>
                <?php foreach ($blogRecords as $blogRecord): ?>
                    <tr>
                        <td>
                            <?= $blogRecord->title ?>
                        </td>
                        <td>
                            <img src="/public/img/blog/<?= $blogRecord->img ?>" alt="">
                        </td>
                        <td>
                            <?= $blogRecord->text ?>
                        </td>
                        <td>
                            <?= $blogRecord->created_at ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        <?php endif; ?>


        <div class="num-page">
            Всего страниц: <?= $blogNumPage ?><br>
        </div>

        <div class="paginate">
            <?php
            if (isset($_GET["page"])) $page = $_GET["page"]; else $page = 1;
            ?>
            <?php for ($i = 1; $i <= $blogNumPage; $i++): ?>
                <?php if ($page == $i): ?>
                    <span class="active paginate__item"><?= $i ?></span>
                <?php else: ?>
                    <a href="blog?page=<?= $i ?>" class="paginate__item"> <?= $i ?> </a>
                <?php endif; ?>

            <?php endfor; ?>
        </div>


    </div>
</main>