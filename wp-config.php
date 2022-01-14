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
define( 'DB_NAME', 'auto_bd' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
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
define( 'AUTH_KEY',         'kYLnt8{{+4rv^*|~?0~!YtNe^y>oCarJZa#AgUUxah?i8 =x0l}~<-%;WLto$Cmj' );
define( 'SECURE_AUTH_KEY',  'd_Zm~)V!INOh;9#nP|qc%RIZOToOaP%mhO~$B]P6k)|biE]I,|t-ik>IMzd79*x=' );
define( 'LOGGED_IN_KEY',    'l~]r5)8-$dtogZ`L764J<UH^i7Y/)Jf]) D%<A*q$Q(fa{T-Q0$6(qFyHs%fYbAt' );
define( 'NONCE_KEY',        'bfh;p8TH8K#TaM@O=-xL`W[u&r`Y(_lIM;ikg/L65TBbkqXP&Ajxx5)03~zej7b7' );
define( 'AUTH_SALT',        '9h[.-eE+}W($VuAmq(O0,}JsNV&@tsC:s7_cuoIo}35n$/bd[ %:*q_Z:7!SKPyj' );
define( 'SECURE_AUTH_SALT', 'MeZ5 :0Sen2@:GJEj??F;/@Awl/2i4WSVxSt%D(7zQ.Wxne:)3^6m3BzZ-t5)nr$' );
define( 'LOGGED_IN_SALT',   'Py>mc}YkP?UtY*__=dn* K)%V3|[PI2CMWRxTsK2<JKu,^L0FBb yfz#p}jV6T=l' );
define( 'NONCE_SALT',       'n}wWN0Ml4EgFZ~~#TW`i4:NbOPZi?gn+T9%K7Z(xG*X7/V;NQ=hru=jYLx#%;{|0' );

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
