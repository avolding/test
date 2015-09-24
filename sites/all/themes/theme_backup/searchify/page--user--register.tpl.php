<div id="top-navigation" style="min-width:700px;">
	<div id="left-navigation">
		<a href="<?php print url('<front>'); ?>">SEARCHIER.COM</a>
		
		
		
		
		
		
	</div>
	<div id="nav-links" > 
		<?php print l(t('Back to Login'), 'user/login'); ?>
		 |
		
		
		<?php print l(t('Forgot your password?'), 'user/password'); ?>
		
		
		
	</div>
		
</div>






<div id="auth_box" class="register">
  <div id="top_part">
  <?php print $messages; ?>
    <!--------------------<h1 id="the_logo">
      <a href="<?php print url('<front>'); ?>">
        <img src="<?php print $logo; ?>" alt="<?php print $site_name; ?>">
      </a>
    </h1>----------------------------------------->
  </div>

  <div id="middle_part">
  <div id="form-stuffs">
    

    
    
    <?php print render($page['content']); ?>
  </div> <!-------------- end form stuffs ---------------------->
  

  
  
  </div>

  <!--------------------<div id="bottom_part">
    <div class="login_link">
      <?php print l(t('Login sausage'), 'user/login'); ?>
    </div>

    <div class="password_link">
      <?php print l(t('Forgot your password?'), 'user/password'); ?>
    </div>

    <div class="back_link">
      <a href="<?php print url('<front>'); ?>">&larr; <?php print t('Back'); ?> <?php print $site_name; ?></a>
    </div>
  </div>
</div>----------------------------->
