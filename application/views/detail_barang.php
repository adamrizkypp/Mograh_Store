<div class="container">
	<div class="card">
	  <div class="card-header">
	    Detail Produk
	  </div>
	  <div class="card-body">
	  	
	  	<?php foreach($barang as $brg): ?>
	  	<div class="row">
	  		<div class="col-md-4">
	  			<img src="<?php echo base_url().'/uploads/'.$brg->gambar ?>" class="card-img-top">
	  		</div>
	  		<div class="col-md-8">
	  			<table class="table">
	  				<tr>
	  					<td>Nama Produk</td>
	  					<td><strong><?php echo $brg->nama_brg ?></strong></td>
	  				</tr>

	  				<tr>
	  					<td>Keterangan</td>
	  					<td><strong><?php echo $brg->keterangan ?></strong></td>
	  				</tr>	  	

	  				<tr>
	  					<td>Stok</td>
	  					<td><strong><?php echo $brg->stok ?></strong></td>
	  				</tr>

	  				<tr>
	  					<td>Harga</td>
	  					<td><strong><div class="btn btn-sm btn-success">Rp. <?php echo number_format($brg->harga,0,',','.')?></div></strong></td>
	  				</tr>	  
	  								  		
	  			</table>
	  				<?php echo anchor('home/tambah_ke_keranjang/' .$brg->id_brg, '<div class="btn btn-sm btn-primary"> Tambah ke Keranjang </div>') ?>
	  				<?php echo anchor('home/index/', '<div class="btn btn-sm btn-danger"> Kembali </div>') ?>
	  		</div>
	  	</div>
	  	<?php endforeach; ?>
	  </div>
	</div>
</div>