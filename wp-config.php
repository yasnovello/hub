<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'hub2018');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'o3&]AYBtny KY?t|0#3}Yz:-)t4sX;cyf{nw?IZSO5}uQy*LM{P2=vGb1v*>3GB>');
define('SECURE_AUTH_KEY',  'n#:UPJaTWZTu`Vn`mUI9w(#PMZ:G484V$>1B}Z)H pEycMAqp`njZ~jD7 s_nJH[');
define('LOGGED_IN_KEY',    'R1Q~AV{T:*jXJ0bN89DZ2qI1KS5]SE29+%/jH=Lh5r=Ds(US{e]obt!6DV=x0L5p');
define('NONCE_KEY',        'F^}M;%,bh$fED 5ThOY^D0uAZG3$|.5v]&XRhETPu;M30t,=#,pwwF>/}eI7(]u?');
define('AUTH_SALT',        '=q<KZrRGM:7*Mp$2e~iNUF4sMWc*dOA`Zg6cA--#oxhLaWI=(?9(H~pWl,5ViV)v');
define('SECURE_AUTH_SALT', 'DEKHRlV!,h%X4.k$@|%PUuJP+3iCovaKie:p0{{79{<Vni%dWdztDLSJ@wMG?bWv');
define('LOGGED_IN_SALT',   'MSFQaQ:k<MQJg?>J5(|Jpxo]]NJv}.D?SV:8y<Aa&C*,RSZB+RJY7Qb3HQ@I]m3?');
define('NONCE_SALT',       '/nN&k6t:O2DCo.Tb=l}8{57qs}L%)qGYYVhO%LVIm`LU)zAM@XGMd.IXr4uWOVTk');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
