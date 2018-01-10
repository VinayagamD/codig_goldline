
<!--footer starts-->
<?php $this->load->view("layout/layout_footer");?>


<!--footer ends-->
<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>public/js/materialize.js"></script>
<script>
    $(document).ready(function () {
        $('.parallax').parallax();
    });
</script>
</body>
</html>