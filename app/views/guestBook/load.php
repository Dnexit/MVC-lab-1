<main>
    <div class="content-wrapper grey-block">
        <form class="contact-form" action="/guest-book/load" method="post" enctype="multipart/form-data">

            <div id="tooltip"></div>

            <div class="tooltip">
                <p style="margin-top: 0">ФИО</p>
                <input type="file"
                       id="file"
                       name="file"
                />
            </div>

            <button
                id="sendBtn"
                class="main-btn btn-show-modal"
                data-modal-text="Отправить данные?"
                data-btn-callback="checkTestForm"
                type="submit"
                name="button"
            >
                Отправить
            </button>
            <button
                id="resetBtn"
                class="main-btn btn-show-modal"
                data-modal-text="Стереть данные?"
                data-btn-callback="resetForm"
                type="reset"
                name="button"
            >
                Очистить форму
            </button>
        </form>

        <?php if( !empty( $messages ) ): ?>
            <table>
                <tr>
                    <th>ФИО</th>
                    <th>Email</th>
                    <th>Текст сообщения</th>
                    <th>Дата добавления</th>
                </tr>
                <?php foreach ($messages as $message): ?>
                <tr>
                    <?php foreach ($message as $messageData): ?>
                        <td>
                            <?= nl2br(htmlspecialchars($messageData)) ?>
                        </td>
                    <?php endforeach; ?>
                </tr>
                <?php endforeach; ?>
            </table>
        <?php endif; ?>

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