<div class="about">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section_title_container text-center">
                    <h2 class="section_title">Galeri</h2>
                </div>
            </div>
        </div>
        <div class="row about_row">
            
            <?php foreach($galeri as $key => $value) { ?>
            <div class="col-lg-4 about_col about_col_left">
                <div class="about_item">
                    <div class="about_item_image"><img src="<?= base_url('sampul/'.$value->sampul) ?>" width="310px" height="200px"></div>
                    <div class="about_item_title"><a href="<?= base_url('home/detail_galeri/'.$value->id_galeri) ?>"><?= $value->nama_galeri ?></a></div>
                    <br><br>    
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</div>
