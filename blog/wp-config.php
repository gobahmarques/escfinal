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
define('DB_NAME', 'blog');

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
define('AUTH_KEY',         'TDuajcg!rQ52v0|AzS<SieK{l&&|_8/gQENV`i_yPf_n`)FcE<mff3=E(}GZHSa$');
define('SECURE_AUTH_KEY',  'nxhc[oGk$yR[9-pEkhiTmG_+mW&=Mp*RuyaEhU5k>+6JL?Ci@Z+[g6ty$RDb{STi');
define('LOGGED_IN_KEY',    'JoV8<{hgX!{7m41w1UyC.vvE,c2rk:k.4GE|JjA$_1Gdm}&l4+S6E.nttfC_<JC:');
define('NONCE_KEY',        'f$&-[`r6v+F>st/74X~.Jl7eKOIe:?v1tK:)j Ok}tPK F7|R,_xW)9$Fs]VG4t-');
define('AUTH_SALT',        'y`k^,u!yJxaZJhzb{1}L(3B 6Lar D[Z-D{~rP3lou%Zjtw];vMb[?(,7#zL*2-%');
define('SECURE_AUTH_SALT', '0r+H|S>Z|G$faq-W2^P*~y7+H*2 UWq&PmS99wULk3ICB2,KK_9xV6;0vS,:8_*,');
define('LOGGED_IN_SALT',   'eK~IGdfYZ=4xL: R4W,?g* k8!2(6eik?twKybdMz#S:s].mJF(F%qNSSmLIq/1n');
define('NONCE_SALT',       'PoD)4Bj]RWLC$fDw);fA>#ew|poUDVJG|Mzu5S5=~BhiSU>q28f`>4N;Poc ubC{');

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
