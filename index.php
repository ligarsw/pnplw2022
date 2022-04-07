<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package pnplw2022
 */

get_header();
?>

<div class="d-flex justify-content-center ">
    <div class="container bg-merah">
        <div class="row justify-content-md-center">

            <div class="col-md-auto">
                <?php echo do_shortcode('[metaslider id="7998"]'); ?>

            </div>
        </div>
    </div>
</div>
<nav class="breadcrumb" aria-label="breadcrumb">

</nav>

<div class="container bg-merah">
    <div class="d-flex justify-content-center ">
        <img src=" <?php echo get_template_directory_uri(); ?>/img/motto.jpg">
    </div>
</div>

<div class="container bg-abu">
    <!-- Stack the columns on mobile by making one full-width and the other half-width -->


    <div class="row mx-md-n5">
        <div class="col-8 px-md-5">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="card border-0 bg-abu">
                            <div class="card-body">
                                <h4 class="card-title text-danger">Informasi Publik</h4>
                                <img class="card-img-auto"
                                    src=" <?php echo get_template_directory_uri(); ?>/img/courthouse.png">
                                <p class="card-text">Pengadilan Negeri Pelalawan memberikan informasi kepada publik
                                    mengenai hal-hal ataupun keadaan yang ada dilingkungan Pengadilan melalui sarana
                                    website</p>
                                <a href="#" class="btn btn-warning">Lebih Lanjut</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card border-0 bg-abu">
                            <div class="card-body">
                                <h4 class="card-title text-danger ">Index Berita</h4>
                                <img class="card-img-auto"
                                    src=" <?php echo get_template_directory_uri(); ?>/img/feather-pen.png">
                                <p class="card-text">Pengadilan Negeri Pelalawan memberikan informasi kepada publik
                                    mengenai hal-hal ataupun keadaan yang ada dilingkungan Pengadilan melalui sarana
                                    website</p>
                                <a href="#" class="btn btn-warning">Lebih Lanjut</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="card border-0 bg-abu">
                            <div class="card-body">
                                <h4 class="card- text-danger">Penelusuran Perkara</h4>
                                <img class="card-img-auto"
                                    src=" <?php echo get_template_directory_uri(); ?>/img/libra.png">
                                <p class="card-text">Para pencari keadilan dapat menelusuri perkara secara online pada
                                    aplikasi Sistem Informasi Penelusuran Perkara yang merupakan aplikasi resmi dari
                                    Mahkamah Agung</p>
                                <a href="https://sipp.pn-pelalawan.go.id/" class="btn btn-warning">Lebih Lanjut</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card border-0 bg-abu">
                            <div class="card-body">
                                <h4 class="card-title text-danger">Jadwal Sidang</h4>
                                <img class="card-img-auto"
                                    src=" <?php echo get_template_directory_uri(); ?>/img/gavel.png">
                                <p class="card-text">Pengadilan Negeri Pelalawan memberikan informasi kepada publik
                                    mengenai hal-hal ataupun keadaan yang ada dilingkungan Pengadilan melalui sarana
                                    website</p>
                                <a href="https://sipp.pn-pelalawan.go.id/list_jadwal_sidang"
                                    class="btn btn-warning">Lebih Lanjut</a>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="row">
                        <div class="col">
                            <h4 class="text-danger">Berita Mahkamah Agung</h4>
                        </div>
                        <div class="col">
                            <h4>Pengumuman Mahkamah Agung</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <?php echo do_shortcode("[feedzy-rss feeds='http://rss.pt-bengkulu.go.id/?mari' feed_title='no' size='15' max='5' summary='yes' summarylength='100']"); ?>
                        </div>
                        <div class="col">
                            <?php echo do_shortcode("[feedzy-rss feeds='http://rss.pt-bengkulu.go.id/?maripengumuman'  feed_title='no' size='15' max='5' summary='yes' summarylength='100']"); ?>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <h4>Berita BADILUM</h4>
                        </div>
                        <div class="col">
                            <h4>Pengumuman BADILUM</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <?php echo do_shortcode("[feedzy-rss feeds='http://rss.pt-bengkulu.go.id/?badiluminfo' feed_title='no' size='15' max='5' summary='yes' summarylength='100']"); ?>
                        </div>
                        <div class="col">
                            <?php echo do_shortcode("[feedzy-rss feeds='http://rss.pt-bengkulu.go.id/?badilumpengumuman' feed_title='no' size='15' max='5' summary='yes' summarylength='100']"); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="container">
                <div class="row p-3">
                    <h4 class="text-danger">Informasi Cepat</h4>
                </div>
                <div class="row">
                    <?php echo do_shortcode("[WPSM_AC id=6604]"); ?>
                </div>

                <div class="row">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src=" <?php echo get_template_directory_uri(); ?>/img/clock.png"
                                    class="img-fluid p-3" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title text-danger">Jam Layanan</h5>
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>Senin - Kamis</th>
                                                <th>Jumat</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>08.00 - 12.00<br>13.00 - 16.30</td>
                                                <td>08.00 - 11.30<br>13.00 - 17.00</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="row"></div>
                    <div class="card">
                        <div class="card-header">

                            <h4 class="text-danger">Video Profil</h4>

                        </div>
                        <div class="card-body">
                            <?php echo do_shortcode("[ytplayer id=7482]"); ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="card">
                        <div class="card-header">

                            <h4 class="text-danger">Video PTSP</h4>

                        </div>
                        <div class=" card-body">
                            <?php echo do_shortcode("[ytplayer id=7484]"); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="card border-0 bg-abu">
                    <div class="card-body">
                        <img class="card-img-top" alt="..."
                            src=" <?php echo get_template_directory_uri(); ?>/img/IKM.png" alt="...">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="card border-0 bg-abu">
                    <div class="card-body">
                        <img class="card-img-top" alt="..."
                            src=" <?php echo get_template_directory_uri(); ?>/img/IPAK.png" alt="...">
                    </div>
                </div>
            </div>

        </div>

    </div><!-- .container -->
    <?php

    get_footer();