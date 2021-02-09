<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', '' );


/** Имя пользователя MySQL */
define( 'DB_USER', '' );


/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );


/** Имя сервера MySQL */
define( 'DB_HOST', '' );


/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );


/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '~@]`qM}]+[YJ/%]rqJE<RSV=W,;(_pP! ;Mof(`GCdj?mrM~MN+u0a~F@_Vfdx`=' );

define( 'SECURE_AUTH_KEY',  '[)$#Mfu1x>dENb(oLBwwJoz#<Ho<T2g3QxJc]2;*3{mAllvo)kN{L9]IAtUrwhD[' );

define( 'LOGGED_IN_KEY',    'vYpK(TNJV^[=r&d<gf-Dyp~S4^GUaP$e(m=alYsmh8N|#V0%oXL7SSzSFaZuOlG1' );

define( 'NONCE_KEY',        '_pC8[Y:> 3.LM[ouGGSXq|Q$vlzQzr$aS(t>wv)u!x/ )y|UaHE_a#uFX]}%,6-v' );

define( 'AUTH_SALT',        'djhSc{9x/LT0,?4pRs,6+*Qa&]p*]G5G r;.0{[&v;HVID_vgqQQ^4vfI^9)#Wqp' );

define( 'SECURE_AUTH_SALT', 'Lm]$x|+/aPZ5cFcvU5,8/o$alY/yH|kMtw)k)]IL-*ajfct>4jzfP5fNdklxhVnd' );

define( 'LOGGED_IN_SALT',   ';Gg2x9xI)WjwJ`(uK1z1B*DzW{_BtR`1#3Fa`sf 2<U`KLV/e8;]<3c7c5BmE9kU' );

define( 'NONCE_SALT',       '%yX<GbV,YSn+-@:t0PnArV9F956)M/UN`}&B_SP}|0@0eP^&gn{ql JQo=.zDqg4' );


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
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
