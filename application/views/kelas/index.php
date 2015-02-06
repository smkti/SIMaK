


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
                            <button type="submit" class="btn-info" style="padding:13px;" id="tambah"><i class="icon-plus-sign icon-white"> </i> Tambah Data</button>
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

    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Kelas</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>
            <?php
            if (empty($data)) {
                echo "<tr><td colspan='4'  style='text-align: center; font-weight: bold'>--Data tidak ditemukan--</td></tr>";
            } else {
                $no = ($this->uri->segment(4) + 1);
                foreach ($data as $b) {
                    ?>
                    <tr>
                        <td><?php echo $b->kode; ?></td>
                        <td><?= $b->nama ?></td>
                        <td><?= $b->uraian ?></td>
                    </tr>
                    <?php
                    $no++;
                }
            }
            ?>
        </tbody>
    </table>
    <center><ul class="pagination"><?php //echo $pagi;                 ?></ul></center>
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
                <label>Nama Kelas</label>
                    <input type="text" name="nama_kelas" id="caribuku" class="form-control" placeholder="Nama Kelas">                
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                <button type="button" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </div>
</div><!-- /.modal -->

<script>
    $(function(){
      
        $("#tambah").click(function(){
            $("#myModal2").modal("show");
        })
        
    })
</script>

