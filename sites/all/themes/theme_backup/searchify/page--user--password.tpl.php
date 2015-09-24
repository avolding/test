<div id="top-navigation" style="min-width:700px;">
	<div id="left-navigation" style="display: inline; min-width: 700px;" >
		<a href="<?php print url('<front>'); ?>">SEARCHIER.COM</a>
		
		
		
		
		
		
	</div>
	<div id="nav-links" style="display: inline; margin-left: 100px;"> 
		<?php print l(t('Register'), 'user/register'); ?>
		 |
		<?php print l(t('Back to Login'), 'user/login'); ?>
		
		
		
	</div>
		
</div>



<div id="auth_box" class="password">
  
  <div id="top_part">
   <!---------------------- <h1 id="the_logo">
      <a href="<?php print url('<front>'); ?>">
        <img src="<?php print $logo; ?>" alt="<?php print $site_name; ?>">
      </a>
    </h1>------------------------------------------------->
    <?php print $messages; ?>
  </div>
  

  <div id="middle_part">
  <div id="form-stuffs">
    <?php print $title; ?>

    
    
    <?php print render($page['content']); ?>
  </div>
  </div> <!-------------- end form stuffs ----------------------->

  <!--------------------------<div id="bottom_part">
    <div class="login_link">
      <?php print l(t('Login'), 'user/login'); ?>
    </div>

    <?php if (variable_get('user_register')): ?>
    <div class="register_link">
      <?php print l(t('Register a new account bacon bacon bacon steak'), 'user/register'); ?>
    </div>
    <?php endif; ?>

    <div class="back_link">
      <a href="<?php print url('<front>'); ?>">&larr; <?php print t('Back'); ?> <?php print $site_name; ?></a>
    </div>
  </div>
</div>------------------------------------>
