	
<!DOCTYPE html>
<!-- saved from url=(0029)http://bootswatch.com/amelia/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <head>
        <title>.:: Sistem Informasi Manajemen Sekolah (SIMaK) ::.</title>
        </style>
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.css" media="screen">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/js/jquery/jquery-ui.css" />

        <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery.validate.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery.validate.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/bootswatch.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery/jquery-ui.js"></script>
        <script src="<?php echo base_url('assets/js/jquery-1.8.3.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/bootstrap.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/tinymce/tinymce.min.js'); ?>"></script>
        <script type="text/javascript">
            // <![CDATA[
            $(document).ready(function () {
                $(function () {
                    $( "#kode_surat" ).autocomplete({
                        source: function(request, response) {
                            $.ajax({ 
                                url: "<?php echo site_url('admin/get_klasifikasi'); ?>",
                                data: { kode: $("#kode_surat").val()},
                                dataType: "json",
                                type: "POST",
                                success: function(data){
                                    response(data);
                                }    
                            });
                        },
                    });
                });
		
                $(function () {
                    $( "#dari" ).autocomplete({
                        source: function(request, response) {
                            $.ajax({ 
                                url: "<?php echo site_url('admin/get_instansi_lain'); ?>",
                                data: { kode: $("#dari").val()},
                                dataType: "json",
                                type: "POST",
                                success: function(data){
                                    response(data);
                                }    
                            });
                        },
                    });
                });
		
		
                $(function() {
                    $( "#tgl_surat" ).datepicker({
                        changeMonth: true,
                        changeYear: true,
                        dateFormat: 'yy-mm-dd'
                    });
                });
            });
            // ]]>
        </script>
</head>

<body style="">
    <?php echo $_menu ?>
    <div class="container">


        <div class="page-header" id="banner">
            <div class="row">
                <div class="" style="padding: 15px 15px 0 15px;">
                    <div class="well well-sm">
                        <img src="upload/" class="thumbnail span3" style="display: inline; float: left; margin-right: 20px; width: 100px; height: 100px">
                        <h2 style="margin: 15px 0 10px 0; color: #000;"></h2>
                        <div style="color: #000; font-size: 16px; font-family: Tahoma" class="clearfix"><b>Alamat : </b></div>
                    </div>
                </div>
            </div>
        </div>


        <?php echo $_content ?>
        <?php echo $_footer ?>

    </div>

    <script src="<?php echo base_url('assets/js/holder.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap-datepicker.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/application.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/plugins/metisMenu/jquery.metisMenu.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/plugins/morris/raphael-2.1.0.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/plugins/morris/morris.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/sb-admin.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/demo/dashboard-demo.js'); ?>"></script>    
</body>
</html>