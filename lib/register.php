<?php

class Bot{
    /**
     * @return string - bot handler url.
     *
     * функция возвращает нащ адрес в виде http://:{название сайта}/{ссылка}.{php,ru,com}
     */
    public static function buildHandlerBackupUrl()
    {
        return ($_SERVER['SERVER_PORT'] == 443 || $_SERVER["HTTPS"] == "on" ? 'https' : 'http') . "://" . $_SERVER['SERVER_NAME'] . (in_array($_SERVER['SERVER_PORT'], array(80, 443)) ? '' : ':' . $_SERVER['SERVER_PORT']) . $_SERVER['SCRIPT_NAME'];

    }
}


//$result = restCommand('imbot.register', Array(
//
//    'CODE' => 'newbot', // Строковой идентификатор бота, уникальный в рамках вашего приложения (обяз.)
//    'TYPE' => 'H', // Тип бота, B - чат-бот, ответы поступают сразу, H - человек, ответы поступают с задержкой от 2-х до 10 секунд, O - чат-бот для Открытых линий, S - чат-бот с повышенными привилегиями (supervisor)
//    'EVENT_HANDLER' => 'http://www.hazz/chatApi/event.php', // Ссылка на обработчик событий поступивших от сервера, см. Обработчики событий ниже (обяз).
//    'OPENLINE' => 'Y', // Включение режима поддержки Открытых линий, можно не указывать, если TYPE = 'O'
//    'CLIENT_ID' => '', // строковый идентификатор чат-бота, используется только в режиме Вебхуков
//    'PROPERTIES' => Array( // Личные данные чат-бота (обяз.)
//        'NAME' => 'NewBot', // Имя чат-бота (обязательное одно из полей NAME или LAST_NAME)
//        'LAST_NAME' => '', // Фамилия чат-бота (обязательное одно из полей NAME или LAST_NAME)
//        'COLOR' => 'GREEN', // Цвет чат-бота для мобильного приложения RED, GREEN, MINT, LIGHT_BLUE, DARK_BLUE, PURPLE, AQUA, PINK, LIME, BROWN,  AZURE, KHAKI, SAND, MARENGO, GRAY, GRAPHITE
//        'EMAIL' => 'test@test.ru', // E-mail для связи. НЕЛЬЗЯ использовать e-mail, дублирующий e-mail реальных пользователей
//        'PERSONAL_BIRTHDAY' => '2016-03-11', // День рождения в формате YYYY-mm-dd
//        'WORK_POSITION' => 'Мой первый бот', // Занимаемая должность, используется как описание чат-бота
//        'PERSONAL_WWW' => 'http://test.ru', // Ссылка на сайт
//        'PERSONAL_GENDER' => 'F', // Пол чат-бота, допустимые значения M -  мужской, F - женский, пусто, если не требуется указывать
//        'PERSONAL_PHOTO' => '/* base64 image */', // Аватар чат-бота - base64
//    )
//
//), $_REQUEST["auth"]);