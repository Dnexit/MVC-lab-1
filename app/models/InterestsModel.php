<?php

namespace app\models;

use app\core\Model;

class InterestsModel extends Model {
    private $content = [];
    private $interests = [];

    public function getContent(){
        $this->content = [
            "Книги" => "#books",
            "Фильмы" => "#films",
            "Сериалы" => "#TV_series",
            "Мультфильмы и мультсериалы" => "#cartoons",
            "Хобби" => "#hobby",
        ];

        return $this->content;
    }

    public function getInterests()
    {
        $this->interests = [
            [
                "title" => "Книги",
                "id" => "books",
                "desc" => "<br>Из всего разнообразия увлечений, мое хобби – это книги. Когда я начинаю читать, я отдаю всю себя и могу просидеть за чтением какой-нибудь интересной книги чуть ли не весь день, забыв о сне и еде. Когда я читаю, я успокаиваюсь.
            <br><br>Читая, я познаю себя, создаю свою собственную реальность. Одна книга – она реальность. А у меня их набралось уже очень много.
            <br><br>Любовь к книгам – это заслуга Родителей. Я, как сейчас помню тот день, когда они подарили мне мою первую книжку – волшебник изумрудного города. Мне очень понравилось читать, и родители купили мне новые книги.
            <br><br>Теперь, у меня набралась уже целая коллекция книг. Ими заполнена вся моя комната. Книги, подарили мне не только счастливые моменты, но и хорошую учебу в школе, потому что, читая, я развиваюсь.
            <br><br>Я очень люблю читать и хочу, чтобы таких как я стало больше."
            ],
            [
                "title" => "Фильмы",
                "id" => "films",
                "desc" => "Кин-дза-дза, Кавказкая пленница, Ирония судьбы,
            <br><br> Шерлок от BBC, Аватар, <br><br> Серия фильмов \"Пираты карибского моря\", трансформеры,
            мюзикл отверженные, война и мир BBC, <br><br> Возвращение в будущее,
            Коко Шанель, 5 элемент, человек-паук, Люди в черном,
            ..."
            ],
            [
                "title" => "Сериалы",
                "id" => "TV_series",
                "desc" => "Сверхъестественное, доктор Хаус, Шерлок, ривердейл..."
            ],
            [
                "title" => "Мультфильмы и мультсериалы",
                "id" => "cartoons",
                "desc" => "Ну погоди, Тоторо, Наусика из Долины ветров, Ходячий замок Хаулла,
            Летающий замок Лапута, рыбка Поньо на утесе, Унесенные призраками,
            Принцесса Мононоке, <br><br> Возвращение кота, Ведьмина служба доставки,
            Эпик, Симпсоны, Футурама, Хранители снов, Хранитель луны, Легенда ночных стражей,
            Ранго, Дампир Ди, Добытчица, Песнь моря, Дети дождя,<br><br> Корпорация монстров,
            Рапунцель от Дисней, История игрушек, Металл фемели, Аватар: легенда об Аанге,
            Гадкий Я, Шрек 1-4, Ледниковый период, Кунг-фу панда, Рататуй, Валли,
            Ночь перед рождеством,  <br><br>
            Мадгаскар, Пингвины из Мадагаскар, Три богатыря,
            Бии муви, Элвин и бурундуки, Тачки, Барашек Шон, Рекс, Сеперсемейка,
            Вверх, Дом, Спанч Боб, Зверополис, Сезон охоты, Как приручить дракона,
            Гора самоцветов, Охотники на драконов, Разочарование, В поисках Немо,
            Спирит: душа прерий, Похождение императора,<br><br>
            Подводная братва, делай ноги,<br><br>
            Дорога на Эльдорадо, Алладин, Роботы, Атлантида, Не бей копытом, Синбад,
            Смывайся, Гроза муравьев, Артур и минипуты, Король лев, Черепашки ниндзя,
            лис и пес, Рога и копыта, Гадкий утенок и я, Карлик Нос, Эй арнольд..."
            ],
            [
                "title" => "Хобби",
                "id" => "hobby",
                "desc" => "чтение, бег на свежем воздухе, прослушивание музыки,
            <br><br>просмотр сериалов и аниме, видеохостинка yuotube,
            <br><br>записывание видео, коллекционирование жестяных банок ..."
            ],
        ];

        return $this->interests;
    }
}