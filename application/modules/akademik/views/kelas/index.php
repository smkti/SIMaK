<div class="clearfix">
    <div class="row">
        <div class="col-lg-12">

            <div class="navbar navbar-inverse">
                <div class="container">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="#">Pengaturan Kelas</a>
                    </div>
                    <div class="navbar-collapse collapse navbar-inverse-collapse" style="margin-right: -20px">
                        <ul class="nav navbar-nav">
                            <a href="#myModal2" role="button" class="btn btn-info btn-lg" data-toggle="modal"><i class="icon-plus-sign icon-white"> </i> Tambah Data</a>
                        </ul>

                        <ul class="nav navbar-nav navbar-right">
                            <form class="navbar-form navbar-left" method="post" action="<?= base_URL() ?>admin/klas_surat/cari">
                                <input type="text" class="form-control" name="q" style="width: 200px" placeholder="Kata kunci pencarian ..." required>
                                <button type="submit" class="btn btn-danger"><i class="icon-search icon-white"> </i> Cari</button>
                            </form>
                        </ul>
                    </div><!-- /.nav-collapse -->
                </div><!-- /.container -->
            </div><!-- /.navbar -->

        </div>
    </div>

    <?php echo $this->session->flashdata("k"); ?>

    <table class="table table-bordered table-hover" width="50%">
        <thead>
            <tr>
                <th width="20%">No</th>
                <th width="30%">Nama Kelas</th>
                <th widht="50%">Aksi</th>
            </tr>
        </thead>

        <tbody>
            <?php
            if (empty($data_kelas)) {
                echo "<tr><td colspan='4'  style='text-align: center; font-weight: bold'>--Data tidak ditemukan--</td></tr>";
            } else {
                $no = 1;
                foreach ($data_kelas as $b) {
                    ?>
                    <tr>
                        <td align="center"><?= $no; ?></td>
                        <td align="center"><?= $b->nama_kelas ?></td>
                        <td align="center"> 
                            <div class="btn-group">
                                <a href="<?= base_URL() ?>admin/surat_masuk/edt/<?= $b->id_kelas ?>" class="btn btn-success btn-sm" title="Edit Data"><i class="icon-edit icon-white"> </i> Rubah</a>
                                <a href="<?= base_URL() ?>admin/surat_masuk/del/<?= $b->id_kelas ?>" class="btn btn-warning btn-sm" title="Hapus Data" onclick="return confirm('Anda Yakin..?')"><i class="icon-trash icon-remove">  </i> Hapus</a>			
                                <a href="<?= base_URL() ?>admin/surat_disposisi/<?= $b->id_kelas ?>" class="btn btn-default btn-sm"  title="Disposisi Surat"><i class="icon-trash icon-list"> </i> Lihat </a></td>
                        </div>
                    </tr>
                    <?php
                    $no++;
                }
            }
            ?>
        </tbody>
    </table>
    <center><ul class="pagination"><?php //echo $pagi;             ?></ul></center>
</div>



<!-- Modal -->
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myModalLabel">Tambah Data Kelas</h4>
            </div>

            <div class="modal-body">
                <?php echo validation_errors(); ?>
                <label>Nama Kelas</label>
                <input type="text" name="id" id="idkelas" class ="form_control" value="">
                <input required type="text" name="nama_kelas" id="nama_kelas" class="form-control"  placeholder="Nama Kelas">                
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                <button type="button" id="simpan" class="btn btn-primary" data-dismiss="modal">Simpan</button>
            </div>
        </div>
    </div>
</div><!-- /.modal -->

<script>
    $(function(){
      
        $("#tambah").click(function(){
            $("#myModal2").modal("show");
        })
        
        $("#simpan").click(function(){
            var nama_kelas=$("#nama_kelas").val();
            if (nama_kelas=="") {
                //code
                alert("Nama Kelas Masih Kosong");
                return false;
            }else {
                $.ajax({
                    url:"<?php echo site_url('akademik/kelas/tambah'); ?>",
                    type:"POST",
                    data:"nama_kelas="+nama_kelas,
                    cache:false,
                    success:function(html){
                        $('form').goValidate();
                        alert("Penambahan Data Berhasil");
                        location.reload();
                    }
                })    
            }
            
        })
        
    })
</script>
