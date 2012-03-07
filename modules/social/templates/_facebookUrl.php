<?php if( "1" == peanutConfig::get('facebook_request') && "" != peanutConfig::get('facebook_url') ): ?>
  <link rel="me" href="<?php echo peanutConfig::get('facebook_url') ?>" />
<?php endif; ?>
