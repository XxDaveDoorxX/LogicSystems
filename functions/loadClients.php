<?php
include_once ('../Class/imagenes.php');
include_once ('../Class/Cliente.php');

$registros_x_pagina = 10;

$tmpclient = new Cliente(0,'','','','');

// Operaciones para paginación :
$total_registros = current($tmpclient->contar_total_registros());

$paginas_totales = ceil($total_registros/$registros_x_pagina);

$pagina_actual = 0;
if(isset($_POST['page'])) {
    $pagina_actual = filter_var($_POST["page"], FILTER_SANITIZE_NUMBER_INT, FILTER_FLAG_STRIP_HIGH); //filter number
    if(!is_numeric($pagina_actual))
        die("N&uacute;mero de p&aacute;gina no v&aacute;lido.");
}

$registro_actual = ($pagina_actual)*$registros_x_pagina;

$cliente = $tmpclient->listar2(" WHERE id ORDER BY create_at DESC LIMIT ".$registro_actual.", ".$registros_x_pagina);

/*TIME ZONE*/
// --> FORMATEO FECHA
date_default_timezone_set('America/Mexico_City');
$lenguage = 'es-ES';				//Windows
//$lenguage = 'es_ES.UTF-8';		// Linux/Unix
setlocale(LC_ALL, $lenguage);
// <--

/***********************
/* Función paginación */
function paginate_function($item_per_page, $current_page, $total_records, $total_pages)
{

    //print_r("row x página: ".$item_per_page."\n");
    //print_r("página actual: ".$current_page."\n");
    //print_r("total rows: ".$total_records."\n");
    //print_r("total páginas: ".$total_pages."\n");

    $pagination = '';
    if($total_pages > 0 && $total_pages != 1 && $current_page < $total_pages){ //verify total pages and current page number

        $pagination .= '<ul class="pagination">';

        $dis_anterior = $dis_primero = "";
        $link_anterior = $current_page - 1;
        if ($current_page < 1) {
            $dis_anterior = $dis_primero = "class=\"disabled\"";
            $link_anterior = "";
        }

        $pagination .= '<li '.$dis_primero.'><a href=""javascript:;" data-page="0" aria-label="First"><span aria-hidden="true">&laquo;</span></a></li>';
        $pagination .= '<li '.$dis_anterior.'><a href=""javascript:;" data-page="'.$link_anterior.'" aria-label="Previous">&lt;</a></li>';

        $n_links = 5;		// <- Cuantas a mostrar
        $mid_liks = floor($n_links/2);
        $links = $current_page - $mid_liks;
        $pts_prev = $pts_next = true;

        if($current_page + $mid_liks >= $total_pages - 1 || $total_pages <= $n_links) {
            $links = $total_pages - $n_links;
            $pts_next = false;
        }


        if($links <= 0) {
            $links = 0;
            $pts_prev = false;
        }
        if($pts_prev) $pagination .= '<li class="disabled"><a href=""javascript:;" data-page="">&middot;&middot;&middot;</a></li>';
        for($i=0; $i < $n_links && $links < $total_pages; $i++, $links++) {
            if($links == $current_page) {
                $pagination .= '<li class="active"><a ="javascript:;"  data-page="">'.($links + 1).'</a></li>';
            } else {
                $pagination .= '<li><a href="javascript:;" data-page="'.($links).'">'.($links + 1).'</a></li>';
            }
        }
        if($pts_next) $pagination .= '<li class="disabled"><a href=""javascript:;" data-page="">&middot;&middot;&middot;</a></li>';

        $dis_siguiente = $dis_ultimo = "";
        $link_siguiente = $current_page + 1;
        if($current_page >= $total_pages - 1) {
            $dis_siguiente = $dis_ultimo = "class=\"disabled\"";
            $link_siguiente = "";
        }

        $pagination .= '<li '.$dis_siguiente.'><a href=""javascript:;" data-page="'.$link_siguiente.'" aria-label="Next">&gt;</a></li>';
        $pagination .= '<li '.$dis_ultimo.'><a href=""javascript:;" data-page="'.($total_pages - 1).'" aria-label="Last"><span aria-hidden="true">&raquo;</span></a></li>';
    }
    return $pagination; //return pagination links
}
?>

<?php
foreach ($cliente as $e) {
    $tmpimgclient = new Imagen('imagenes_clientes','','','','','',$e['id'],0);
    $imgclient = $tmpimgclient->listar_x_id_c();
    $clientimg = current($imgclient);
    ?>
    <div class="bg-clientes-color">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="row">
                        <div class="col-xs-12 col-sm-4 col-md-4">
                            <img src="assets/images/data/imagenes_clientes/crop_<?php echo $clientimg['arch_img'] ?>" alt="" class="img-responsive center-block">
                        </div>
                        <div class="col-xs-12 col-sm-8 col-md-8">
                            <h2><?php echo $e['title'] ?></h2>
                            <div class="stars starrr" data-rating="<?php echo $e['rating'] ?>"></div>
                            <p>
                                <?php echo $e['comment'] ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
}
?>

<div class="row">
    <div style="text-align:center;">
        <?php echo paginate_function($registros_x_pagina, $pagina_actual, $total_registros, $paginas_totales); ?>
    </div>
</div>

