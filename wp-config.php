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
define( 'DB_NAME', 'web-studio' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'root' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         '/);Aq.^`gH{iSf*]e{7X:D%oV{MoX6Tt2V%Gx@~u:*`COd,8l[&;6F-eh:N#JfD-' );
define( 'SECURE_AUTH_KEY',  '[-5y3n0>F,8u9!Uw`S{pQnhbD>b*n-+)jIb%`ka-gJ_xnRymVaWMg$Fxf7U@pur*' );
define( 'LOGGED_IN_KEY',    'x?yI(o7r?f6}#eKB48[<BOx 1nyKR]l;5]tuK+K~zw(/p*N}:XHo Z:lnlOgcaqv' );
define( 'NONCE_KEY',        'zg..Ql|gLx{S:PEyXSk0PQ[7fLLpe*S~5|i(;P(p{CIOYo+Y7Xu%/4,b&|5YYP(h' );
define( 'AUTH_SALT',        'sO?7d]!=K&`k@aa2fx+j|^8*lpJLpS4Mp^1}G%Li7~w<1pY`0E=|U6rnd/Uv}{(w' );
define( 'SECURE_AUTH_SALT', '}o,0;&@vT>mHC[Sz%eWqMD9(,!:?kIUWN)7NC0%%]Rxn5JY|*FAZQ^!=>(Ux/2a0' );
define( 'LOGGED_IN_SALT',   'r(u.cD*cq)vrqU&>1TEBsE85|o1^+aenG/4;R[7+O};x(XENQo:m~ZkND%9!g8ng' );
define( 'NONCE_SALT',       'kmq(%F_hTF9]a&D]EvwuCDEJdb83k3kR8fjUKwCU<r@J3?tlTY,,:X>S<KRy/Qgu' );

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

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
