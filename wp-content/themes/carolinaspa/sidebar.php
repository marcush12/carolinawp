<aside class="col-lg-4">
  <div class="sidebar hours p-3">
  <h2 class="text-center text-uppercase">Business Hours</h2>
  <p class="text-center mt-5"><?php the_field('horarios_texto'); ?></p>
  <?php $table = get_field('horarios');
    if($table):
  ?>
    <table class="table table-hover text-center mt-5">
          <thead class="table-danger">
              <tr>
                  <?php foreach($table['header'] as $th): ?>
                    <th class="text-center"><?php echo $th['c']; ?></th>
                  <?php endforeach;?>
              </tr>
          </thead>
          <tbody>
              <?php foreach($table['body'] as $tr): ?>
                <tr>
                  <?php foreach($tr as $td): ?>
                    <td><?php echo $td['c']; ?></td>
                  <?php endforeach;?>    
                </tr>
              <?php endforeach;?>    
          </tbody>
    </table>
    <?php endif;?>
  </div>
</aside>