		 <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Add Produk</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Produk</a></li>
			  <li class="breadcrumb-item active">Add</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="card">
						<div class="card-header">
							<div class="card-title">
								<i class="nav-icon fas fa-table"></i> Daftar Produk
							</div>
							<div class="card-tools">
								<a href="<?php echo site_url( 'product/add')?>" class="btn btn-default btn-sm">
								<i class="fas fa-angle-left"></i> Back </a>
								<a href="javascript:;" class="btn btn-success btn-sm btn-save">
									<i class="fas fa-download"></i> Save</a>
								
							</div>
						</div>
		 				<div class="card-body">
						 	<ul class="nav nav-tabs" id="custom-content-below-tab" role="tablist">
								<li class="nav-item active">
									<a href="#tab_general" class="nav-link active" data-toggle="tab"> General </a>
								</li>
								<li class="nav-item">
									<a href="#tab_data" class="nav-link" data-toggle="tab"> Data </a>
								</li>
								<li class="nav-item">
									<a href="#tab_discount" class="nav-link" data-toggle="tab"> Discount </a>
								</li>
								<li class="nav-item">
									<a href="#tab_images" class="nav-link" data-toggle="tab"> Images </a>
								</li>
								
							</ul>
							<?php
								$attributes = array('class' => 'form-horizontal', 'id' => 'myform','role'=>'form', "name"=>"myform","enctype"=>"multipart/form-data");
													
								echo form_open(site_url('product/save'),$attributes);
							?>
							<div class="tab-content">								
								<div class="tab-pane active" id="tab_general">
									<div class="card-body">
										<div class="form-group row">
											<label for="inputEmail3" class="col-sm-2 col-form-label">
												Nama Produk <span class="required"> * </span>
											</label>
											<div class="col-sm-10">
												<input type="text" class="form-control" name="post_title" placeholder="" >
											</div>
										</div>
										<div class="form-group row">
											<label for="inputPassword3" class="col-sm-2 col-form-label">Status
												<span class="required"> * </span>
											</label>
											<div class="col-sm-10">
												<select class="table-group-action-input form-control input-medium" name="post_status">
													<option value="">Select...</option>
													<option value="1">Published</option>
													<option value="0">Not Published</option>
												</select>
											</div>
										</div>
										<div class="form-group row">
											<label for="inputPassword3" class="col-sm-2 col-form-label">Deskripsi
												<span class="required"> * </span>
											</label>
											<div class="col-sm-10">
												<textarea class="form-control mytiny" name="post_description"></textarea>
											</div>
										</div>
										<div class="form-group row">
											<label for="inputPassword3" class="col-sm-2 col-form-label">Meta Title
											</label>
											<div class="col-sm-10">
												<input type="text" class="form-control maxlength-handler" name="meta_title" maxlength="100" >
												<span class="help-block"> max 100 chars </span>
											</div>
										</div>
										<div class="form-group row">
											<label for="inputPassword3" class="col-sm-2 col-form-label">
												Meta Keywords
											</label>
											<div class="col-sm-10">
												<textarea class="form-control maxlength-handler" rows="8" name="meta_keywords" maxlength="1000"></textarea>
												<span class="help-block"> max 1000 chars </span>
											</div>
										</div>
										<div class="form-group row">
											<label for="inputPassword3" class="col-sm-2 col-form-label">
												Meta Description
											</label>
											<div class="col-sm-10">
												<textarea class="form-control maxlength-handler" rows="8" name="meta_description" maxlength="255"></textarea>
												<span class="help-block"> max 255 chars </span>
											</div>
										</div>
									</div>
									
								</div>
								<div class="tab-pane" id="tab_data">
									<div class="card-body">
										<div class="form-group row">
											<label for="inputEmail3" class="col-sm-2 col-form-label">
												SKU 
											</label>
											<div class="col-sm-4">
												<input type="text" class="form-control" name="sku" placeholder="" > 
											</div>
										</div>
										<div class="form-group row">
											<label for="inputEmail3" class="col-sm-2 col-form-label">
												Merek 
											</label>
											<div class="col-sm-6">
												<select class="form-control input-medium" name="brand_id">
												<?php foreach($brand as $b ){?> 
													<option value="<?php echo $b->id ?>"><?php echo $b->brand_name ?></option>
												<?php } ?>
												</select> 
											</div>
										</div>
										<div class="form-group row">
											<label for="inputEmail3" class="col-sm-2 col-form-label">
												Harga <span class="required"> * </span> 
											</label>
											<div class="col-sm-4">
												<input type="text" class="form-control" name="price" id="proprice">
											</div>
										</div>
										<div class="form-group row">
											<label for="inputEmail3" class="col-sm-2 col-form-label">
												Berat 
											</label>
											<div class="col-sm-2">
												<input type="text" class="form-control" name="weight" id="weight">
											</div>
										</div>
										<div class="form-group row">
											<label for="inputEmail3" class="col-sm-2 col-form-label">
												Kategori 
											</label>
											<div class="col-sm-10">
												<select name="category_id[]" class="form-control listcategory" multiple>
													<?php foreach($categories as $c){?>                                                                    
													<option value="<?php echo $c->category_id?>" selected="selected" data-id="<?php echo $c->id?>"><?php echo $c->category_name?></option>
													<?php } ?>
												</select>
											</div>
										</div>
									</div>
									
								</div>
								<div class="tab-pane" id="tab_discount">
									<div class="card-body">
										<table class="table table-bordered" id="listDiscount" data-value="">
											<thead>
												<tr>
													<th>Discount Persen (%)</th>
													<th>Discount Price</th>
													<th>Star Date</th>
													<th>End Date</th>
													<th></th>
												</tr>
											</thead>
											<tbody>
												
											</tbody>
											<tfoot id="tfoot">
												<tr>
													<td>
													<button type="button" class="btn btn-info" id="adddiscount"><i class="fa fa-plus"></i></button>
													</td>
												</tr>
											</tfoot>
										</table>
									</div>
								</div>
								<div class="tab-pane" id="tab_images">
									<div class="table-responsive">
										<table class="table table-striped table-bordered table-hover">
											<thead>
												<tr>
													<td>Image</td>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>
														<div class="controls">
															<div class="fileinput fileinput-new" data-provides="fileinput">
																<div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;"> 
																	
																</div>
																<div>
																	<span class="btn default btn-file">
																		<span class="fileinput-new"> Select image </span>
																		<span class="fileinput-exists"> Change </span>
																		<input type="file" name="userfile"> </span>
																	<a href="javascript:;" class="btn default fileinput-exists" data-dismiss="fileinput"> Remove </a>
																</div>
															</div>
														</div>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
									
									<div class="alert alert-danger margin-bottom-10">
										<button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
										<i class="fa fa-warning fa-lg"></i> Image type .jpg,.png,.jpeg, Max 4Mb. 
									</div>
									
									<div id="tab_images_uploader_container" class="text-align-reverse margin-bottom-10">
										<a id="tab_images_uploader_pickfiles" href="javascript:;" class="btn btn-success" data-upload="<?php echo site_url('product/doupload')?>">
											<i class="fa fa-plus"></i> Select Files </a>
										<a id="tab_images_uploader_uploadfiles" href="javascript:;" class="btn btn-primary">
										<i class="fa fa-share"></i> Upload Files </a>
									</div>
									<div class="row">
										<div id="tab_images_uploader_filelist" class="col-md-12 col-sm-12"> </div>
									</div>
									<table class="table table-bordered table-hover" id="listImage">
										<thead>
											<tr role="row" class="heading">
												<th width="8%"> Addtional Image </th>
												<th width="25%"> Label </th>
												<th width="10%"> </th>
											</tr>
										</thead>
										<tbody>
											                                                                                                                              
										</tbody>
									</table>
								</div>
							</div>
							<?php
							echo form_close();
							?>
						 </div>
					</div>
				</div>
			</div>
		</div>
	</section>
   
</div>


		
		
    