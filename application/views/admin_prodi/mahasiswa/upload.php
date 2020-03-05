<div class="data-table-area">
  <div class="container">

  <!-- SweetAlert -->
  <div class="flash-data" data-flashdata="<?= $this->session->flashdata('gagal') ?>"></div>

    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-10 col-xs-10">
        <div class="breadcomb-list">
          <br><br><br><br>
          <div class="row">
            <div class="col-lg-10 col-md-10 col-md-offset-1">
              <div class="cmp-tb-hd" style="margin-top:-40px;margin-bottom:-20px">
                <h2>Upload Data Mahasiswa</h2>
                <p>Data yang digunakan harus menggunakan format excel (.xlxs atau .xls)</p>
              </div>
            </div>
          </div>
          <br><br>
          <form method="post" enctype="multipart/form-data">
            <div class="row">
              <div class="col-lg-10 col-md-10 col-md-offset-1">
                <div id="copyHere"></div>
                <input type="file" id="file" onchange="validationInputFile()" name="data" class="form-control" accept="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel">
              </div>
            </div>
            <br><br>
            <div class="row">
              <div class="col-lg-10 col-md-10 col-md-offset-1">
               <a href="<?= base_url('admin_prodi/mahasiswa') ?>" class="btn btn-danger notika-btn-danger waves-effect pull-right" style="margin-left:20px">Batal</a>
               <button type="submit" name="upload" value="upload" class="btn btn-success notika-btn-success waves-effect pull-right">Upload</button>
             </div>
           </form>
         </div>
         <br>
       </div>
     </div>
   </div>
 </div>

</div>
</div>
<br><br>


<!-- Sweet Alert -->
<script src="<?= base_url() ?>assets/template/login/vendor/jquery/jquery-3.2.1.min.js"></script>
<script src="<?= base_url('assets/template/form/') ?>js/sweetalert2.all.min.js"></script>

<script>
  const flashData = $('.flash-data').data('flashdata');
  if(flashData)
  {
    Swal.fire({
      icon: 'error',
      title: 'Upload Gagal',
      text: 'File tidak boleh kosong !',
      confirmButtonColor: '#d9534f',
      confirmButtonText: 'Tutup'
    });
  }
</script>

<!-- Input File Validation -->
<script>

  function validationInputFile(){
    var htmlFile  = document.getElementById("file");
    var copyHere  = document.getElementById("copyHere");
    var file      = document.getElementById("file").value;
    var extension = file.split('.').pop();
    var content   = `<input type="file" id="file" onchange="validationInputFile()" name="data" class="form-control" accept="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel">`;

    if (extension !== "xlsx" && extension !== "xls") {
      copyHere.insertAdjacentHTML("afterend",content); 
      htmlFile.remove();
    }
  }

</script>