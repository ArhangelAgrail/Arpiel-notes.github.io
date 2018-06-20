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
define('DB_NAME', 'wordpress');

/** Имя пользователя MySQL */
define('DB_USER', 'wordpress');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'miFLd7vS6u32yD7X');

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
define('AUTH_KEY',         'vmYqu-uh;}Q])| J><sMK$wK61:P*QYaM(w><#rAuwx,cRC_8/~w.XbbB/nZ4qkT');
define('SECURE_AUTH_KEY',  'nH3|6MfwaqFRZFJDrrF9Y&cU5p`^VTHto3iUa:0mnSYoa[j3o+4la`8T$Ar9:PUI');
define('LOGGED_IN_KEY',    'Aje-1:wmR5^sb@SDem/Zn!no%]=j%-)0m,J.4%@w;X*w2#=zaNk36-ylAh0H+gV/');
define('NONCE_KEY',        '_IQ{Bu#;<CNsGJ 0H)IQ^kRTZBjBfS_b`l/B4spUW!;O*E3GwmW9E:LI`wnbC#;r');
define('AUTH_SALT',        'FX_bH1<uB+qdrZ;`nGRDYv_|6Wj<xQg<h&t8;/oLRR6CRa*&!i;&~G9I b^g?kd9');
define('SECURE_AUTH_SALT', 'SKatgY*&,0)N8*{p2|FKUx_?Uh`yrcKVo<nA4bk{jT<Icxdkly_1]q0EvPcJkGfY');
define('LOGGED_IN_SALT',   'lm%ysuJCZ/M;O+,?SI~H@;1Z#F6.`^yWn/B<{0;<K&]IW4!ZUxxC#`CaWhDFcyzL');
define('NONCE_SALT',       '2_/qblrXVN-fuYKHK?}XEo7(#+g@3t}3Ld40RFK*RO7zL*.%e,eV*FGXKY-lbe8^');

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
