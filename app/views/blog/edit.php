<main>
    <section class="page-name">
        <span><?= $title ?></span>
    </section>

    <div class="modal edit-blog-modal">
        <div class="modal__title">
            Редактирование блога
        </div>
        <div class="modal__desc">
            <form action="/blog/editRecord" method="post" class="main-form">
                <label for="fio">
                    ID блога
                    <input class="blog-id" type="text" name="blog_id">
                </label>

                <label for="fio">
                    Тема записи
                    <input type="text" name="title">
                </label>

                <label for="text">
                    Текст сообщения
                    <input type="text" name="text">
                </label>

                <div class="modal__btn">
                    <button type="submit" class="main-btn">Изменить</button>
                </div>
            </form>
        </div>
    </div>

        <?php if( !empty($blogRecords) ): ?>
            <table class="blog-edit-table">
                <tr>
                    <th>Тема сообщения</th>
                    <th>Изображение</th>
                    <th>Текст сообщения</th>
                    <th>Дата добавления</th>
                    <th></th>
                </tr>
                <?php foreach ($blogRecords as $blogRecord): ?>
                    <tr data-id="<?= $blogRecord->id ?>">
                        <td class="blog-title">
                            <?= $blogRecord->title ?>
                        </td>
                        <td class="blog-img">
                            <img src="/public/img/blog/<?= $blogRecord->img ?>" alt="">
                        </td>
                        <td class="blog-text">
                            <?= $blogRecord->text ?>
                        </td>
                        <td class="blog-created-at">
                            <?= $blogRecord->created_at ?>
                        </td>
                        <td>
                            <a class="edit-blog" href="javascript:void(0)">
                                <span class="material-icons">edit</span>
                            </a>
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
                    <a href="/blog/edit?page=<?= $i ?>" class="paginate__item"> <?= $i ?> </a>
                <?php endif; ?>

            <?php endfor; ?>
        </div>

        <div class="notification">
            <?php
            if( !empty($_POST) && isset($errors) ):
                foreach ($errors as $error):
                    ?>
                    <div class="notification__item notification__item_red">
                        <?= $error; ?>
                    </div>
                <?php
                endforeach;
                if( count($errors) == 0 ):
                    ?>
                    <div class="notification__item notification__item_green">
                        Данные успешно отправлены
                    </div>
                <?php endif;endif; ?>
        </div>
    </div>
</main>