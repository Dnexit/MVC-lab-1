<main>
    <section class="page-name">
        <span><?= $title ?></span>
    </section>
    <div class="content-wrapper grey-block">
        <form class="contact-form" action="" method="post" enctype="multipart/form-data">

            <div id="tooltip"></div>

            <div class="tooltip">
                <p style="margin-top: 0">Тема сообщения</p>
                <input type="text"
                       id="title"
                       name="title"
                       value="<?php if( !empty($_POST["title"]) ) echo $_POST["title"]; ?>"
                />
                <p class="error"></p>
            </div>

            <div class="tooltip">
                <p>Изображение</p>
                <input type="file" id="img" name="img"/>
                <p class="error"></p>
            </div>

            <div class="tooltip">
                <p>Текст сообщения</p>
                <textarea type="text" id="text" name="text"><?php if( !empty($_POST["text"]) ) echo $_POST["text"]; ?></textarea>
                <p class="error"></p>
            </div>

            <button
                id="sendBtn"
                class="main-btn btn-show-modal"
                data-modal-text="Отправить данные?"
                data-btn-callback="checkTestForm"
                type="submit"
            >
                Отправить
            </button>
            <button
                id="resetBtn"
                class="main-btn btn-show-modal"
                data-modal-text="Стереть данные?"
                data-btn-callback="resetForm"
                type="reset"
            >
                Очистить форму
            </button>
        </form>

        <?php if( !empty($blogRecords) ): ?>
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