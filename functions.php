<?php
require_once get_template_directory() . '/odin/core/classes/class-post-type.php';
require_once get_template_directory() . '/odin/core/classes/class-metabox.php';
require_once get_template_directory() . '/odin/core/classes/class-taxonomy.php';

// Argumentos
$args = array(
    'hierarchical'        => false,
    'supports'            => array( 'title', 'thumbnail'),
    'public'              => true,
    'show_ui'             => true,
    'show_in_menu'        => true,
    'show_in_nav_menus'   => false,
    'publicly_queryable'  => true,
    'exclude_from_search' => false,
    'has_archive'         => true,
    'query_var'           => true,
    'can_export'          => true,
    'rewrite'             => true,
    'capability_type'     => 'post',
    'taxonomies'          => array('category'),
);

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//Paginação

function custom_pagination($pages = '', $range = 2){
    // o restante do codigo sera inserido aqui
    $showitems = ($range * 2) + 1;

    global $paged;
    if(empty($paged)) $paged = 1;

    if($pages == '') {
        global $wp_query;
        $pages = $wp_query->max_num_pages;
        if(!$pages) {
            $pages = 1;
        }
    }

    if(1 != $pages) {
        echo "<nav class='container pagination pagination-lg'>";

            if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<li class='page-item'><a href='".get_pagenum_link(1)."' class='page-link'></a></li>";
            if($paged > 1 && $showitems < $pages) echo "<li class='page-item'><a href='".get_pagenum_link($paged - 1)."' class='page-link'>&lsaquo;</a></li>";

            for ($i=1; $i <= $pages; $i++) {
                if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems )) {
                    echo ($paged == $i)? "<a class='page-link page-item bg-success'>".$i."</a>":"<a href='".get_pagenum_link($i)."' class='page-link' >".$i."</a>";
                }
            }

            if ($paged < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($paged + 1)."' class=''>&rsaquo;</a>";
            if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."' class='page-link'></a>";

        echo "</nav>\n";
    }
}

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// Destaque
$destaque = new Odin_Post_Type(
    'Destaque', // Nome (Singular) do Post Type.
    'destaque' // Slug do Post Type.
);

$destaque->set_labels(
        array(
            'name' => 'Destaques',
            'singular_name' => 'Destaque',
            'name_admin_bar' => 'Destaques',
            'parent_item_colon' => "",
            'all_items' => "Todos os Destaques",
            'add_new_item' => "Adicionar novo Destaque",
            'add_new' => "Novo Destaque",
            'new_item' => "Novo Destaque",
            'edit_item' => 'Editar Destaque',
            'update_item' => 'Atualizar Destaque',
            'view_item' => 'Visualiar Destaque',
            'search_items' => 'Procurar Destaques',
            'not_found' => 'Nenhum Destaque encontrado',
            'not_found_in_trash' => 'Nenhum Destaque encontrado na lixeira',
        )
);


$destaque->set_arguments(
    array(
        'supports' => array( 'title', 'editor', 'thumbnail' ),
        'menu_icon' => 'dashicons-format-image',
     	'taxonomies'          => array('category')   
    )
);

$destaque_metabox = new Odin_Metabox(
    'destaque', // Slug/ID do Metabox (obrigatório)
    'Destaques Configurações', // Nome do Metabox  (obrigatório)
    'post', // Slug do Post Type, sendo possível enviar apenas um valor ou um array com vários (opcional)
    'normal', // Contexto (opções: normal, advanced, ou side) (opcional)
    'high' // Prioridade (opções: high, core, default ou low) (opcional)
);

$destaque_metabox->set_fields(
    array(
    'id'          => 'destaque', // Obrigatório
    'label'       => __( 'Text Example', 'odin' ), // Obrigatório
    'type'        => 'text', // Obrigatório
    'attributes'  => array( // Opcional (atributos para input HTML/HTML5)
        'placeholder' => __( 'Some text here!' )
    ),
    'default'     => 'Default text', // Opcional
    'description' => __( 'Descrition Example', 'odin' ), // Opcional
)
);



///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////




// Post Associado
$associado = new Odin_Post_Type(
    'Associado', // Nome (Singular) do Post Type.
    'associado' // Slug do Post Type.
);

$associado->set_labels(
        array(
            'name' => 'Associados',
            'singular_name' => 'associado',
            'name_admin_bar' => 'associados',
            'parent_item_colon' => "",
            'all_items' => "Todos os associados",
            'add_new_item' => "Adicionar novo associado",
            'add_new' => "Novo associado",
            'new_item' => "Novo associado",
            'edit_item' => 'Editar associado',
            'update_item' => 'Atualizar associado',
            'view_item' => 'Visualiar associado',
            'search_items' => 'Procurar associados',
            'not_found' => 'Nenhum associado encontrado',
            'not_found_in_trash' => 'Nenhum associado encontrado na lixeira',
        )
);

