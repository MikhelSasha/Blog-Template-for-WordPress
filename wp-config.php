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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'wp-blog');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', '127.0.0.1');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '0xTY07:v^h kX*{NF}M^r,(<C?>h((3V*y?aB(:j#%!V,Z(Lh;s9<(EhpZWo8f.{');
define('SECURE_AUTH_KEY',  '4c0,.;N9@c[qwT(xB gNt@^`<wq3(*dIPtPi$cJ)w{|y=V0t/QEgD0#Eljy[|goh');
define('LOGGED_IN_KEY',    'U?c/>n_zRUSg%ya&Znh-Dq8;Zq*eR3syW}#Hc$) |lM$O`+X;/dc:nx~GOE7)Riq');
define('NONCE_KEY',        '?|,MYV/IBx1Rj6z8(,LKTD-S-GrHY{z9U8%=+tlE}||Xok&8!BwPF|?Yv#iq,,0U');
define('AUTH_SALT',        '>E~aqu1!A#Q%:Cql0Rq.dwMLD7/_u~kZnZ4.j!F?oRi[(J2* Fy._Ds9pP6[dX^W');
define('SECURE_AUTH_SALT', '-Lkqepo<Y;4x=(:#R8yqT]c3q>wP[k3CQIW+=/wD>#*[w8oCc*8hiSz=1,oOYM&}');
define('LOGGED_IN_SALT',   'M+Elc< o>g5EA%`_ALZ@%c-F [/J_8]]]x~)5OL7?Sc{U<:6F)of@klrA3O&2ooS');
define('NONCE_SALT',       '2T)&`hsy.$:ux-=F*Rr6D%xZv_;.+>)`O]g 4<1Z~x4K!ckGcIvBf66|9|:SO/Z:');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 * 
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
