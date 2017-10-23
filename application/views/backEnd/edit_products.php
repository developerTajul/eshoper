<?php echo $header; ?>
	
		<div class="container-fluid-full">
		<div class="row-fluid">
				
<?php echo $main_menu; ?>
			
			<noscript>
				<div class="alert alert-block span10">
					<h4 class="alert-heading">Warning!</h4>
					<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
				</div>
			</noscript>
			
			<!-- start: Content -->
			<div id="content" class="span10">
			
<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.html">Home</a>
					<i class="icon-angle-right"></i> 
				</li>
				<li>
					<i class="icon-edit"></i>
					<a href="#">Forms</a>
				</li>
			</ul>
			
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Product Informations</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">

						<form class="form-horizontal" action="<?php echo base_url(); ?>Product_Controller/update_products" method="post" enctype="multipart/form-data">
						  <fieldset>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Title </label>
							  <div class="controls">
								<input type="hidden" value="<?php echo $products_info->id; ?>" name="product_er_id" class="span6 typeahead" id="typeahead" >
								<input type="text" value="<?php echo $products_info->title; ?>" name="product_er_title" class="span6 typeahead" id="typeahead" >
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="regular_price">Regular Price </label>
							  <div class="controls">
								<input type="text" value="<?php echo $products_info->regular_price; ?>" name="product_er_regular_price" class="span6 typeahead" id="regular_price" >
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="sale_price">Sale Price </label>
							  <div class="controls">
								<input type="text" value="<?php echo $products_info->sale_price; ?>" name="product_er_sale_price" class="span6 typeahead" id="sale_price" >
							  </div>
							</div>

							

							<div class="control-group">
							  <label class="control-label" for="fileInput">File input</label>
							  <div class="controls">
								<input name="product_er_image" class="input-file uniform_on" id="fileInput" type="file"><br />
								<img src="<?php echo base_url().$products_info->product_image; ?>" width="150px" height="150px"/> 
							  </div>
							</div> 


							<div class="control-group hidden-phone">
							  <label class="control-label" for="product_short_desc">Short Description</label>
							  <div class="controls">
								<textarea name="product_er_short_desc" class="cleditor" id="product_short_desc" rows="3"><?php echo $products_info->product_short_desc; ?></textarea>
							  </div>
							</div>

							<div class="control-group hidden-phone">
							  <label class="control-label" for="product_er_long_desc">Long Description</label>
							  <div class="controls">
								<textarea name="product_er_long_desc" class="cleditor" id="product_long_desc" rows="3"><?php echo $products_info->product_long_desc; ?></textarea>
							  </div>
							</div>


							 
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Update changes</button>
							  <button type="reset" class="btn">Cancel</button>
							</div>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->				

				

			</div><!--/.fluid-container-->
	
			<!-- end: Content -->
		</div><!--/#content.span10-->
		</div><!--/fluid-row-->
		
	<div class="modal hide fade" id="myModal">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">×</button>
			<h3>Settings</h3>
		</div>
		<div class="modal-body">
			<p>Here settings can be configured...</p>
		</div>
		<div class="modal-footer">
			<a href="#" class="btn" data-dismiss="modal">Close</a>
			<a href="#" class="btn btn-primary">Save changes</a>
		</div>
	</div>
	
	<?php echo $footer; ?>