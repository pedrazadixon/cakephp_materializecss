<style>
td {
  padding: 0px 5px;
}
.modal {
  width: 30%;
  top: 15% !important;
}
</style>

<nav class="teal">
  <div class="nav-wrapper">
    <ul id="nav-mobile" class="left">

      <li><a href="#"><i class="material-icons left">add</i><span class="hide-on-med-and-down">Nuevo Usuario</span></a></li>

    </ul>
  </div>
</nav>

  <div class="container" style="width: 95%;">
    <i class="material-icons medium icon-demo left">supervisor_account</i><h4 class="left">Lista de usuarios</h4>

    <table class="bordered highlight">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Usuario</th>
                <th>Rol</th>
                <th>Creado</th>
                <th class="center">Acciones</th>
            </tr>
        </thead>
        <tbody>
          <?php foreach ($users as $usuario): ?>
              <?php //echo "<pre>";var_dump($usuario); exit; ?>
              <tr>
                <td><?php echo $usuario["User"]["id"]; ?></td>
                <td><?php echo $usuario["User"]["nombre_completo"]; ?></td>
                <td><?php echo $usuario["User"]["username"]; ?></td>
                <td><?php echo $usuario["roles"]["rol"]; ?></td>
                <td><?php echo $usuario["User"]["created"]; ?></td>
                <td class="center">
                  <?php echo $this->Html->Link('<i class="material-icons brown-text">edit</i>',
                              array('action' => 'editar', $usuario["User"]["id"]),
                              array('class'=>'btn-floating transparent z-depth-0 tooltipped',
                                    'data-position'=>'top',
                                    'data-delay'=>'50',
                                    'data-tooltip'=>'Editar',
                                    'escape' => false));
                  ?>
                  <!-- Modal activador (link) -->
                  <?php
                  echo $this->Html->link(
                      '<i class="material-icons red-text">delete</i>',
                      '#modal' . $usuario["User"]["id"],
                      array('class'=>'btn-floating transparent z-depth-0 tooltipped',
                            'data-position'=>'top',
                            'data-delay'=>'50',
                            'data-tooltip'=>'Eliminar',
                            'escape' => false));
                  ?>
                  <!-- Modal cuerpo (div diseño) -->
                  <div id="modal<?php echo $usuario["User"]["id"]; ?>" class="modal">
                      <div class="modal-content">
                        <p>¿Esta seguro que desea eliminar el usuario <b><?php echo $usuario["User"]["username"]; ?></b>?</p>
                      </div>
                      <div class="modal-footer">
                        <?php echo $this->Form->postLink('ELIMINAR',
                                    array('action' => 'eliminar', $usuario["User"]["id"]),
                                    array('class'=>'modal-action modal-close waves-effect waves-red btn-flat red-text',
                                          'escape' => false));
                        ?>
                        <a href="#!" class="modal-action modal-close waves-effect waves btn-flat ">CANCELAR</a>
                      </div>
                  </div>

                </td>
              </tr>

          <?php endforeach; ?>
        </tbody>
    </table>
  </div>

<script type="text/javascript">
// inicializacion Modals (para los dialogos)
$(document).ready(function(){
$('.modal').modal();
});
</script>
