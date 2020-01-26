<?php
//Función que carga las hojas de estilo del tema
function estilo_del_sitio() { 
 
  //Registrando estilos
  wp_register_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css');
  wp_register_style('wpb-google-fonts', 'https://fonts.googleapis.com/css?family=Open+Sans:300,400,700&amp;display=swap');
  wp_register_style('font-awesome', 'https://use.fontawesome.com/releases/v5.0.4/css/all.css');
  wp_register_style('swiper', 'https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/css/swiper.min.css'); 
  wp_register_style('theme-style', get_stylesheet_uri(), '', '1.0', 'all');
  //Cargando estilos
    wp_enqueue_style( 'bootstrap' ); 
    wp_enqueue_style( 'wpb-google-fonts' );
    wp_enqueue_style( 'font-awesome' );
    wp_enqueue_style( 'swiper' );   
    wp_enqueue_style( 'theme-style' );
  
}
//Asociamos la función a la acción wp_enqueue_scripts
add_action('wp_enqueue_scripts', 'estilo_del_sitio');
/**
* Fin Seccion
*/


// Función que carga las jquery u otro script del tema
function my_init() {
// El primer paso es usar wp_register_script para registrar el script que queremos cargar. aquí sí usamos *get_template_directory_uri()*
wp_register_script( '1','https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js');
wp_register_script( '2','https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js');
wp_register_script( '3','https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js');
wp_register_script( '4','https://cdnjs.cloudflare.com/ajax/libs/skrollr/0.6.30/skrollr.min.js');
wp_register_script( '5','https://unpkg.com/scrollreveal@4.0.0-beta.6?ver=5.3.2');
wp_register_script( '6','https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js');
wp_register_script( '7','https://cdnjs.cloudflare.com/ajax/libs/filterizr/1.3.4/jquery.filterizr.min.js');
wp_register_script( '8','https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/js/swiper.min.js');
wp_register_script( '9', get_template_directory_uri() . '/js/animated-headline.js' );
wp_register_script( '10', get_template_directory_uri() . '/js/unisex.js' );

// Una vez que registramos el script debemos colocarlo en la cola de WordPress (orden)
wp_enqueue_script( '1' );
wp_enqueue_script( '2' );
wp_enqueue_script( '3' );
wp_enqueue_script( '4' );
wp_enqueue_script( '5' );
wp_enqueue_script( '6' );
wp_enqueue_script( '7' );
wp_enqueue_script( '8' );
wp_enqueue_script( '9' );
wp_enqueue_script( '10' );
}

// Agregamos la función de los scrip a la lista de cargas de WordPress al poner  wp_enqueue_scripts carga segun norma wordpress si pones wp_head o wp footer cargan el el header o el footer.
add_action('wp_footer', 'my_init');
add_action('wp_enqueue_scripts', 'lyza_force_compress');
function lyza_force_compress()
{
    global $compress_scripts, $concatenate_scripts;
    $compress_scripts = 1;
    $concatenate_scripts = 1;
    define('ENFORCE_GZIP', true);

wp_enqueue_script( '1' );
wp_enqueue_script( '2' );
wp_enqueue_script( '3' );
wp_enqueue_script( '4' );
wp_enqueue_script( '5' );
wp_enqueue_script( '6' );
wp_enqueue_script( '7' );
wp_enqueue_script( '8' );
}

/**
* Fin Seccion
*/



/**
* comprimir wordpress
*


class WP_HTML_Compression
{
    // Settings
    protected $compress_css = true;
    protected $compress_js = true;
    protected $info_comment = true;
    protected $remove_comments = true;

    // Variables
    protected $html;
    public function __construct($html)
    {
     if (!empty($html))
     {
       $this->parseHTML($html);
     }
    }
    public function __toString()
    {
     return $this->html;
    }
    protected function bottomComment($raw, $compressed)
    {
     $raw = strlen($raw);
     $compressed = strlen($compressed);
     
     $savings = ($raw-$compressed) / $raw * 100;
     
     $savings = round($savings, 2);
     
     return '<!--HTML comprimido, tamaño guardado '.$savings.'%. De '.$raw.' bytes, ahora son '.$compressed.' bytes... lindo no?-->';
    }
    protected function minifyHTML($html)
    {
     $pattern = '/<(?<script>script).*?<\/script\s*>|<(?<style>style).*?<\/style\s*>|<!(?<comment>--).*?-->|<(?<tag>[\/\w.:-]*)(?:".*?"|\'.*?\'|[^\'">]+)*>|(?<text>((<[^!\/\w.:-])?[^<]*)+)|/si';
     preg_match_all($pattern, $html, $matches, PREG_SET_ORDER);
     $overriding = false;
     $raw_tag = false;
     // Variable reused for output
     $html = '';
     foreach ($matches as $token)
     {
       $tag = (isset($token['tag'])) ? strtolower($token['tag']) : null;
       
       $content = $token[0];
       
       if (is_null($tag))
       {
         if ( !empty($token['script']) )
         {
           $strip = $this->compress_js;
         }
         else if ( !empty($token['style']) )
         {
           $strip = $this->compress_css;
         }
         else if ($content == '<!--wp-html-compression no compression-->')
         {
           $overriding = !$overriding;
           
           // Don't print the comment
           continue;
         }
         else if ($this->remove_comments)
         {
           if (!$overriding && $raw_tag != 'textarea')
           {
             // Remove any HTML comments, except MSIE conditional comments
             $content = preg_replace('/<!--(?!\s*(?:\[if [^\]]+]|<!|>))(?:(?!-->).)*-->/s', '', $content);
           }
         }
       }
       else
       {
         if ($tag == 'pre' || $tag == 'textarea')
         {
           $raw_tag = $tag;
         }
         else if ($tag == '/pre' || $tag == '/textarea')
         {
           $raw_tag = false;
         }
         else
         {
           if ($raw_tag || $overriding)
           {
             $strip = false;
           }
           else
           {
             $strip = true;
             
             // Remove any empty attributes, except:
             // action, alt, content, src
             $content = preg_replace('/(\s+)(\w++(?<!\baction|\balt|\bcontent|\bsrc)="")/', '$1', $content);
             
             // Remove any space before the end of self-closing XHTML tags
             // JavaScript excluded
             $content = str_replace(' />', '/>', $content);
           }
         }
       }
       
       if ($strip)
       {
         $content = $this->removeWhiteSpace($content);
       }
       
       $html .= $content;
     }
     
     return $html;
    }
     
    public function parseHTML($html)
    {
     $this->html = $this->minifyHTML($html);
     
     if ($this->info_comment)
     {
       $this->html .= "\n" . $this->bottomComment($html, $this->html);
     }
    }
    
    protected function removeWhiteSpace($str)
    {
     $str = str_replace("\t", ' ', $str);
     $str = str_replace("\n",  '', $str);
     $str = str_replace("\r",  '', $str);
     
     while (stristr($str, '  '))
     {
       $str = str_replace('  ', ' ', $str);
     }
     
     return $str;
    }
}

function wp_html_compression_finish($html)
{
    return new WP_HTML_Compression($html);
}

function wp_html_compression_start()
{
    ob_start('wp_html_compression_finish');
}
add_action('get_header', 'wp_html_compression_start');

/**
* Fin Seccion
*/


?>