<?php


    // WALKER - NECESSÃRIO PARA EDITAR PROFUNDAMENTE O MENU


    class WPDocs_Walker_Nav_Menu extends Walker_Nav_Menu {

      /**
       * @see Walker::start_el()
       * @since 3.0.0
       *
       * @param string $output Passed by reference. Used to append additional content.
       * @param object $item Menu item data object.
       * @param int $depth Depth of menu item. Used for padding.
       * @param int $current_page Menu item ID.
       * @param object $args
       */

        function start_lvl( &$output, $depth = 0, $args = array() ) {
            // Depth-dependent classes.
            $indent = ( $depth > 0  ? str_repeat( "\t", $depth ) : '' ); // code indent
            $display_depth = ( $depth + 1); // because it counts the first submenu as 0

            // AQUI VOCÃŠ ADICIONA A CLASSE PRINCIPAL DO SUBMENU
            $classes = array(
                'dropdown-menu',
            );
            $class_names = implode( ' ', $classes );

            // Build HTML for output.
            $output .= "\n" . $indent . '<ul class="' . $class_names . '">' . "\n";
        }

        function start_el(&$output, $item, $depth, $args) {

            global $wp_query;
            $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

            $class_names = $value = '';

            $classes = empty( $item->classes ) ? array() : (array) $item->classes;
            $classes[] = 'menu-item-' . $item->ID;

            $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
            $class_names = ' class="' . esc_attr( $class_names ) . '" ';

            $id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args );
            $id = strlen( $id ) ? ' id="' . esc_attr( $id ) . '"' : '';

            $output .= $indent . '<li' . $id . $value . $class_names .'>';

            $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
            $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
            $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
            $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';

            // Check our custom has_children property.
            if ( $args->has_children ) {
                $attributes .= ' class="dropdown-toggle"';
            }

            $item_output = $args->before;

            // IF NECESSÃRIO PARA ADICIONAR OS ATRIBUTOS DATA- DO BOOTSTRAP PARA CRIAÃ‡ÃƒO DO DROPDOWN
            if ( $args->has_children ) {
                    $item_output .= '<a'. $attributes .' data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">';
            } else {
                $item_output .= '<a'. $attributes .'>';
            }

            $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;

            // IF NECESSÃRIO PARA SETA PRA BAIXO
            if ( $args->has_children ) {
                $item_output .= '<span class="caret"></span></a>';
            } else {
                $item_output .= '</a>';
            }

            $item_output .= $args->after;

            $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );

        }

        function display_element( $element, &$children_elements, $max_depth, $depth=0, $args, &$output ) {
            $id_field = $this->db_fields['id'];
            if ( is_object( $args[0] ) ) {
            $args[0]->has_children = ! empty( $children_elements[$element->$id_field] );
            }
            return parent::display_element( $element, $children_elements, $max_depth, $depth, $args, $output );
        }


    }


?>