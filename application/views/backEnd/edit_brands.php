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
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Edit Brands Information</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal" action="<?php echo base_url(); ?>Product_Controller/update_brands" method="post" enctype="multipart/form-data">
						  <fieldset>
						  <?php print_r($brand_edit_info); ?>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Name </label>
							  <div class="controls">
								<input type="hidden" value="<?php echo $brand_edit_info->id; ?>" name="p_er_brand_id" class="span6 typeahead" id="typeahead">

								<input type="text" value="<?php echo $brand_edit_info->name; ?>" name="p_er_brand_name" class="span6 typeahead" id="typeahead">

								<p class="help-block">Edit Products Brand Name Here</p>
							  </div>
							</div>

							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">Edit Brand Descriptoin</label>
							  <div class="controls">
								<textarea class="cleditor"  name="p_er_brand_desc" id="textarea2" rows="3"><?php echo $brand_edit_info->brand_desc; ?></textarea>
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="fileInput">Brand Logo</label>
							  <div class="controls">
								<input class="input-file uniform_on" name="p_er_barnd_logo" id="fileInput" type="file"><br />
								<img src="<?php echo base_url().$brand_edit_info->logo; ?>" width="100px" height="100px" >
							  </div>
							</div>          

							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Update Changes</button>
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