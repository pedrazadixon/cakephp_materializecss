<style>
.card .header-card {
    top: -40px;
    margin-left: 20px;
    margin-right: 20px;
    padding: 15px;
}
.message {
      position: absolute;
  }
body {
  background: #43cea2;  /* fallback for old browsers */
  background: -webkit-linear-gradient(to bottom, #185a9d, #43cea2);  /* Chrome 10-25, Safari 5.1-6 */
  background: linear-gradient(to bottom, #185a9d, #43cea2); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

}
</style>

<div class="valign-wrapper" style="height:100%;">
      <div class="row">
        <div class="col m10 offset-m1 s10 offset-s1">
          <div class="card z-depth-3">
            <div class="card header-card z-depth-5 center-align teal white-text">
              <h5>APLICACION</h4>
            </div>
            <p class="center-align" style="margin-top: -30px;">Iniciar sesion</p>

            <?php echo $this->Form->create('User'); ?>

                    <div class="input-field col s10 offset-s1">
                    <i class="material-icons prefix" style="padding-top: 10px;">account_circle</i>
                      <?php echo $this->Form->input('username', array('label' => 'Usuario' , 'div'=>false , 'class' => 'validate')); ?>
                    </div>

                    <div class="input-field col s10 offset-s1">
                    <i class="material-icons prefix" style="padding-top: 10px;">vpn_key</i>
                      <?php echo $this->Form->input('password' , array('label' => 'Contraseña' , 'type' => 'password' , 'div'=>false , 'class' => 'validate')); ?>
                    </div>

                    <div class="center-align col s10 offset-s1 red-text" style="margin-bottom: 10px;">
                      <?php echo $this->Session->flash('auth'); ?>
                      <?php echo $this->Flash->render(); ?>
                    </div>

                    <div class="center-align" style="font-weight:500;">
                      <button style="margin-bottom: 15px;" type="submit" class="waves-effect waves-teal btn-flat btn-large teal-text">Iniciar</button>
                    </div>

            <?php echo $this->Form->end(); ?>

          </div>
        </div>
      </div>
    </div>
