<div class="d-flex justify-content-center align-items-center" id="shop">
    <div class="container p-3 mt-5 mb-5">
        <h2 class="mt-5" data-aos="fade-down" data-aos-duration="1500">SHOPPING</h2>

        <div class="row mb-3 overflow-hidden">

            <?php foreach ($produk as $pro) : ?>
                <div class="col-lg-3 mt-3 " data-aos="fade-down" data-aos-duration="1800">
                    <div class="card border-0 rouded-0 p-3" style="width: 18rem; height: 28rem;">
                        <img src="assets/img/<?= $pro["gambar"]; ?>" class="card-img-top" width="120px" height="150px" alt="...">
                        <div class="card-body text-center">
                            <h5 class="card-title" data-aos="fade-down" data-aos-duration="1800"><?= $pro["nama"]; ?></h5>
                            <p class="card-text text-dark" data-aos="fade-right" data-aos-duration="2000"><?= $pro["desk"]; ?></p>
                            <a href="#" class="" data-aos="fade-up" data-aos-duration="1800"><?= $pro["harga"]; ?></a>
                        </div>
                        <button class="btn btn-dark" data-aos="fade-up" data-aos-duration="2100">BUY</button>
                    </div>
                </div>
            <?php endforeach; ?>



        </div>
    </div>
</div>