<?php
/*
 * Generated configuration file
 * Generated by: phpMyAdmin 4.9.5 setup script
 * Date: Wed, 24 Jun 2020 15:01:11 +0000
 */

/* Servers configuration */
$i = 0;

/* Server: GodseyeDB [1] */
$i++;
$cfg['Servers'][$i]['verbose'] = 'GodseyeDB';
$cfg['Servers'][$i]['host'] = '18.223.103.121';
$cfg['Servers'][$i]['port'] = '';
$cfg['Servers'][$i]['socket'] = '';
$cfg['Servers'][$i]['auth_type'] = 'cookie';
$cfg['Servers'][$i]['user'] = 'admin';
$cfg['Servers'][$i]['password'] = 'dev.io12345';
$cfg['Servers'][$i]['ssl'] = true;

/* Hide DBs*/
$cfg['Servers'][$i]['hide_db'] = '^(information_schema|mysql|employee|performance_schema|sys)$';

/* End of servers configuration */


$cfg['ThemeDefault'] = 'fallen';



$cfg['blowfish_secret'] = 'Z.l+4"gF?+QWq3%!\\g^5{S%B/i;|ax4e';
$cfg['VersionCheck'] = false;
$cfg['FontSize'] = '100%';
$cfg['UploadDir'] = '';
$cfg['SaveDir'] = '';
$cfg['TitleDefault'] = 'Godseye Admin';
$cfg['TitleTable'] = 'Godseye Admin - Table';
$cfg['TitleDatabase'] = 'Godseye Admin - DB';
$cfg['TitleServer'] = 'Godseye Admin - Server';
$cfg['ShowCreateDb'] = false;
$cfg['ShowStats'] = false;
$cfg['ShowServerInfo'] = false;
$cfg['ShowChgPassword'] = false;
$cfg['DefaultTransformations']['Substring'] = array (
  0 => '0',
  1 => 'all',
  2 => '…',
);
$cfg['DefaultTransformations']['External'] = array (
  0 => '0',
  1 => '-f /dev/null -i -wrap -q',
  2 => '1',
  3 => '1',
);
$cfg['DefaultTransformations']['PreApPend'] = array (
);
$cfg['DefaultTransformations']['DateFormat'] = array (
  0 => '0',
  1 => 'local',
);
$cfg['DefaultTransformations']['Inline'] = array (
  0 => '100',
  1 => '100',
);
$cfg['DefaultTransformations']['TextImageLink'] = array (
  0 => '100',
  1 => '50',
);
$cfg['DefaultTransformations']['TextLink'] = array (
);
$cfg['HideStructureActions'] = false;
$cfg['ShowColumnComments'] = false;
$cfg['DefaultLang'] = 'en';
$cfg['ServerDefault'] = 1;

$cfg['ShowSQL'] = false;


$cfg['NavigationTreeShowViews'] = false;

$cfg['NavigationTreeShowProcedures'] = false;

?>