<?php

/*

type: layout

name: Default

description: Default menu

*/

  //$template_file = false; ?>
  <?
  $mt =  menu_tree($menu_filter);
  if($mt != false){
			print ($mt);
		} else {
			mw_notif("There are no items in the menu <b>".$params['menu-name']. '</b>');
			//pages_tree($params);
			//print "There are no items in the menu <b>".$params['menu-name']. '</b>';
		}
   ?>