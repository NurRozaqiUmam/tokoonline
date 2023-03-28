<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
    <div class="container">
        <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
            <div class="col-first">
                <h1>Product Details</h1>
                <nav class="d-flex align-items-center">
                    <a href="<?php echo base_url('categories') ?>">Shop<span class="lnr lnr-arrow-right"></span></a>
                    <a href="">product-details</a>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- End Banner Area -->

<!--================Single Product Area =================-->
<div class="product_image_area">
    <div class="container">
        <?php foreach($barang as $brg):?>
            <div class="row s_product_inner">
                <div class="col-lg-6">
                    <div class="single-prd-item">
                        <img class="img-fluid" src="<?php echo base_url().'/uploads/'.$brg->gambar ?>" alt="">
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1">
                    <div class="s_product_text">
                        <h3><?php echo $brg->nama_produk?></h3>
                        <h2>Rp. <?php echo number_format($brg->harga_produk,0,',','.')?></h2>
                        <ul class="list">
                            <li><a><span>Category</span><?php echo $brg->nama_kategori?></a></li>
                            <li><a><span>In Stock</span><?php echo $brg->stok?></a></li>
                            <li><a class="active" href="#"><span>Brand</span><?php echo $brg->nama_tenant?></a></li>
                            
                        </ul>
                        <p><?php echo $brg->deskripsi?></p>
                        <div class="card_area d-flex align-items-center">
                            <a class="primary-btn" href="<?php echo base_url('categories/tambah_ke_keranjang/'.$brg->produkID )?>">Add to Cart</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php   endforeach?>
    </div>
</div>
<br>
<br>
<br>
<!--================End Single Product Area =================-->