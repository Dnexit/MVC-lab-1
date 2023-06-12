<div class="content-wrapper grey-block">
    <form action="" method="post" class="contact-form test-form register-form">
        <div class="tooltip">
            <p style="margin-top: 0">ФИО</p>
            <input type="text" id="fio" name="fio" value="<?= $_POST["fio"] ?? "" ?>">
        </div>

        <div class="tooltip">
            <p style="margin-top: 0">Email</p>
            <input type="text" id="email" name="email" value="<?= $_POST["email"] ?? "" ?>">
        </div>

        <div class="tooltip">
            <p style="margin-top: 0">Логин</p>
            <input type="text" id="login" name="login" value="<?= $_POST["login"] ?? "" ?>">
            <p class="error">Данный логин уже занят</p>
        </div>

        <div class="tooltip">
            <p style="margin-top: 0">Пароль</p>
            <input type="password" id="password" name="password" value="">
        </div>

        <button type="submit" class="main-btn">Зарегистрироваться</button>
    </form>

    <style>
        .error {
            display: none;
            margin-top: 0 !important;
            color: #d32f2f;
        }

        .notification{
            position: fixed;
            top: 170px;
            right: 50px;
            z-index: 100;
        }

        .notification .notification__item{
            margin-top: 10px;
            padding: 10px 20px;
            background-color: #2b2b2b;
            color: #fff;
            border-radius: 10px;
            font-size: 16px;
            animation-name: errorOpacity;
            animation-duration: .5s;
            animation-delay: 7s;
            animation-fill-mode: forwards;
        }

        .notification .notification__item span{
            font-weight: bold;
        }

        .notification .notification__item_red{
            background-color: #d32f2f;
            color: #fff;
        }

        .notification .notification__item_green{
            background-color: #18C35C;
            color: #fff;
        }

        @keyframes errorOpacity {
            0%   {
                opacity: 1
            }
            100% {
                opacity: 0;
                visibility: hidden;
            }
        }
        .notification__item.login-busy{
            display: none;
        }
    </style>
    <div class="notification">
        <div class="notification__item notification__item_red login-busy">
            Пользователь с таким логином уже существует
        </div>
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
                    Вы успешно зарегестрированы
                    <a href="/user/login">Войти в систему</a>
                </div>
            <?php endif;endif; ?>
    </div>
</div>