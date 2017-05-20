<?php
# conecta a la base de datos
//si accion esta definido y no esta null coje el valor sino ponerlo vacio
$action = (isset($_REQUEST['action']) && $_REQUEST['action'] != NULL) ? $_REQUEST['action'] : '';
//Recojo el paramentro enviado por ajax Para ordenar
$o = (isset($_REQUEST['ordenar']) && $_REQUEST['ordenar'] != NULL) ? $_REQUEST['ordenar'] : '1';
$p=(isset($_REQUEST['forma']) && $_REQUEST['forma'] != NULL) ? $_REQUEST['forma'] : 'ASC';
 require_once '../Model/Ranking.php';
//si es igual a ajax
if ($action == 'ajax') {
  // Obtiene todas las propiedades
  $data['listado'] = Ranking::getListRanking($o,$p);
  include '../Model/ListPagination.php';

  include '../View/List.php';
  ?>

<?php
} else {
  ?>
  <div class="alert alert-warning alert-dismissable">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <h4>Alert!!!</h4> No data to show
  </div>
  <?php
}
