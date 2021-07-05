<?php decorate_with('layout_1col.php'); ?>

<?php slot('title'); ?>
  <h1><?php echo __('Group %1%', ['%1%' => render_title($group)]); ?></h1>
<?php end_slot(); ?>

<?php slot('content'); ?>

  <?php echo $form->renderGlobalErrors(); ?>

  <?php if (isset($sf_request->id)) { ?>
    <?php echo $form->renderFormTag(url_for([$group, 'module' => 'aclGroup', 'action' => 'edit']), ['id' => 'editForm']); ?>
  <?php } else { ?>
    <?php echo $form->renderFormTag(url_for(['module' => 'aclGroup', 'action' => 'add']), ['id' => 'editForm']); ?>
  <?php } ?>

    <?php echo $form->renderHiddenFields(); ?>

    <div class="accordion" id="clipboard-load">
      <div class="accordion-item">
        <h2 class="accordion-header" id="group-edit">
          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#main-collapse" aria-expanded="true" aria-controls="main-collapse">
            <?php echo __('Main area'); ?>
          </button>
        </h2>
        <div id="main-collapse" class="accordion-collapse collapse show" aria-labelledby="main-heading" data-bs-parent="#group-edit">
          <div class="accordion-body">
            <?php echo render_field($form->name, $group); ?>
            <?php echo render_field($form->description, $group, ['class' => 'resizable']); ?>
            <?php echo $form->translate->renderRow(['class' => 'asdf']); ?>
          </div>
        </div>
      </div>
    </div>

    <section class="actions">
      <ul>
        <?php if (isset($sf_request->id)) { ?>
          <li><?php echo link_to(__('Cancel'), [$group, 'module' => 'aclGroup'], ['class' => 'c-btn']); ?></li>
          <li><input class="c-btn c-btn-submit" type="submit" value="<?php echo __('Save'); ?>"/></li>
        <?php } else { ?>
          <li><?php echo link_to(__('Cancel'), ['module' => 'aclGroup', 'action' => 'list'], ['class' => 'c-btn']); ?></li>
          <li><input class="c-btn c-btn-submit" type="submit" value="<?php echo __('Create'); ?>"/></li>
        <?php } ?>
      </ul>
    </section>

  </form>

<?php end_slot(); ?>
