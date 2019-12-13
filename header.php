<?php
if (is_page('inicio')){
include(TEMPLATEPATH.'/piezas/nav/uno.php');
}
elseif (is_page('')){
include(TEMPLATEPATH.'/piezas/nav/dos.php');
}
else {
include(TEMPLATEPATH.'/piezas/nav/dos.php');
}
?>
<!-- /.navbar --> 

