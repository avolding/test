<?php if ($teaser): ?>
<div class="content-teaser">



  <div id="teaser-title"><?php print $title ?></div>
  
  <div id="teaser-url"><?php print $node->field_url_search_prefix['und']['0']['value'];?></div>





  	<div id="edit-delete-icon">
  		<a href="/node/<?php print $nid ?>/edit"><img src="/sites/all/themes/searchify/images/edit_icon.png"></a>
		<a href="/node/<?php print $nid ?>/delete"><img src="/sites/all/themes/searchify/images/delete_icon.png"></a>
	</div>
</div> 	
  <?php else: ?>

  
  
  
  
  
  
  
  
  

    <a href="#" data-toggle="modal" data-target="#myModal<?php print $nid ?>">
  <img src="<?php print $node->field_tile_image_url['und']['0']['value'];?>" alt="<?php print $title ?>" >
</a>
		
		
		
		
		
		<!-- Modal -->
    <div class="modal fade" id="myModal<?php print $nid ?>" >
        <div class="modal-dialog">
            
                
                <div class="modal-body">
                    <form target="_blank" action="http://localhost/searchier/sites/all/themes/searchify/redirect.php" method="post" name="myform" onsubmit="setTimeout(function(){location.reload(true);},25)">
					<input type="text" class="textbox" name="name" id="textareaID<?php print $nid ?>" >
					<input type="hidden" name="prepend" value="<?php print $node->field_url_search_prefix['und']['0']['value'];?>">
					
					</form>
					
                </div>
                
            
            <!-- /.modal-content -->
        </div>
        
        
        <img class="lightbox-img" src="<?php print $node->field_lightbox_image_url['und']['0']['value'];?>" alt="<?php print $title ?>" >
        
        
        <!-- /.modal-dialog -->
        <script type='text/javascript'>
            $(window).load(function() {
                $('#myModal<?php print $nid ?>').on('shown.bs.modal', function() {
                    $('#textareaID<?php print $nid ?>').focus();
                })

            });
        </script>
    </div>
	
	
	
	
	
	

    <!-- /.modal -->
		
	<!------------------
		
<?php print_r($node) ?>
--------------------------------->
<?php endif; ?>