$associado->set_arguments(
    array(
        'supports' => array( 'title', 'thumbnail' ),
        'menu_icon' => 'dashicons-groups',
     	'taxonomy' => array('associados')   
    )
);

// Telefone
$associado_telefone = new Odin_Metabox(
    'associado_telefone', // Slug/ID do Metabox (obrigatório)
    'Telefone', // Nome do Metabox  (obrigatório)
    'associado', // Slug do Post Type, sendo possível enviar apenas um valor ou um array com vários (opcional)
    'normal', // Contexto (opções: normal, advanced, ou side) (opcional)
    'high' // Prioridade (opções: high, core, default ou low) (opcional)
);
$associado_telefone->set_fields(
    array(
        array(
            'id'          => 'associado_telefone',
            'label'       => __( 'Telefone', 'odin' ),
            'type'        => 'text',
            'description' => __( 'Digite o telefone', 'odin' )
        )
    )
);

// Endereço
$associado_endereco = new Odin_Metabox(
    'associado_endereco', // Slug/ID do Metabox (obrigatório)
    'Endereço', // Nome do Metabox  (obrigatório)
    'associado', // Slug do Post Type, sendo possível enviar apenas um valor ou um array com vários (opcional)
    'normal', // Contexto (opções: normal, advanced, ou side) (opcional)
    'high' // Prioridade (opções: high, core, default ou low) (opcional)
);
$associado_endereco->set_fields(
    array(
        array(
            'id'          => 'associado_endereco',
            'label'       => __( 'Endereço', 'odin' ),
            'type'        => 'text',
            'description' => __( 'Digite o endereço', 'odin' )
        )
    )
);

// Link mapa
$associado_link = new Odin_Metabox(
    'associado_link', // Slug/ID do Metabox (obrigatório)
    'Link', // Nome do Metabox  (obrigatório)
    'associado', // Slug do Post Type, sendo possível enviar apenas um valor ou um array com vários (opcional)
    'normal', // Contexto (opções: normal, advanced, ou side) (opcional)
    'high' // Prioridade (opções: high, core, default ou low) (opcional)
);
$associado_link->set_fields(
    array(
        array(
            'id'          => 'associado_link',
            'label'       => __( 'Link', 'odin' ),
            'type'        => 'text',
            'description' => __( 'Digite o link', 'odin' )
        )
    )
);


function cptui_register_my_taxes_associados() {

    /**
     * Taxonomy: Tipos de Associados.
     */

    $labels = array(
        "name" => __( "Tipos de Associados", "site-AEBA" ),
        "singular_name" => __( "Tipo de Associado", "site-AEBA" ),
    );

    $args = array(
        "label" => __( "Tipos de Associados", "site-AEBA" ),
        "labels" => $labels,
        "public" => true,
        "publicly_queryable" => true,
        "hierarchical" => true,
        "show_ui" => true,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "query_var" => true,
        "rewrite" => array( 'slug' => 'associados', 'with_front' => true, ),
        "show_admin_column" => false,
        "show_in_rest" => true,
        "rest_base" => "associados",
        "rest_controller_class" => "WP_REST_Terms_Controller",
        "show_in_quick_edit" => false,
        );
    register_taxonomy( "associados", array( "associado" ), $args );
}
add_action( 'init', 'cptui_register_my_taxes_associados' );


//Taxonomia para categorias de associados

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


// Post Empresa da sessão Produtos/Serviços
$empresa = new Odin_Post_Type(
    'Empresa', // Nome (Singular) do Post Type.
    'empresa' // Slug do Post Type.
);

$empresa->set_labels(
        array(
            'name' => 'Empresas',
            'singular_name' => 'empresa',
            'name_admin_bar' => 'empresas',
            'parent_item_colon' => "",
            'all_items' => "Todos as empresas",
            'add_new_item' => "Adicionar nova empresa",
            'add_new' => "Nova empresa",
            'new_item' => "Nova empresa",
            'edit_item' => 'Editar empresa',
            'update_item' => 'Atualizar empresa',
            'view_item' => 'Visualiar empresa',
            'search_items' => 'Procurar empresas',
            'not_found' => 'Nenhuma empresa encontrada',
            'not_found_in_trash' => 'Nenhuma empresa encontrada na lixeira',
        )
);

//Categorias
$empresa->set_arguments(
    array(
        'supports' => array( 'title', 'thumbnail' ),
        'menu_icon' => 'dashicons-store',
        'taxonomies' => array('category')   
    )
);


///////////////////////////////////////////////////////////////////////////////////




