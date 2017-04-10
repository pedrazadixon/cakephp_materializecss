
<ul id="slide-out" class="side-nav fixed z-depth-4">
  <li><div class="userView z-depth-1">
  <div class="background teal">
    <!-- img src="<?php //echo $this->webroot; ?>/img/sidenav/fondo_user.jpg" -->
  </div>
  <a href="#!"><img class="circle" src="<?php echo $this->webroot; ?>/img/sidenav/user.png"></a>
  <a href="#!"><span class="black-text name">Dixon Pedraza</span></a>
  <?php
  echo $this->Html->link(
     '<span class="black-text email">Salir</span>',
      array(
          'controller' => 'users',
          'action' => 'logout'
      ),
      array(
          'escape' => false  //NOTICE THIS LINE ***************
      )
  );
  ?>

</div></li>
  <li><a href="#!">First Sidebar Link</a></li>
  <li><a href="#!">Second Sidebar Link</a></li>
  <li class="no-padding">
    <ul class="collapsible collapsible-accordion">
      <li>
        <a class="collapsible-header">Usuarios<i class="material-icons left">account_box</i><i class="material-icons right">arrow_drop_down</i></a>
        <div class="collapsible-body">
          <ul>
            <li><?php echo $this->Html->link('Ver',array('controller' => 'users','action' => 'index'));?></li>
            <li><?php echo $this->Html->link('Agregar',array('controller' => 'users','action' => 'agregar'));?></li>



          </ul>
        </div>
      </li>
    </ul>
  </li>
</ul>

<a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>



<script type="text/javascript">
// Initialize collapse button
$(".button-collapse").sideNav();
// Initialize collapsible (uncomment the line below if you use the dropdown variation)
//$('.collapsible').collapsible();
</script>
