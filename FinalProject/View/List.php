<?php if (empty($_POST["id"]) ) sleep(1); ?>
  <table  class="table table-bordered" id="miyazaki">
    <tr>
      <th id="i">ID</th>
      <th id="f">Date</th>
      <th id="t">Nickname</th>
       <th id="t">Score</th>
     
      <th colspan="2">Actions</th>

    </tr>
    <?php
    
    foreach ($data['listado'] as $ranking) {
      ?>
      <tr id="ranking_<?= $ranking->getId() ?>" align="center" data-id="<?= $ranking->getId() ?>">

        <td class="id"><?= $ranking->getId() ?></td>
        <td class="date"><?= $ranking->getDate() ?></td>
        <td class="nickname"><?= $ranking->getNickname() ?></td>
        <td class="score"><?= $ranking->getScore() ?></td>
       
       
        <td class="action"> <button id="delete" type="button" class="btn btn-danger">Delete</button>
           &nbsp; <button id="update" type="button" class="btn btn-warning" >Update</button></td>

      </tr>


      <?php
    }
    ?>
  </table>
  <div class="table-pagination pull-right">
    <?php echo  paginate($reload, $page, $total_pages, $adjacents,$o,$p); ?>
  </div>

  

