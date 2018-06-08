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
define('DB_NAME', 's26_database');

/** Имя пользователя MySQL */
define('DB_USER', 's26_s26');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '1326FkT1326');

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
define('AUTH_KEY',         'Hm?i^I!{X=MEl?Du4/L#4-u,eve-+BB5L3_xQ?Vf*KGXG(9y@))TqOYVZ826zYF/');
define('SECURE_AUTH_KEY',  'Am9T(W}gf?}6cK|vqvv`SSeh*u5^cWelBekQz5qf]>^!)^%d.8E0&BJOrT9$vJ|Y');
define('LOGGED_IN_KEY',    'ya,e$$mv6@)Xx7K+*)C}Ts~yP8/zJK*ssEfQa%?*lg=A19O#(-/.oMFy~b#eYsvM');
define('NONCE_KEY',        'Hli9bQFISwjjO5(caVVippE7a4{h(DORpi$twO^7J@~tZP_hW|@b[0gRWp|,Zjt8');
define('AUTH_SALT',        ':>1{7|^cHB?!k6r^]3W%=i,aWYS_*UgSC_p.fv/)`@UB/N,eo>Hh}rV`{)J]$W,)');
define('SECURE_AUTH_SALT', '+#o1j$c!Bm(GbeZasD3p|@VqXy.A?QvU!GSdL(|ADsT%Pw_m^OToBz_w0cRe>,P)');
define('LOGGED_IN_SALT',   'k]uHBB!:FaX{<V*orY=/YBg;T}0<3}6K7TL<=WCc=}{n=:]DKP${9N-K{6xok(<1');
define('NONCE_SALT',       'JC4T3!{4xZc29>4|1DlFyMm3yq,WW_L%w^BMLC vu/l?6UUW0f!vXB?lYHMrlb)Q');

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
