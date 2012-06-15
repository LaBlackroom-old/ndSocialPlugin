<?php if("1" == peanutConfig::get('google_plus_request')):
    /* To design this button, go to http://www.google.com/webmasters/+1/button/ */
    $google = 'class="g-plusone" ';

    /* Taille (Standard by default) */
    if( "0" == peanutConfig::get('google_plus_size') ): /* Petit */
      $google .= ' data-size="small"';
    elseif( "1" == peanutConfig::get('google_plus_size') ): /* Moyen */
      $google .= ' data-size="medium"';
    elseif( "3" == peanutConfig::get('google_plus_size') ): /* Grand */
      $google .= ' data-size="tall"';
    endif;
    
    /* Annotation (Info-Bulle by default) */
    if( "1" == peanutConfig::get('google_plus_note') ): /* intégrée */
      $google .= ' data-annotation="inline"';
    elseif( "2" == peanutConfig::get('google_plus_note') ): /* Aucune */
      $google .= ' data-annotation="none"';
    endif;

    /* URL associé (current page URL by default) */
    if( "" != peanutConfig::get('google_plus_url') ): /* intégrée */
      $http = (!preg_match("#http://#", peanutConfig::get('google_plus_url'))) ? 'http://' : '';    
      $google .= ' data-href="' . $http . peanutConfig::get('google_plus_url') . '"';
    endif;
  ?>
  <div <?php echo $google ?>></div>
<?php endif; ?>

