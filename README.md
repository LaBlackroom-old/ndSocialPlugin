## ABOUT ##
Ce plugin à pour but la gestion des réseaux sociaux (Facebook, Twitter, Google+ ...)
Il vient compléter le module settings de Peanut2 (https://github.com/LaBlackroom/peanut2)

------------------------------------------------------------------------------------------

## INSTALL ##
  
  ## COMMANDES
  $ php symfony plugin:publish-assets
  $ php symfony cc


  ## INSTALLER LE PLUGIN en 6 étapes
  
    1. Dans config/ProjectConfiguration.class.php
    ---------------------------------------------
    
    $this->enablePlugins(array(
          'sfDoctrinePlugin',
          'sfTaskExtraPlugin',
          'peanutHtml5Plugin',
          ...
          'ndSocialPlugin'
    ));



    2. Dans apps/www/config/settings.yml
    ------------------------------------

    enabled_modules:        [items, ..., social]



    3. Dans apps/admin/config/view.yml
    ----------------------------------

    stylesheets:
    ...
    ...                           
    - /ndSocialPlugin/css/admin.css:                     {media: 'screen, projection' }

    javascripts:     [ /ndSocialPlugin/js/social.js, ...]



    4. Dans apps/admin/modules/settings/templates/_menu.php
    --------------------------------------------------------

    ...
    <li>
      <a href="<?php echo url_for('settings', array('action' => 'social')); ?>" title="<?php echo __('Link to', null, 'peanutCorporate') ?>"><?php echo __('Social settings'); ?></a>
    </li>
    ...

    

    5. Dans apps/www/templates/layout.php
    -------------------------------------

    Dans le <HEAD>
    --------------

    <?php
    include_component('social', 'facebookUrl'); /* Canonical link for Facebook */  
    include_component('social', 'facebookOpenGraph'); /* Open Graph */
    
    include_component('social', 'twitterUrl'); /* Canonical link for Twitter */
    
    include_component('social', 'googlePlusUrl'); /* Canonical link for Google+ */
    include_component('social', 'googlePlus1Head'); /* Google +1 */
    ?>

    Dans le <BODY>
    --------------
    <?php
      include_component('social', 'facebookLike'); /* Like button for Facebook */
      include_component('social', 'twitterFollow'); /* Follow for Twitter */
      include_component('social', 'twitterTweet'); /* Tweet for Twitter */
      include_component('social', 'googlePlus1'); /* +1 for Google  */
    ?>



    6. Reconstruire la Base de données
    ----------------------------------
    
    $ php symfony doctrine:build --all --and-load