<!-- Head Starts-->
<?php $this->load->view("layout/header");?>
<!-- Head Ends-->
<!--Head Image-->
<div class="parallax-container">
    <div class="parallax"><img src="<?= $image?>" class="responsive-img"></div>
</div>
<div class="card row">
    <div class="s12   card-content ">
        <div class="  purple-text card-title"><h4><b class="#9c27b0 purple-text"><?= strtoupper($title);?></b></h4></div>


    </div>


</div>
<!--Head Image End-->
<!--View Starts-->
<?php $this->load->view($view);?>
<!--View Ends-->
<!--Contact us button starts-->
<?php $this->load->view("layout/layout_contact_us");?>
<!--Contact us button end-->
<!-- footer Starts-->
<?php $this->load->view("layout/footer");?>
<!-- footer Ends-->