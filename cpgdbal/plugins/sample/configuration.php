<?php
/*************************
  Coppermine Photo Gallery
  ************************
  Copyright (c) 2003-2008 Dev Team
  v1.1 originally written by Gregory DEMAR

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License version 3
  as published by the Free Software Foundation.

  ********************************************
  Coppermine version: 1.5.0
  $HeadURL$
  $Revision: 4254 $
  $LastChangedBy: gaugau $
  $Date: 2008-02-09 13:53:16 +0530 (Sat, 09 Feb 2008) $
**********************************************/

$name = $lang_plugin_php['sample_config_name'];
$description = $lang_plugin_php['sample_config_description'];
$author = 'Coppermine Development Team';
$version = '1.2';
/*
 * $extra_info is displayed with the title of a plugin that IS installed and
 * can be used to present extra information.  In this case I show a complex
 * example that forms a button the user can click.
 */
$extra_info = <<<EOT
    <table border="0" cellspacing="0" cellpadding="0">
    <tr>
        <td class="admin_menu"><a href="docs/index.htm#plugin" title="{$lang_plugin_php['sample_plugin_documentation']}">{$lang_plugin_php['sample_plugin_documentation']}</a></td>
    </tr>
    </table>
EOT;
/*
 * $install_info is displayed with the title of a plugin that is NOT installed and
 * can be used to present extra information. In this case I show a complex
 * example that forms a button the user can click.
 */
$install_info=<<<EOT
    <table border="0" cellspacing="0" cellpadding="0">
    <tr>
        <td class="admin_menu"><a href="http://coppermine-gallery.net/forum/index.php?board=97.0" title="{$lang_plugin_php['sample_plugin_support']}">{$lang_plugin_php['sample_plugin_support']}</a></td>
    </tr>
    </table>
EOT;
?>