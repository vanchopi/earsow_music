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
define('DB_NAME', 'wp1');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'WV9!Df~L|~Oi1@!Z/o-]8pEY.u.xB:N?O;|g3Lzbg3CoMrg_pm[_3$YFf9#0+}?Q');
define('SECURE_AUTH_KEY',  ')RerNRyz k?o)7-1x4Tn~|)]$/G?Ok[#Y1~A76KkfZ]w0.Cxr|S|y;D935~22FHb');
define('LOGGED_IN_KEY',    ';c/<gsO!s`Ui3)5&JyNw97oOUY<,W[SdWrJp=DRFw&Y#{gM-0>LwUyaQ*-l&L4;<');
define('NONCE_KEY',        ' lx|IX#@d>Vms=<t2;>Ft6`7]L_v0]BSx>v<J_#!k2#VB}bh;haX}DNXh-toS Y^');
define('AUTH_SALT',        'yIIUZ>P7>j~.YX#:[M.FCeZEin)}~,+>]@-^vgso+GgF)AVkSi;9$Vvdj@O.8,dn');
define('SECURE_AUTH_SALT', '=*<pHu7,5Rlew~CpLbQbe)u/7OXr1}#ail^o:(*TaO0e38}St&OV<`Y$g!$uz1/w');
define('LOGGED_IN_SALT',   'UB<)=q}xZMVY=4Em)ck1uR<7[Q /Ej79]jwdm!U=`8ih}_eRPFd$A.rJ,:@E1?by');
define('NONCE_SALT',       'vh=dqy|OYN^`e>+XMLya0Syw?*escMsuCCH/H2NUk4L#/3:!rJU0/SH7zh.CP*2e');

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
