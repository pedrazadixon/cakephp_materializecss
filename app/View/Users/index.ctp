<style>
.material-tooltip {
  padding: 10px 8px;
  font-size: 1rem;
  z-index: 2000;
  background-color: transparent;
  border-radius: 2px;
  color: #fff;
  min-height: 1px;
  line-height: 120%;
  opacity: 0;
  position: absolute;
  text-align: center;
  max-width: calc(100% - 4px);
  overflow: hidden;
  left: 0;
  top: 50px;
  pointer-events: none;
  visibility: hidden;
}
}
</style>

<script>
  tooltipVerticalMovement = '2px';
</script>



<div class="row">
  <div class="col m10 offset-m1">

    <table class="bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Job Position</th>
                <th>Since</th>
                <th>Salary</th>
                <th class="center">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Andrew Mike</td>
                <td>Develop</td>
                <td>2013</td>
                <td>€ 99,225</td>
                <td class="center">
                  <a class="btn-floating transparent z-depth-0 tooltipped" data-position="top" data-delay="50" data-tooltip="Editar">
                    <i class="material-icons brown-text">edit</i>
                  </a>
                  <a class="btn-floating transparent z-depth-0 tooltipped" data-position="top" data-delay="50" data-tooltip="Eliminar">
                    <i class="material-icons red-text">delete</i>
                  </a>
                </td>
            </tr>
        </tbody>
    </table>

  </div>
</div>


<script>

</script>
