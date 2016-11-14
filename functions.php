<?php
// add_theme_support( 'post-thumbnails');
 if ( function_exists( 'add_theme_support' ) ) {
        add_theme_support('post-thumbnails');
        }


        function customScripts() {
    wp_enqueue_style( 'accesspress-staple-responsive-nav', get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style( 'accesspress-staple-animate', get_template_directory_uri() . '/bxslider/jquery.bxslider.css');
    wp_enqueue_style( 'accesspress-staple-fancycss', get_template_directory_uri() . '/css/style.css"');
    wp_enqueue_style( 'accesspress-staple-style', get_stylesheet_uri() );
    wp_enqueue_script( 'jquery-basic', get_template_directory_uri() . '/js/bootstrap.min.js',  array(), '1.0', true);
    wp_enqueue_script( 'neo-bootstrap', get_template_directory_uri() . '/bxslider/jquery.bxslider.min.js',  array('jquery'), '1.0', true);
    }
    add_action( 'wp_enqueue_scripts', 'customScripts' );
       register_nav_menus( array(
            // TOPO
            'principal' => esc_html__( 'Menu Principal', 'LENA' )
        ) );
require_once( 'setup/walker.php' );

// Add Shortcode
function accordion_shortcode( $atts , $content = null ) {

    // Attributes
    $atts = shortcode_atts(
        array(
            'title' => '',
            'content' => '',
        ),
        $atts,
        'accordion'
    );

    // Return accordion HTML code
    return '<details>
                <summary>' . $atts['title'] . '</summary>
                <div class="informacoes" style="display: block;">
                 <div>'. $atts['content'] . '</div>
                </div>
            </details>';
               

}
add_shortcode( 'accordion', 'accordion_shortcode' );
      add_action( 'init', 'customPosts' );
    function customPosts() {
      $labels = array(
        'name' => _x('notícia', 'post type general name'),
        'singular_name' => _x('noticias', 'post type singular name'),
        'add_new' => _x('Adicionar Nova', 'Notícia'),
        'add_new_item' => __('Adicionar Nova notícia'),
        'edit_item' => __('Editar Notícia'),
        'new_item' => __('Nova Notícia'),
        'all_items' => __('Todas as Notícias'),
        'view_item' => __('Ver  Serviço'),
        'search_items' => __('Procurar Serviço'),
        'not_found' =>  __('Nenhuma notícia encontrado'),
        'not_found_in_trash' => __('Nenhuma notícia encontrado'),
        'parent_item_colon' => '',
        'menu_name' => 'Notícias'
      );
      $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'supports' => array( 'editor', 'title', 'page-attributes' )
      );
      register_post_type('noticias',$args);

      $labels = array(
        'name' => _x('arquivo', 'post type general name'),
        'singular_name' => _x('arquivos', 'post type singular name'),
        'add_new' => _x('Adicionar Novo', 'Arquivo'),
        'add_new_item' => __('Adicionar Novo arquivo'),
        'edit_item' => __('Editar Arquivo'),
        'new_item' => __('Novo Arquivo'),
        'all_items' => __('Todas os Arquivos'),
        'view_item' => __('Ver  Arquivo'),
        'search_items' => __('Procurar Arquivo'),
        'not_found' =>  __('Nenhum arquivo encontrado'),
        'not_found_in_trash' => __('Nenhum arquivo encontrado'),
        'parent_item_colon' => '',
        'menu_name' => 'Inforlena'
      );
      $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'supports' => array( 'editor', 'title', 'page-attributes' )
      );
      register_post_type('inforlena',$args);

      $labels = array(
        'name' => _x('arquivo', 'post type general name'),
        'singular_name' => _x('arquivos', 'post type singular name'),
        'add_new' => _x('Adicionar Novo', 'Arquivo'),
        'add_new_item' => __('Adicionar Novo arquivo'),
        'edit_item' => __('Editar Arquivo'),
        'new_item' => __('Novo Arquivo'),
        'all_items' => __('Todas os Arquivos'),
        'view_item' => __('Ver  Arquivo'),
        'search_items' => __('Procurar Arquivo'),
        'not_found' =>  __('Nenhum arquivo encontrado'),
        'not_found_in_trash' => __('Nenhum arquivo encontrado'),
        'parent_item_colon' => '',
        'menu_name' => 'Inforlena Brasil'
      );
      $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'supports' => array( 'editor', 'title', 'page-attributes' )
      );
      register_post_type('inforlenabrasil',$args);
      }




      function kriesi_pagination($pages = '', $range = 2)
{  
     $showitems = ($range * 2)+1;  

     global $paged;
     if(empty($paged)) $paged = 1;

     if($pages == '')
     {
         global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages)
         {
             $pages = 1;
         }
     }   

     if(1 != $pages)
     {
         echo "<div class='pagination'>";
         if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>&laquo;</a>";
         if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo;</a>";

         for ($i=1; $i <= $pages; $i++)
         {
             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
             {
                 echo ($paged == $i)? "<span class='current'>".$i."</span>":"<a href='".get_pagenum_link($i)."' class='inactive' >".$i."</a>";
             }
         }

         if ($paged < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($paged + 1)."'>&rsaquo;</a>";  
         if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>&raquo;</a>";
         echo "</div>\n";
     }
}
    ?>