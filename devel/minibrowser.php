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
define('MINIBROWSER_PHP', true);
define('SEARCHNEW_PHP', true);

require('include/init.inc.php');

// set/define some vars
$scriptfilename = 'minibrowser.php';
if (isset($_REQUEST['folder'])) {$folder = rawurldecode($_REQUEST['folder']);} else { $folder = '';}
if (isset($_REQUEST['startfolder'])) {$startfolder = rawurldecode($_REQUEST['startfolder']);} else { $startfolder = '';}
//if ($folder == '' && $startfolder != '' && is_dir($folder) != false) {
if ($folder == '' && $startfolder != '') {
    $folder = $startfolder;
}
if (isset($_REQUEST['parentform'])) {$parentform = rawurldecode($_REQUEST['parentform']);} else { $parentform = '';}
if (isset($_REQUEST['formelementname'])) {$formelementname = rawurldecode($_REQUEST['formelementname']);} else { $formelementname = '';}
if (isset($_REQUEST['hidefolders'])) {
    $hidefolders = rawurldecode($_REQUEST['hidefolders']);
    $hiddenfolders = explode(',', $hidefolders);
}
if (isset($_REQUEST['linktarget'])) {$linktarget = rawurldecode($_REQUEST['linktarget']);} else { $linktarget = '';}
if (isset($_REQUEST['searchnew_php'])) {$searchnew_php = rawurldecode($_REQUEST['searchnew_php']);} else { $searchnew_php = '0';}
//print $folder.'<hr>';
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title><?php echo $CONFIG['gallery_name'] ?>: <?php echo $lang_fullsize_popup['click_to_close'];
    ?></title>
<meta http-equiv="content-type" content="text/html; charset=<?php echo $CONFIG['charset'] == 'language file' ? $lang_charset : $CONFIG['charset'] ?>" />
<link rel="stylesheet" href="<?php echo $THEME_DIR ?>style.css" />
<script type="text/javascript" src="scripts.js"></script>
<?php
//if ($parentform != '' && $formelementname != '') { // print the javascript bit that updates the parent element --- start
?>
<script type="text/javascript">
function updateParent() {
    opener.document.<?php print $parentform; ?>.<?php print $formelementname; ?>.value = document.childform.cf2.value;
    //window.self.close();
    return false;
}
<?php
if (!$_REQUEST['no_popup']) {
?>
adjust_popup();
<?php
}
?>
</script>
<?php
//} // print the javascript bit that updates the parent element --- end
?>
</head>
<body scroll="auto" marginwidth="0" marginheight="0">

<form name="childform" id="childform" method="get" action="<?php print $_SERVER['PHP_SELF']; ?>" onsubmit="return updateParent();">

<?php
//print $_SERVER["REQUEST_URI"];
starttable(-2,$lang_minibrowser_php['select_directory'],2);
if (!GALLERY_ADMIN_MODE) { cpg_die(ERROR, $lang_errors['access_denied'], __FILE__, __LINE__); }


$base_folder = rtrim(cpg_get_webroot_path(), '/').'/';

//print $base_folder.'<br>';

$dir = opendir($base_folder.$folder);
// read the folder/file structure we're currently in and put it into an array
$dirCounter = 0;
while($file = readdir($dir)){
    if(is_dir($base_folder.$folder.$file)) {
        if (is_array($hiddenfolders)) {
            if (in_array($file,$hiddenfolders) == false) {
                $foldername[] = $file;
                $dirCounter++;
            }
        } else {
            $foldername[] = $file;
            $dirCounter++;
        }
    } else {
        $filename[] = $file;
    }
}
closedir($dir);

