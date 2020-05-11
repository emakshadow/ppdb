 <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">BERITA PPDB</h2>
                    <h3 class="section-subheading text-muted">Info Dan Berita Terbaru Seputar PPDB</h3>
                </div>
                      <p id="content">
                <div class="row">
                    <?php 
                    foreach ($berita as $berita) { 
                  ?>
                       
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1<?php echo $berita->id_berita; ?>"
                                ><div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" style="width:100%; height: 100%; max-height: 200px; max-width:600px;" src="<?php echo base_url().'assets/backend/berita/'.$berita->file; ?>" alt=""
                            /></a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading"><?php echo $berita->judul ?></div>
                                <div class="portfolio-caption-subheading text-muted"><?php echo  substr($berita->isi, 0, 15); ?></div>
                                 <p class="item-intro text-muted"><?php echo $berita->tanggal ?></p>
                            </div>
                        </div>
                    </div>
                    <?php 
                        include(APPPATH.'views/frontend/layout/modal.php');
                } ?>
                    <!-- row -->
                </div>
        </p>
        <p id="pagination-here"></p>
  
    
            </div>
        </section>