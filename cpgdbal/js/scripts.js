/*************************
  Coppermine Photo Gallery
  ************************
  Copyright (c) 2003-2008 Dev Team
  v1.1 originaly written by Gregory DEMAR

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License version 3
  as published by the Free Software Foundation.

  ********************************************
  Coppermine version: 1.5.0
  $HeadURL: https://coppermine.svn.sourceforge.net/svnroot/coppermine/trunk/cpg1.5.x/js/scripts.js $
  $Revision: 5163 $
  $LastChangedBy: gaugau $
  $Date: 2008-10-22 22:02:07 +0530 (Wed, 22 Oct 2008) $
**********************************************/

function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}

function writeCookie(name, data, noDays){
  var cookieStr = name + "="+ data
  if (writeCookie.arguments.length > 2){
    cookieStr += "; expires=" + getCookieExpireDate(noDays)
    }
  document.cookie = cookieStr
}

function readCookie(cookieName){
   var searchName = cookieName + "="
   var cookies = document.cookie
   var start = cookies.indexOf(cookieName)
   if (start == -1){ // cookie not found
     return ""
     }
   start += searchName.length //start of the cookie data
   var end = cookies.indexOf(";", start)
   if (end == -1){
     end = cookies.length
     }
   return cookies.substring(start, end)
}

function blocking(nr, cookie, vis_state)
{
        if (document.layers)
        {
                current = (document.layers[nr].display == 'none') ? vis_state : 'none';
                if (cookie != '')
                        writeCookie(nr, current);
                document.layers[nr].display = current;
        }
        else if (document.all)
        {
                current = (document.all[nr].style.display == 'none') ? vis_state : 'none';
                if (cookie != '')
                        writeCookie(nr, current);
                document.all[nr].style.display = current;
        }
        else if (document.getElementById)
        {
                display = (document.getElementById(nr).style.display == 'none') ? vis_state : 'none';
                if (cookie != '')
                        writeCookie(nr, display);
                document.getElementById(nr).style.display = display;
        }
}


function adjust_popup()
{
        var w, h, fixedW, fixedH, diffW, diffH;
        if (document.documentElement && document.body.clientHeight==0) {     // Catches IE6 and FF in DOCMODE
                fixedW = document.documentElement.clientWidth;
                fixedH = document.documentElement.clientHeight;
                window.resizeTo(fixedW, fixedH);
                diffW = fixedW - document.documentElement.clientWidth;
                diffH = fixedH - document.documentElement.clientHeight;
                w = fixedW + diffW + 16; // Vert Scrollbar Always On in DOCMODE.
                h = fixedH + diffH;
                if (w >= screen.availWidth) h += 16;
        } else if (document.all) {
                fixedW = document.body.clientWidth;
                fixedH = document.body.clientHeight;
                window.resizeTo(fixedW, fixedH);
                diffW = fixedW - document.body.clientWidth;
                diffH = fixedH - document.body.clientHeight;
                w = fixedW + diffW;
                h = fixedH + diffH;
                if (h >= screen.availHeight) w += 16;
                if (w >= screen.availWidth)  h += 16;
        } else {
                fixedW = window.innerWidth;
                fixedH = window.innerHeight;
                window.resizeTo(fixedW, fixedH);
                diffW = fixedW - window.innerWidth;
                diffH = fixedH - window.innerHeight;
                w = fixedW + diffW;
                h = fixedH + diffH;
                if (w >= screen.availWidth)  h += 16;
                if (h >= screen.availHeight) w += 16;
        }
        w = Math.min(w,screen.availWidth);
        h = Math.min(h,screen.availHeight);
        window.resizeTo(w,h);
        window.moveTo((screen.availWidth-w)/2, (screen.availHeight-h)/2);
}

function show_section(e) {
    if (document.getElementById(e).style.display == 'none') {
        document.getElementById(e).style.display = 'block';
    } else {
        document.getElementById(e).style.display = 'none';
    }
}


function expand()
{
        var Nodes = document.getElementsByTagName("table")
        var max = Nodes.length
        for(var i = 0;i < max;i++) {
                var nodeObj = Nodes.item(i)
                var str = nodeObj.id
                if (str.match("section")) {
                        nodeObj.style.display = 'block';
                }
        }
}

function hideall()
{
        var Nodes = document.getElementsByTagName("table")
        var max = Nodes.length
        for(var i = 0;i < max;i++) {
                var nodeObj = Nodes.item(i)
                var str = nodeObj.id
                if (str.match("section")) {
                        nodeObj.style.display = 'none';
                }
        }
}

function redirect(url)
{
        window.location=url;
}

// Function used to not allow user to enter default username as username for comment
function notDefaultUsername(f, defaultUsername, defaultUsernameMessage)
{
    // If username for comment is default username then display error message and return false
    if (f.msg_author.value == defaultUsername) {
        alert(defaultUsernameMessage);
        return false;
    }

    // By default return true
    return true;
}

function HighlightAll(theField) {
	var tempval=eval("document."+theField);
	tempval.focus();
	tempval.select();
}

var onloads = new Array()

function addonload(func){
        onloads.push(func);
}

function runonloads(){
        for (func in onloads) eval(onloads[func]);
}

window.onload = runonloads;
