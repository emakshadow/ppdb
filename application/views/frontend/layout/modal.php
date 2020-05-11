
<div class="portfolio-modal modal fade" id="portfolioModal1<?php echo $berita->id_berita; ?>" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="<?php echo base_url()?>assets/frontend/assets/img/close-icon.svg" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase"><?php echo $berita->judul; ?></h2>
                                   
                                     <br>
                                    <img class="img-fluid d-block mx-auto" src="<?php echo base_url().'assets/backend/berita/'.$berita->file; ?>" alt="" />
                                    <p style="text-align : left;"><?php echo $berita->isi ?></p>
                                     <p class="item-intro text-muted"><?php echo $berita->tanggal ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <div class="modal hide fade" id="modalpop" tabindex="-1" role="dialog">

  <div class="modal-dialog" role="document" style="margin-top: 10%">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">INFO TERKINI</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row text-center">
        <div class="col-md-5">

            <img src="<?php echo base_url()?>assets/frontend/assets/img/custom/logo-orang2.jpg">
        </div>
        <div class="col-md-6" >
        <br>
        <p class="speech-bubble "><?php foreach($informasi as $terkini){
            echo $terkini->info_terkini;
        }?><br></p>
        </div>
       </div>
      </div>
     
    </div>
  </div>
</div>
