
<div class="row">
  <div class="col s6 offset-s1">

    <h4>Creacion de usuarios</h4>
    <?php echo $this->Form->create('User'); ?>

      <div class="input-field col s12">
      <i class="material-icons prefix" style="padding-top: 10px;">account_circle</i>
        <?php echo $this->Form->input('username', array('label' => 'Usuario' , 'div'=>false , 'class' => 'validate')); ?>
      </div>

      <div class="input-field col s12">
      <i class="material-icons prefix" style="padding-top: 10px;">vpn_key</i>
        <?php echo $this->Form->input('password' , array('label' => 'Contraseña' , 'type' => 'password' , 'div'=>false , 'class' => 'validate')); ?>
      </div>

      <div class="input-field col s12">
        <i class="material-icons prefix">build</i>
            <?php echo $this->Form->input('users_roles_id', array(
                      'options' => $roles,
                      'label' => false,
                      'div' => false,
                      )); ?>
      </div>

      <div class="" style="font-weight: 500;">
        <button type="submit" class="white-text btn-large">Crear</button>
      </div>

    <?php echo $this->Form->end(); ?>
    
  </div>
</div>

<script>
// inicializacion de select
$(document).ready(function() {
  $('select').material_select();
});
</script>
