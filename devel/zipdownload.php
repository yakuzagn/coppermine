<?php
// ------------------------------------------------------------------------- //
// Coppermine Photo Gallery 1.4.0                                            //
// ------------------------------------------------------------------------- //
// Copyright (C) 2002-2004 Gregory DEMAR                                     //
// http://www.chezgreg.net/coppermine/                                       //
// ------------------------------------------------------------------------- //
// Updated by the Coppermine Dev Team                                        //
// see /docs/credits.html for details                                        //
// ------------------------------------------------------------------------- //
// This program is free software; you can redistribute it and/or modify      //
// it under the terms of the GNU General Public License as published by      //
// the Free Software Foundation; either version 2 of the License, or         //
// (at your option) any later version.                                       //
// ------------------------------------------------------------------------- //
// $Id$
// ------------------------------------------------------------------------- //

define('IN_COPPERMINE', true);
define('THUMBNAILS_PHP', true);
define('INDEX_PHP', true);
require('include/init.inc.php');
include ( 'include/archive.php');

if ($CONFIG['enable_zipdownload'] != 1) {
//someone has entered the url manually, while the admin has disabled zipdownload
pageheader($lang_error);
starttable('-2', $lang_error);
print <<<EOT
<tr>
        <td align="center" class="tableb">
      {$lang_errors['perm_denied']}
      </td>
</tr>
EOT;
endtable();
pagefooter();
ob_end_flush();
} else {
// zipdownload allowed, go ahead...

$filelist= array();

if (count($FAVPICS)>0){
        $favs = implode(",",$FAVPICS);

        $select_columns = 'filepath,filename';

        $result = cpg_db_query("SELECT $select_columns FROM {$CONFIG['TABLE_PICTURES']} WHERE approved = 'YES'AND pid IN ($favs)");
        $rowset = cpg_db_fetch_rowset($result);
        foreach ($rowset as $key => $row){

                $filelist[] = $rowset[$key]['filepath'].$rowset[$key]['filename'];

        }
}

$flags['storepath'] = 0;
$cwd = "./{$CONFIG['fullpath']}";
$cwd = substr($cwd, 0, -1);

$zip = new zipfile($cwd,$flags);

$zip->addfiles($filelist);

$zip->filedownload('pictures.zip');
}
?>