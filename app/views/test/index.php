<style>
    .green-text{
        color: #60b11f;
    }
    .red-text{
        color: #b11818;
    }
</style>
<main class="main">
    <form class="form" action="/test" method="post">
        <div class="form__field">
            <label for="fullname">Введите ФИО</label>
            <input name="fio" type="text" id="fullname" pattern="[А-Яа-яЁё]+\s[А-Яа-яЁё]+\s[А-Яа-яЁё]+" required placeholder="Фамилия Имя Отчество" value="<?php if( !empty($_POST["fio"]) ) echo $_POST["fio"]; ?>">
        </div>
        <div class="form__field">
            <label for="year_student">Группа:</label>
            <select name="year_student" id="year_student" required>
                <option>ПИ/б-20-1-о 3 курс</option>
                <option>ИС/б-21-1-о 2 курс</option>
                <option>ПИ/б-21-1-о 2 курс</option>
                <option>ПИ/б-22-1-о 1 курс</option>
            </select>
        </div>
        <div class="form__field">
            <fieldset class="fieldset fieldset_question">
                <legend>В программировании конструкция языка программирования, результатом вычисления которой является «истина» или «ложь», называется ...</legend>
                <input type="radio" name="boolean_question" value="expression" id="expression" checked>
                <label for="expression">Логическое выражение</label><br>
                <input type="radio" name="boolean_question" value="operation" id="operation">
                <label for="operation">Логическая операция</label><br>
                <input type="radio" name="boolean_question" value="operator" id="operator">
                <label for="operator">Логический оператор</label><br>
                <input type="radio" name="boolean_question" value="logic" id="logic">
                <label for="logic">Логическая логика</label>
            </fieldset>
        </div>
        <?php if( !empty($testData) ): ?>
            <div class="<?= $testData->q_1 ? "green-text" : "red-text" ?>"><?= $testData->q_1 ? "Верно" : "Неверно" ?></div>
        <?php endif; ?>
        <div class="form__field">
            <label for="equality">бинарное отношение между элементами данного множества, свойства которого сходны со свойствами отношения равенства называется</label>
            <select id="equality" name="equality" required>
                <option value="and"> И </option>
                <option value="condition"> Импликация </option>
                <option value="equivalence"> Эквивалентность </option>
                <option value="or"> Или </option>
                <option value="exclusive_or"> Исключающее или </option>
            </select>
        </div>
        <?php if( !empty($testData) ): ?>
            <div class=" <?= $testData->q_2 ? "green-text" : "red-text" ?> "><?= $testData->q_2 ? "Верно" : "Неверно" ?></div>
        <?php endif; ?>
        <div class="form__field">
            <label for="if_then">Бинарная логическая связка, по своему применению приближенная к союзам «если…, то…» - это ..:</label>
            <textarea name="if_then" id="if_then" rows="5" cols="33" pattern="([А-Яа-яЁё]+\s){34}[А-Яа-яЁё].*" required></textarea>
        </div>
        <?php if( !empty($testData) ): ?>
            <div class=" <?= $testData->q_3 ? "green-text" : "red-text" ?> "><?= $testData->q_3 ? "Верно" : "Неверно" ?></div>
        <?php endif; ?>
        <div class="form__field">
            <label for="email">Почта:</label>
            <input type="email" name="email" id="email" required placeholder="email@email.com">
        </div>
        <div class="form__field">
            <input data-type="submit" type="submit" type="button" value="Отправить">
            <input data-type="reset" type="reset" value="Очистить">
        </div>
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
                    Данные успешно отправлены
                </div>
            <?php endif;endif; ?>
    </div>
</main>
