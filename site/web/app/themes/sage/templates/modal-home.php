<div class="modal fade" id="modal-home" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h2 class="text-center">Drop Us a Line</h2>
        <svg class="bottom-tri" height="18"><?php get_template_part( 'assets/svg/inline', 'doubletris.svg' ); ?></svg>
        <?php gravity_form( 1, false, false, false, '', false ); ?>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
