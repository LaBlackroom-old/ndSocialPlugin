<?php if( "1" == peanutConfig::get('twitter_request') && "" != peanutConfig::get('twitter_account') ): ?>
  <link rel="me" href="https://twitter.com/#!/<?php echo peanutConfig::get('twitter_account') ?>" />
<?php endif; ?>