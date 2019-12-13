<?php
/**
* Breadcrumb
*/
function breadcrumb() { 
if(!(is_single())){
?>  
 <ol class="breadcrumb plomo wow fadeInRight">
  <li class="breadcrumb-item"><a href="<?php bloginfo('url')?>">Inicio</a> </li>
  <li class="breadcrumb-item active"><a><?php the_title(); ?></a> </li>
 </ol>

<?php
}
else {
?>
 <ol class="breadcrumb plomo wow fadeInRight">
  <li class="breadcrumb-item"><a href="<?php bloginfo('url')?>">Inicio</a></li>
  <li class="breadcrumb-item active"><a><?php the_title(); ?></a> 
 </ol>
<?php
}
}
/**Fin Seccion*/
?>