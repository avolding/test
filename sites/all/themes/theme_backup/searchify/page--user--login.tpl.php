<div id="header-container">


	<div id="home-link"><a href="<?php print url('<front>'); ?>">SEARCHIER.COM</a></div>
	<div id="main-nav" >
<ul>
   
  <li><a href="#">LOGIN</a></li>
  <li><a href="#">REGISTER</a></li>
  <li><a href="#">MENU</a></li>
  
</ul>


	
	
	</div>


</div><!-------header-container-------------------->







<div id="auth_box" class="login" >

<?php print $messages; ?>

  <div id="middle_part">
    
 <div id="form-stuffs">
 
    
    
    
    <?php print render($page['content']); ?>
  </div>
</div> <!----------------- end form-stuffs div --------------------------->





  
  
  
  <!-----------------<div id="bottom_part">
    <div class="password_link">
      <?php print l(t('Forgot your password? bacon bacon'), 'user/password'); ?>
    </div>

    <?php if (variable_get('user_register')): ?>
    <div class="register_link">
      <?php print l(t('Register a new account'), 'user/register'); ?>
    </div>
    <?php endif; ?>

    <div class="back_link">
      <a href="<?php print url('<front>'); ?>">&larr; <?php print t('Back'); ?> <?php print $site_name; ?></a>
    </div>
  </div>--------------------------------------------------------------------->
</div>



</div>