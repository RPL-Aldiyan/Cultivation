<?= $this->extend('layout/template'); ?>

<!DOCTYPE html>
<html lang="english">

<?= $this->section('content'); ?>
<!-- Hero Section Begin -->



<section class="hero">
    <div class="container">
        <div class="hero__slider owl-carousel">
            <!-- Hero Tempat Kuliner -->
            <?php foreach ($tempatkuliner as $tempatk) : ?>
                <div class="hero__items set-bg" data-setbg="/img/tempat-kuliner/<?= $tempatk['gambar']; ?>">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero__text">
                                <div class="bg">
                                    <div class="label"><?php echo $tempatk['kategori'] ?></div>
                                    <h2><?= $tempatk['nama']; ?></h2>
                                    <p>
                                        <?php
                                        if (strlen($tempatk['deskripsi']) > 120) {
                                            $deskripsi = substr($tempatk['deskripsi'], 0, 120) . '...';
                                        }
                                        echo $deskripsi; ?>
                                    </p>
                                    <a href="/tempat-kuliner/<?= $tempatk['slug']; ?>"><span>Detail</span> <i class="fa fa-angle-right"></i></a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<!-- Hero Section End -->

<!-- Product Section Begin -->
<section class="product spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="trending__product">
                    <div class="row">
                        <div class="col-lg-8 col-md-8 col-sm-8">
                            <div class="section-title">
                                <h4>Rating Tertinggi</h4>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="btn__all">
                                <a href="/TempatK/ratingTertinggi" class="primary-btn">Lihat Semua <span class="arrow_right"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <?php foreach ($tempatkuliner as $tempatk) : ?>
                            <?php if ($tempatk['rating'] == 5) { ?>
                                <div class="col-md-4 col-md-5 col-sm-5">
                                    <a href="/tempat-kuliner/<?= $tempatk['slug']; ?>">
                                        <div class="product__item">
                                            <div class="product__item__pic set-bg" data-setbg="/img/tempat-kuliner/<?= $tempatk['gambar']; ?>">
                                                <div class="ep">Rp.<?php echo $tempatk['harga_min'] ?> - <?php echo $tempatk['harga_max'] ?></div>
                                                <!-- <div class="comment"><i class="fa fa-comments"></i> 11</div> -->
                                                <div class="view"><i class="fa fa-star"></i>Rating <?php echo $tempatk['rating']; ?>/5</div>
                                            </div>
                                            <div class="product__item__text">
                                                <ul>
                                                    <li><?php echo $tempatk['kategori'] ?></li>
                                                </ul>
                                                <h5><a href="/tempat-kuliner/<?= $tempatk['slug']; ?>"><?php echo $tempatk['nama'] ?></a></h5>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <<?php } ?> <?php endforeach; ?> <div class="col-lg-4 col-md-6 col-sm-6">

                    </div>



                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-8">
            <div class="product__sidebar">
                <div class="product__sidebar__view">
                    <div class="section-title">
                        <h5>Paling Sering Dicari</h5>
                    </div>
                    <ul class="filter__controls">
                        <li class="Kenyang" data-filter="*">Day</li>
                        <li data-filter=".week">Week</li>
                        <li data-filter=".month">Month</li>
                        <li data-filter=".years">Years</li>
                    </ul>
                    <div class="filter__gallery">
                        <div class="product__sidebar__view__item set-bg mix day years" data-setbg="<?php echo base_url('/img/hero/baghdad.jpg'); ?>">
                            <div class="ep">Sekitar 12k/Menu</div>
                            <div class="view"><i class="fa fa-star"></i> 6.9/10</div>
                            <h5><a href="#">Starbuck</a></h5>
                        </div>
                        <div class="product__sidebar__view__item set-bg mix month week" data-setbg="<?php echo base_url('/img/hero/baghdad.jpg'); ?>">
                            <div class="ep">Sekitar 12k/Menu</div>
                            <div class="view"><i class="fa fa-star"></i> 6.9/10</div>
                            <h5><a href="#">Solaria</a></h5>
                        </div>
                        <div class="product__sidebar__view__item set-bg mix week years" data-setbg="<?php echo base_url('/img/hero/baghdad.jpg'); ?>">
                            <div class="ep">Sekitar 12k/Menu</div>
                            <div class="view"><i class="fa fa-star"></i> 6.9/10</div>
                            <h5><a href="#">Dunkin Donuts</a></h5>

                        </div>
                    </div>
                    <div class="product__sidebar__comment">
                        <div class="section-title">
                            <h5>Riview Terbaru</h5>
                        </div>
                        <div class="product__sidebar__comment__item">
                            <div class="product__sidebar__comment__item__pic">
                                <img src="<?php echo base_url('/img/sidebar/sidebar-baghdad.jpg'); ?>" alt="">
                            </div>
                            <div class="product__sidebar__comment__item__text">
                                <ul>
                                    <li>Kenyang</li>
                                    <li>Nyaman</li>
                                </ul>
                                <h5><a href="#">Ayam Baghdad</a></h5>
                                <span><i class="fa fa-star"></i> 6.900 kali dilihat</span>
                            </div>
                        </div>
                        <div class="product__sidebar__comment__item">
                            <div class="product__sidebar__comment__item__pic">
                                <img src="<?php echo base_url('/img/sidebar/sidebar-baghdad.jpg'); ?>" alt="">
                            </div>
                            <div class="product__sidebar__comment__item__text">
                                <ul>
                                    <li>Kenyang</li>
                                    <li>Nyaman</li>
                                </ul>
                                <h5><a href="#">Ayam Baghdad</a></h5>
                                <span><i class="fa fa-star"></i> 6.900 kali dilihat</span>
                            </div>
                        </div>
                        <div class="product__sidebar__comment__item">
                            <div class="product__sidebar__comment__item__pic">
                                <img src="<?php echo base_url('/img/sidebar/sidebar-baghdad.jpg'); ?>" alt="">
                            </div>
                            <div class="product__sidebar__comment__item__text">
                                <ul>
                                    <li>Kenyang</li>
                                    <li>Nyaman</li>
                                </ul>
                                <h5><a href="#">Ayam Baghdad</a></h5>
                                <span><i class="fa fa-star"></i> 6.900 kali dilihat</span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>


<!-- Product Section End -->
<?= $this->endSection('content'); ?>