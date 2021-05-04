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
define( 'DB_NAME', 'fitnes' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'root' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'MTQ#xEL_9U*)vOFUXF?8-G/EeC35GKWqGUTw27&>~l.gKx7=I:b;DIAC`z5@8U I' );
define( 'SECURE_AUTH_KEY',  'yi!>#kOolID]klXv+11&sU^T5WY6Eyvq M&?MX4,`gvpVL39^T-jX.*Fie#Z<Koo' );
define( 'LOGGED_IN_KEY',    '~8TTt]Z7YT:<XG,l~2M[wU[vWtG^[##@=-.=zng E*ojkSjI82$}Qy?/I6:S1BTZ' );
define( 'NONCE_KEY',        'Xpmx5qoQH[QaJB~c5N9+KpkV1NV_V2n0&0u(!wG4>Xgq]0SY1wO@:x7n,H$oI2Cp' );
define( 'AUTH_SALT',        'nVCu=NJ;XzPzXRfFJ.|NVI~4h1gNz,y>pPQ!,=Aqs,YU.|5d)*6 j4d-Jt8*`EQ4' );
define( 'SECURE_AUTH_SALT', 'Lv:Kd{`Em~ka78`.m8LqYv8T}N8GLBM!83B&0C7V-5H.X)NI<aTKj?~2<5ds#|dD' );
define( 'LOGGED_IN_SALT',   '5,xt?Hma&[8OkkpfLgR<gXMQ6ge><]x`Y(iHBVxpe@BqntRWI9H?C(N`3S(kJiI|' );
define( 'NONCE_SALT',       '&/@|<=Abe|QX7qveOdCU^7h{*A_[cK_6@[uM<hz%G[Ru<p8:N7KU|m}%]2pRw#hl' );

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
