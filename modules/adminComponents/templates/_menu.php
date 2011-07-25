<nav <?php if($sf_context->getModuleName() == 'adminComponents'):
        echo 'class="selected"'; endif; ?>>
  <h3>
    <a href="#" class="nav-top-item" title="<?php echo __('Link to', null, 'ndComponents'); ?><?php echo __('Manage components', null, 'ndComponents'); ?>">
      <?php echo __('Manage components', null, 'ndComponents'); ?>
    </a>
  </h3>

  <ul>
    <li>
      <a href="<?php echo url_for('@nd_adminComponents'); ?>" title="<?php echo __('Link to', null, 'ndComponents') ?>"><?php echo __('Show components', null, 'ndComponents'); ?></a>
    </li>
    <li>
      <a href="<?php echo url_for('@nd_adminComponents_new') ?>" title="<?php echo __('Link to', null, 'ndComponents') ?>"><?php echo __('Add new component', null, 'ndComponents'); ?></a>
    </li>
  </ul>
</nav>