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
								<li class="active">
									<a href="#tab_general" data-toggle="tab"> General </a>
								</li>
								<li>
									<a href="#tab_meta" data-toggle="tab"> Data </a>
								</li>
								<li>
									<a href="#tab_discount" data-toggle="tab"> Discount </a>
								</li>
								<li>
									<a href="#tab_images" data-toggle="tab"> Images </a>
								</li>
								<li>
									<a href="#tab_media" data-toggle="tab"> Document </a>
								</li>
								
								<li>
									<a href="#tab_reviews" data-toggle="tab"> Reviews
										<span class="badge badge-success"> 3 </span>
									</a>
								</li>
							</ul>
							<div class="tab-content">
								<div class="tab-pane active" id="tab_general">
									<div class="form-body">
										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<label class="col-md-2 control-label"><?php echo $this->lang->line('clothes_name')?> :
														<span class="required"> * </span>
													</label>
													<div class="col-md-10">
														<input type="text" class="form-control" name="post_title" placeholder="" value="<?php echo  $clothes_name ?>"> </div>
												</div>
												
												
												<div class="form-group">
													<label class="col-md-2 control-label">Status:
														<span class="required"> * </span>
													</label>
													<div class="col-md-10">
														<select class="table-group-action-input form-control input-medium" name="post_status">
															<option value="">Select...</option>
															<option value="1" <?php echo $status==1 ? "selected":"" ?>>Published</option>
															<option value="0" <?php echo $status==0 ? "selected":"" ?>>Not Published</option>
														</select>
													</div>
												</div>
											</div>
											
										</div>
										
										
										<div class="form-group">
											<label class="col-md-2 control-label">Description:
												<span class="required"> * </span>
											</label>
											<div class="col-md-10">
												<textarea class="form-control mytiny" name="post_description"><?php echo  $clothes_description ?></textarea>
											</div>
										</div>
										<div class="form-group">
											<label class="col-md-2 control-label">Meta Title:</label>
											<div class="col-md-10">
												<input type="text" class="form-control maxlength-handler" name="meta_title" maxlength="100" placeholder="" value="<?php echo $meta_title ?>">
												<span class="help-block"> max 100 chars </span>
											</div>
										</div>
										<div class="form-group">
											<label class="col-md-2 control-label">Meta Keywords:</label>
											<div class="col-md-10"> 
												<textarea class="form-control maxlength-handler" rows="8" name="meta_keywords" maxlength="1000"><?php echo $meta_keywords?></textarea>
												<span class="help-block"> max 1000 chars </span>
											</div>
										</div>
										<div class="form-group">
											<label class="col-md-2 control-label">Meta Description:</label>
											<div class="col-md-10">
												<textarea class="form-control maxlength-handler" rows="8" name="meta_description" maxlength="255"><?php echo $meta_description?></textarea>
												<span class="help-block"> max 255 chars </span>
											</div>
										</div>
										<?php /*
										<div class="form-group">
											<label class="col-md-2 control-label">Short Description:
												<span class="required"> * </span>
											</label>
											<div class="col-md-10">
												<textarea class="form-control" name="product[short_description]"></textarea>
												<span class="help-block"> shown in product listing </span>
											</div>
										</div>
										
										<div class="form-group">
											<label class="col-md-2 control-label">Available Date:
												<span class="required"> * </span>
											</label>
											<div class="col-md-10">
												<div class="input-group input-large date-picker input-daterange" data-date="10/11/2012" data-date-format="mm/dd/yyyy">
													<input type="text" class="form-control" name="product[available_from]">
													<span class="input-group-addon"> to </span>
													<input type="text" class="form-control" name="product[available_to]"> </div>
												<span class="help-block"> availability daterange. </span>
											</div>
										</div> */ ?>
										
										<?php /*
										<div class="form-group">
											<label class="col-md-2 control-label">Tax Class:
												<span class="required"> * </span>
											</label>
											<div class="col-md-10">
												<select class="table-group-action-input form-control input-medium" name="product[tax_class]">
													<option value="">Select...</option>
													<option value="1">None</option>
													<option value="0">Taxable Goods</option>
													<option value="0">Shipping</option>
													<option value="0">USA</option>
												</select>
											</div>
										</div>
										
										*/ ?>
									</div>
								</div>
								<div class="tab-pane" id="tab_meta">
									<div class="form-body">
										<div class="form-group">
											<label class="col-md-2 control-label"><?php echo $this->lang->line('sku')?> :
												<span class="required"> * </span> 
											</label>
											<div class="col-md-4">
												<input type="text" class="form-control" name="sku" placeholder="" value="<?php echo $sku?>"> 
											</div>
										</div>
										<div class="form-group">
											<label class="col-md-2 control-label"><?php echo $this->lang->line('brand')?> :
												<span class="required"> * </span> 
											</label>
											<div class="col-md-4">
												<select class="form-control input-medium" name="brand_id">
												<?php foreach($brand as $b ){?> 
													<option value="<?php echo $b->id ?>"><?php echo $b->brand_name ?></option>
												<?php } ?>
												</select> 
											</div>
										</div>
										<div class="form-group">
											<label class="col-md-2 control-label"><?php echo $this->lang->line('price')?> :
												<span class="required"> * </span>
											</label>
											<div class="col-md-4">
												<input type="text" class="form-control" name="price" id="proprice" placeholder="" value="<?php echo  $price ?>"> </div> 
										</div>
										<div class="form-group">
											<label class="col-md-2 control-label"><?php echo $this->lang->line('weight')?> :
												<span class="required"> * </span>
											</label>
											<div class="col-md-4">
												<input type="text" class="form-control" name="weight" id="weight" placeholder="" value="<?php echo  $weight ?>">
												in Kg 
											</div> 
										</div>
										<div class="form-group">
											<label class="col-md-2 control-label">Kapasitas Timbang :
												<span class="required"> * </span>
											</label>
											<div class="col-md-4">
												<input type="text" class="form-control" name="kapasitas_timbang" id="weight" placeholder="" value="<?php echo  $kapasitas_timbang ?>">
											
											</div> 
										</div>
										<div class="form-group">
											<label class="col-md-2 control-label">Range Timbang  :
												<span class="required"> * </span>
											</label>
											<div class="col-md-4">
												<input type="text" class="form-control" name="range_timbang" id="weight" placeholder="" value="<?php echo  $range_timbang ?>">
											
											</div> 
										</div>
										<?php
										/*
										<div class="form-group">
											<label class="col-md-2 control-label"><?php echo $this->lang->line('clothes_for')?> :
												<span class="required"> * </span>
											</label>
											<div class="col-md-10">
												<select class="table-group-action-input form-control input-medium" name="gender">
													<option value="">Select...</option>
													<option value="1" <?php echo $clothes_for==1 ? "selected":"" ?> ><?php echo $this->lang->line('man')?></option>
													<option value="0" <?php echo $clothes_for==0 ? "selected":"" ?>><?php echo $this->lang->line('woman')?></option>
												</select>
											</div>
										</div> */ ?>
										<div class="form-group">
											<label class="col-md-2 control-label"><?php echo $this->lang->line('category')?> :
												<span class="required"> * </span>
											</label>
											<div class="col-md-10">
													
												<select name="category_id[]" class="form-control listcategory" multiple>
													
													<?php foreach($categories as $c){?>                                                                    
													<option value="<?php echo $c->category_id?>" selected="selected" data-id="<?php echo $c->id?>"><?php echo $c->category_name?></option>
														<?php } ?>
												</select>
												
											</div>
										</div>
										<?php
										/*
										<div class="form-group">
											<label class="col-md-2 control-label"><?php echo $this->lang->line('sub_category')?> :
												<span class="required"> * </span>
											</label>
													
											<div class="col-md-10">
												<select class="table-group-action-input form-control input-medium" name="sub_category_id" id="subcategory">
												<option value="">Select...</option>
												<?php
												foreach($subcategory as $s){
												?>
												<option value="<?php echo $s->id?>" <?php echo $s->id == $sub_category_id ? "selected":"" ?>><?php echo $s->category_name?></option>
												<?php
												}
												?>
												</select>
											</div>
										</div> */ ?>
										
									</div>
								</div>
								<div class="tab-pane" id="tab_discount">
									<table class="table table-bordered" id="listDiscount" data-value="">
										<thead>
											<tr>
												<th>Discount Persen (%)</th>
												<th>Discount Persen 2(%)</th>
												<th>Discount Price</th>
												<?php /*<th>Star Date</th>
												<th>End Date</th>*/ ?>
												<th>Level</th>
												<th></th>
											</tr>
										</thead>
										<tbody>
											<?php
											$no = 1; 
											$lastValue = 0;
											if (isset($discount)){
											?>
											<?php foreach($discount as $d){?>
											<tr id="row<?php echo $no ?>">
												<td><input type="hidden" name="did[]" value="<?php echo $d->id ?>" />
													<input type="number" name="discount_persen[]" value="<?php echo !empty($d->discount_persen) ? $d->discount_persen : '0'  ?>" data-value="pricediscount<?php echo $d->id ?>" class="form-control persenvalue" data-diskon2="diskon2<?php echo $d->id ?>" id="diskon1<?php echo $d->id ?>"/></td>
												<td>
													<input type="number" name="discount_persen2[]"  value="<?php echo !empty($d->discount_persen2) ? $d->discount_persen2 : '0' ?>" class="form-control persenvalue2" data-value="pricediscount<?php echo $d->id ?>" data-diskon1="diskon1<?php echo $d->id ?>" id="diskon2<?php echo $d->id ?>"/></td>
												<td><input type="text" name="discount_price[]" value="<?php echo $d->discount_price ?>" class="form-control" id="pricediscount<?php echo $d->id ?>" /></td>
												<?php
												/*
												<td><div class="input-group input-small date date-picker" data-date-format="yyyy-mm-dd" >
														<input type="text" class="form-control" name="star_date[]" value="<?php echo $d->star_date ?>" maxlength="10" >
														<span class="input-group-btn"> <button class="btn default" type="button"><i class="fa fa-calendar"></i></button></span>
													</div> 
												</td>
												<td><div class="input-group input-small date date-picker" data-date-format="yyyy-mm-dd" >
														<input type="text" class="form-control" name="end_date[]" value="<?php echo $d->end_date ?>" maxlength="10" >
														<span class="input-group-btn"><button class="btn default" type="button"> <i class="fa fa-calendar"></i></button></span>
													</div> 
												</td>
												*/?>
												<td>
													<select name="level_id[]" id="level_id" class="form-control">
														<?php foreach($levels as $l){?> 
														<option value="<?php echo $l->id ?>" <?php echo $l->id == $d->level_id ? "selected" : "" ?> ><?php echo $l->level_name ?></option>
														<?php } ?>
													</select>
												</td>
												
												<td>
													<a class="btn btn-red removediscount" data-url="<?php echo site_url('product/remdiscount')?>" data-rowid="<?php echo $no ?>" data-id="<?php echo $d->id ?>"><i class="fa fa-remove"></i></a>
												</td>
											</tr>
											<?php $no++; $lastValue=$d->id; } } ?>
										</tbody>
										<tfoot id="tfoot" data-value="<?php echo $lastValue?>">
											<tr>
												<td>
												<button type="button" class="btn btn-info" id="adddiscount"><i class="fa fa-plus"></i></button>
												</td>
											</tr>
										</tfoot>
									</table>
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
															<div class="fileinput fileinput-<?php echo $img ? "exists":"new" ?>" data-provides="fileinput">
																<div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;"> 
																	<?php
																	if ($img){
																		echo '<img src="'.$img .'" alt="" />';
																	}
																	?>
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
											<?php
											// id
											
											if ($images){
												
											foreach($images as $i){
											?>
											<tr id="<?php echo $i->id ?>">
												<td>
													<a href="<? echo ROOT . $i->image?>" class="fancybox-button" data-rel="fancybox-button">
														<img class="img-responsive" src="<?php echo ROOT . $i->image_thumbs?>" alt=""> </a>
												</td>
												<td>
													<input type="hidden" value="<?php echo $i->id ?>" name="imageid[]" />
													<input type="hidden" name="image[]" value=""<?php echo $i->image ?>"/>
													<input type="hidden" name="imagethumbs[]" value=""<?php echo $i->image_thumbs ?>"/>
													<input type="text" class="form-control" name="imageTitle[]" value="<?php echo $i->label?>"> 
												</td>                                                                                                                        
												<td>
													<a href="javascript:;" class="btn btn-default btn-sm removeimage" data-url="<?php echo site_url('product')?>" data-trid="<?php echo $i->id ?>" data-id="<?php echo $i->id ?>">
													<i class="fa fa-times"></i> Remove </a>
												</td>
											</tr>
											<?php } } ?>                                                                                                                                
										</tbody>
									</table>
								</div>
								
								<div class="tab-pane" id="tab_media">
									
									
									<div class="alert alert-success margin-bottom-10">
										<button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
										<i class="fa fa-warning fa-lg"></i> File type .jpg,.png,.jpeg,.pdf,.docx,.xlsx, Max 25 Mb. 
									</div>
									
									<div id="tab_media_uploader_container" class="text-align-reverse margin-bottom-10">
										<a id="tab_media_uploader_pickfiles" href="javascript:;" class="btn btn-success" data-upload="<?php echo site_url('product/doupload')?>">
											<i class="fa fa-plus"></i> Select Files </a>
										<a id="tab_media_uploader_uploadfiles" href="javascript:;" class="btn btn-primary">
										<i class="fa fa-share"></i> Upload Files </a>
									</div>
									<div class="row">
										<div id="tab_media_uploader_filelist" class="col-md-12 col-sm-12"> </div>
									</div>
									<table class="table table-bordered table-hover" id="listMedia">
										<thead>
											<tr role="row" class="heading">
												<th width="8%"> Addtional Document </th>
												<th width="25%"> Title </th>
												<th width="10%"> </th>
											</tr>
										</thead>
										<tbody>
											<?php
											// id
											
											if ($medias){
												
											foreach($medias as $i){
												$thumb = $i->path_document;
												if ( $i->file_ext=="xlsx"){
													$thumb = "assets/images/icon-excel.png";
												}
												if ( $i->file_ext=="docx"){
													$thumb = "assets/images/icon-word.png";
												}
												if ( $i->file_ext=="pdf"){
													$thumb = "assets/images/icon-pdf.png";
												}
											?>
											<tr id="<?php echo $i->id ?>">
												<td>
													<a href="<? echo ROOT . $i->path_document?>" class="fancybox-button" data-rel="fancybox-button">
														<img class="img-responsive" src="<?php echo ROOT . $thumb?>" alt=""> </a>
												</td>
												<td>
													<input type="hidden" value="<?php echo $i->id ?>" name="mediaid[]" />
													<input type="hidden" name="media[]" value="<?php echo $i->path_document ?>"/>
													<input type="text" class="form-control" name="mediaTitle[]" value="<?php echo $i->title?>" /> 
												</td>                                                                                                                        
												<td>
													<a href="javascript:;" class="btn btn-default btn-sm removeMedia" data-url="<?php echo site_url('product')?>" data-trid="<?php echo $i->id ?>" data-id="<?php echo $i->id ?>">
													<i class="fa fa-times"></i> Remove </a>
												</td>
											</tr>
											<?php } } ?>                                                                                                                                
										</tbody>
									</table>
								</div>
								<?php /*
								<div class="tab-pane" id="tab_options">
									<div class="row">
										<div class="col-md-3">
											<input type="hidden" name="optionId" value="" />
											<?php
											if (isset($prouctoption)){?> 
											<select name="option_id" class="form-control selectOption" multiple data-url="<?php echo site_url('options/loadform') ?>" id="listoption_id" data-delurl="<?php echo site_url('options/deleteOption') ?>" >
											<?php if ($prouctoption){?> 
												<option value="<?php echo $prouctoption->option_id ?>" selected data-option-product="<?php echo $prouctoption->product_option_id ?>" > <?php echo $prouctoption->option_name ?> </option>
											<?php } ?>
											</select>
											<?php } ?>
										</div>
										<div class="col-md-9" id="addOption">
											<?php echo isset($optionview)? $optionview : "" ?>
										</div>
									</div>
								</div> */?>
								<div class="tab-pane" id="tab_reviews">
									<div class="table-container">
										<table class="table table-striped table-bordered table-hover" id="datatable_reviews">
											<thead>
												<tr>
													<th style="width: 5%;">#</th>
													<th style="width: 15%;">User</th>
													<th style="width: 50%;">Comments</th>
													<th style="width: 15%;">Status</th>
													<th style="width: 15%;">Created At</th>
												</tr>
											</thead>
										</table>
										
									</div>
								</div>
								
							</div>
						 </div>
					</div>
				</div>
			</div>
		</div>
	</section>
   
</div>


		
		
    