<?php
/**
 * Typecho Blog Platform
 *
 * @copyright  Copyright (c) 2008 Typecho team (http://www.typecho.org)
 * @license    GNU General Public License 2.0
 * @version    $Id$
 */

/** �����Ŀ¼ */
define('__TYPECHO_ROOT_DIR__', dirname(__FILE__));

/** ������Ŀ¼(���·��) */
define('__TYPECHO_PLUGIN_DIR__', '/usr/plugins');

/** ����ģ��Ŀ¼(���·��) */
define('__TYPECHO_THEME_DIR__', '/usr/themes');

/** ��̨·��(���·��) */
define('__TYPECHO_ADMIN_DIR__', '/admin/');

/** ���ð���·�� */
@set_include_path(get_include_path() . PATH_SEPARATOR .
__TYPECHO_ROOT_DIR__ . '/var' . PATH_SEPARATOR .
__TYPECHO_ROOT_DIR__ . __TYPECHO_PLUGIN_DIR__);

/** ����API֧�� */
require_once 'Typecho/Common.php';

/** ����Response֧�� */
require_once 'Typecho/Response.php';

/** ��������֧�� */
require_once 'Typecho/Config.php';

/** �����쳣֧�� */
require_once 'Typecho/Exception.php';

/** ������֧�� */
require_once 'Typecho/Plugin.php';

/** ������ʻ�֧�� */
require_once 'Typecho/I18n.php';

/** �������ݿ�֧�� */
require_once 'Typecho/Db.php';

/** ����·����֧�� */
require_once 'Typecho/Router.php';

/** �����ʼ�� */
Typecho_Common::init();

/** �������ݿ���� */
$db = new Typecho_Db('Pdo_Mysql', 'typecho_');
$db->addServer(array (
  'host' => 'localhost',
  'user' => 'root',
  'password' => 's67A0fUZzQmn',
  'charset' => 'utf8',
  'port' => '3306',
  'database' => 'phpwind',
), Typecho_Db::READ | Typecho_Db::WRITE);
Typecho_Db::set($db);
