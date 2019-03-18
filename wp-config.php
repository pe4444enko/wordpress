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
define('AUTH_KEY',         '6?Lzwq+e$-}9rER1!UpN73wk53uVEMgu)ZB#aNZNf3=R%~B])N%~zY|)m[r>n[VO');
define('SECURE_AUTH_KEY',  '!MVw;Si3uI@s?wRCEM!(O$W7u<PVPb#aXLUPKd>z[ D6(OtMaX`kAKZ41ynS|PP<');
define('LOGGED_IN_KEY',    'n2TRU=(P7)p,lTfxV7DJ}C]Zlqk=I?h/Fn/E/xXxHB}Cz}7d9ouX!0m*C*+QAZN-');
define('NONCE_KEY',        ')y/M=rD~Cq7Y`3c b,qAiLCV4lTsw{hA{}b8/O+Z&fn@<qL_~C%d55bwxN{H0XT`');
define('AUTH_SALT',        ' 0b(^hg6t&?Y,!W !9N]!rs))au]Y6/xPq4H$[:D0hX* nL-+u.|0ZN,Z,8:%ct=');
define('SECURE_AUTH_SALT', 'Rp#!?)|Tf]=L-#[WmG7;||;vNiCO#~VF=#rV}g1=[`DgIL2a_.=-s4I4*@tGbZxB');
define('LOGGED_IN_SALT',   'LXCVNXisD|:961H/<Du;,v%<EYNLe4K>eUc.k::Air$E8-pAY T9rpo|qB-2kFN]');
define('NONCE_SALT',       '##P<!b=s%`q^B7dgqg?}=xb}G+taq)]e81=r=sf;`.WYh=:m*q<YHhnf[aEot4xQ');

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
