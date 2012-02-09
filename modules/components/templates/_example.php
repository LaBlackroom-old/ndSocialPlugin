<?php if($components[0]['active']): ?>
<div class="agenda">
  <h1><?php echo html_entity_decode($components[0]['title']) ?></h1>
  <?php echo html_entity_decode($components[0]['description']) ?>
  <?php if($components[0]['url']): ?>
    <a class="voir_tout_agenda" href="<?php echo $components[0]['url'] ?>" title="">Voir toutes les dates</a>
  <?php endif; ?>
</div>
<?php endif; ?>