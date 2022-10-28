<?php

/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/Applications/MAMP/htdocs/childhood/wp-content/plugins/wp-super-cache/' );
define('DB_NAME', 'childhood');

/** Имя пользователя базы данных */
define('DB_USER', 'child_admin');

/** Пароль к базе данных */
define('DB_PASSWORD', '22082017');

/** Имя сервера базы данных */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'EWZwEk5Zn#84,e TJPseqmCt3+80=o6O2R>G9P+B_Ia+,XtU-iqRvxJYxrzVwo+A');
define('SECURE_AUTH_KEY',  'KK3%HM|xEErR`|9OJsIFXkkIs#lHh[kMX .TMWY7cuiQ:Gxte)YXUY]X$MT @|v2');
define('LOGGED_IN_KEY',    '0p!]fNDN(|;AcQGb_Sbr$yf0,/`4lK4vd4mB-RuTc:KrYEg{lgdsVl%+KftCGIf9');
define('NONCE_KEY',        '?u]Ip{T7!jy|#|X%>J-Gd;7o~X-yyB<,8rXZ(MUTA)NKhVj^(=?-TT}Wpxcj;YZ(');
define('AUTH_SALT',        'kmM/+@HUoo!jx]B&>O7aBak!65Ix8Bsn@(36V1W+hK*-cc&abP}O!5+4FM&_NKc2');
define('SECURE_AUTH_SALT', '@F3`S8F[W~:%V:Ka@T`_zm)JwRcMh)ef>s.KS)?K5n&nDSBIMs7/S=IpmxK.k7as');
define('LOGGED_IN_SALT',   'w-XKF~;Bez@b9zGMj}]_b=Bm1AkySrt8ec:8#}rQ7{)_9``n,~5Db=bcQ81eronK');
define('NONCE_SALT',       '.LuDRQ0&UfQV/$EKgD/L#Z|OFaDn!cp(s06buK2{N@x~p[O*l~UTco|^Dvyx)*nT');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if (!defined('ABSPATH')) {
  define('ABSPATH', __DIR__ . '/');
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
