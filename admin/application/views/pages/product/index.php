		 <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Produk</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Produk</li>
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
								<a href="<?php echo site_url( 'product/add')?>" class="btn btn-success btn-sm">
									<i class="fa fa-plus"></i> Tambah </a>
								<a href="javascript:;" class="btn btn-warning btn-sm btn-edit">
									<i class="fa fa-pencil"></i> Edit</a>
								<a href="#" class="btn btn-danger btn-sm btn-delete">
									<i class="fa fa-remove"></i> Hapus</a>
							</div>
						</div>
		 				<div class="card-body">
							<table class="table table-striped table-hover table-bordered dataTable no-footer" id="datatable_ajax">
								<thead>
									<tr role="row" class="heading">
										<th width="2%">
											<label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
												<input type="checkbox" class="group-checkable" data-set="#sample_2 .checkboxes" />
												<span></span>
											</label>
										</th>										
										<th width="10%">Image</th>
										<th width="60%">Nama Produk</th>
										<th width="20%">Harga</th>
										<th width="10%">Status</th>
									</tr>                                                        
								</thead>
								<tbody> 
								</tbody>
							</table>
						 </div>
					</div>


				</div>
			</div>
		</div>
	</section>
   
</div>


		
		
    