// print the folder we're in
print '<tr>';
print '<td class="tableh2">';
print '<input type="radio" name="cf1" value="'.$folder.rtrim($key, '/').'/" class="radio"  checked="checked" />';
print '</td>';
print '<td class="tableh2">';
print '<input type="text" name="cf2" size="50" value="/'.ltrim($folder, '/').'" disabled="disabled" class="tableh2_compact">&nbsp;';
if ($linktarget != '') {
    print '<a href="'.$linktarget.'?startdir='.rtrim(str_replace($_REQUEST['limitfolder'], '',$folder), '/').'" class="admin_menu" target="_parent">'.$lang_minibrowser_php['submit'].'</a>';
} else {
    print '<input type="submit" name="submit" value="'.$lang_minibrowser_php['submit'].'" class="button" />';
}
print '</a>';
print '</td>';
print "</tr>\n";


// display the "up" link if we're not already in the root folder
if (($_REQUEST['folder'] != '' || $_REQUEST['startfolder'] != '') && ($folder != '' && $folder!= '/')) {
    $uplink = rtrim($folder, '/');
    $remove = strrchr ($uplink,'/');
    //print 'uplink:'.$uplink.'<br>';
    //print 'remove:'.$remove.'<br>';
    if ($remove != '') {
        $uplink = str_replace($remove, '', $uplink).'/';
    } else {
        $uplink = '';
    }
    //print 'uplink:'.$uplink.'<br>';
    if ($_REQUEST['limitfolder'] != $folder) {
        print '<tr>';
        print '<td class="tableb">';
        print '&nbsp;';
        print '</td>';
        print '<td class="tableb">';
        print '<img src="images/spacer.gif" width="16" height="16" border="0" alt="" align="left">';
        print '<a href="'.$_SERVER['PHP_SELF'].'?folder='.rawurlencode($uplink).'&parentform='.rawurlencode($parentform).'&formelementname='.rawurlencode($formelementname).'&no_popup='.$_REQUEST['no_popup'].'&limitfolder='.$_REQUEST['limitfolder'].'&hidefolders='.$_REQUEST['hidefolders'].'&linktarget='.$_REQUEST['linktarget'].'">';
        print '.. '.$lang_minibrowser_php['up'];
        print '</a>';
        print '</td>';
        print "</tr>\n";
    }
}


if (is_array($foldername)) {
    natcasesort ($foldername);
    foreach($foldername as $key) {
        if ($key != '.' && $key != '..') {
            print '<tr>';
            print '<td class="tableb">';
            print '<input type="radio" name="cf1" value="'.$folder.rtrim($key, '/').'/" class="radio" onclick="document.childform.cf2.value=\''.$folder.$key.'\'" />';
            print '</td>';
            print '<td class="tableb">';
            print '<a href="'.$_SERVER['PHP_SELF'].'?folder='.rawurlencode('/'.ltrim($folder, '/').$key.'/').'&parentform='.rawurlencode($parentform).'&formelementname='.rawurlencode($formelementname).'&no_popup='.$_REQUEST['no_popup'].'&limitfolder='.$_REQUEST['limitfolder'].'&hidefolders='.$_REQUEST['hidefolders'].'&linktarget='.$_REQUEST['linktarget'].'">';
            print '<img src="images/folder.gif" width="16" height="16" border="0" alt="" title="folder" />';
            print $key;
            print '</a>';
            print '</td>';
            print "</tr>\n";
        }
    }
}

if (is_array($filename)) {
    natcasesort ($filename);
    foreach($filename as $key) {
        print '<tr>';
        print '<td class="tableb">';
        print '&nbsp;';
        print '</td>';
        print '<td class="tableb">';
        print '<img src="images/spacer.gif" width="10" height="15" border="0" alt="" align="left">';
        print $key;
        print '</td>';
        print "</tr>\n";
    }
}
print '                        <input type="hidden" name="parentform" value="'.$parentform.'">'."\n";
print '                        <input type="hidden" name="formelementname" value="'.$formelementname.'">'."\n";
if ($searchnew_php == 1 && $dirCounter == 0) {
print '<tr>';
print '<td class="tablef" colspan="2">';
print $lang_search_new_php['no_folders'];
print '</td>';
print '</tr>';
}
endtable();
// print '<div align="center"><a href="#" class="admin_menu" onclick="window.close();">'.$lang_minibrowser_php['close'].'</a></div>';
?>
</form>
</body>
</html>
<?php


?>