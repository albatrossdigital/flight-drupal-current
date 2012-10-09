<?php

/**
 * @file
 * This file is empty by default because the base theme chain (Alpha & Omega) provides
 * all the basic functionality. However, in case you wish to customize the output that Drupal
 * generates through Alpha & Omega this file is a good place to do so.
 * 
 * Alpha comes with a neat solution for keeping this file as clean as possible while the code
 * for your subtheme grows. Please read the README.txt in the /preprocess and /process subfolders
 * for more information on this topic.
 */
 
 
function reach_core_return_date($time) {
  $format = '\<\s\p\a\n\ \c\l\a\s\s\=\"\d\a\t\e\-\m\o\n\t\h\"\>M\<\/\s\p\a\n\>\<\s\p\a\n\ \c\l\a\s\s\=\"\d\a\t\e\-\d\a\y\"\>j\<\/\s\p\a\n\>\<\s\p\a\n\ \c\l\a\s\s\=\"\d\a\t\e\-\y\e\a\r\"\>Y\<\/\s\p\a\n\>';
  return format_date($time, 'custom', $format);
}
