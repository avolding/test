<div id="top-navigation" style="min-width:700px;">
	<div id="left-navigation">
		<a href="<?php print url('<front>'); ?>">SEARCHIER.COM</a>
		
		
		
		
		
		
	</div>
	<div id="nav-links" > 
		
		<?php print l(t('Back to Login'), 'user/login'); ?>
		
		
	</div>
		
</div>



<div id="auth_box" class="reset">
  

  <div id="pw-reset">
    <h2 class="title"><?php print $title; ?></h2>

    <?php print $messages; ?>

    <?php print render($page['content']); ?>
  </div>


  </div>
</div>