<?php decorate_with('layout_1col.php'); ?>

<?php slot('title'); ?>
  <h1><?php echo __('Are you sure you want to delete this right?'); ?></h1>
<?php end_slot(); ?>

<?php slot('content'); ?>

  <?php echo $form->renderGlobalErrors(); ?>

  <?php echo $form->renderFormTag(url_for([$right, 'module' => 'right', 'action' => 'delete']), ['method' => 'delete']); ?>

    <?php echo $form->renderHiddenFields(); ?>

    <ul class="actions mb-3 nav gap-2">
      <li><?php echo link_to(__('Cancel'), $relatedObject, ['class' => 'btn atom-btn-outline-light', 'role' => 'button']); ?></li>
      <li><input class="btn atom-btn-outline-danger" type="submit" value="<?php echo __('Delete'); ?>"></li>
    </ul>

  </form>

<?php end_slot(); ?>
