<div class="content-wrapper grey-block">
    <form action="" method="post" class="contact-form">
        <div class="tooltip">
            <p style="margin-top: 0">Логин</p>
            <input type="text" id="login" name="login" value="<?= $_POST["login"] ?? "" ?>">
        </div>

        <div class="tooltip">
            <p style="margin-top: 0">Пароль</p>
            <input type="password" id="password" name="password" value="">
        </div>

        <button type="submit" class="main-btn">Войти</button>
    </form>

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
                    Вход успешно выполнен
                </div>
            <?php endif;endif; ?>
    </div>
</div>