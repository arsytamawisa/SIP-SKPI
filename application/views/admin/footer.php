        <script src="<?= base_url('assets/template/form/') ?>js/vendor/jquery-1.12.4.min.js"></script>
        <script src="<?= base_url('assets/template/form/') ?>js/bootstrap.min.js"></script>
        <script src="<?= base_url('assets/template/form/') ?>js/wow.min.js"></script>
        <script src="<?= base_url('assets/template/form/') ?>js/jquery-price-slider.js"></script>
        <script src="<?= base_url('assets/template/form/') ?>js/owl.carousel.min.js"></script>
        <script src="<?= base_url('assets/template/form/') ?>js/jquery.scrollUp.min.js"></script>
        <script src="<?= base_url('assets/template/form/') ?>js/meanmenu/jquery.meanmenu.js"></script>
        <script src="<?= base_url('assets/template/form/') ?>js/counterup/jquery.counterup.min.js"></script>
        <script src="<?= base_url('assets/template/form/') ?>js/counterup/waypoints.min.js"></script>
        <script src="<?= base_url('assets/template/form/') ?>js/counterup/counterup-active.js"></script>
        <script src="<?= base_url('assets/template/form/') ?>js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
        <script src="<?= base_url('assets/template/form/') ?>js/sparkline/jquery.sparkline.min.js"></script>
        <script src="<?= base_url('assets/template/form/') ?>js/sparkline/sparkline-active.js"></script>
        <script src="<?= base_url('assets/template/form/') ?>js/flot/jquery.flot.js"></script>
        <script src="<?= base_url('assets/template/form/') ?>js/flot/jquery.flot.resize.js"></script>
        <script src="<?= base_url('assets/template/form/') ?>js/flot/flot-active.js"></script>
        <script src="<?= base_url('assets/template/form/') ?>js/knob/jquery.knob.js"></script>
        <script src="<?= base_url('assets/template/form/') ?>js/knob/jquery.appear.js"></script>
        <script src="<?= base_url('assets/template/form/') ?>js/knob/knob-active.js"></script>
        <script src="<?= base_url('assets/template/form/') ?>js/jasny-bootstrap.min.js"></script>
        <script src="<?= base_url('assets/template/form/') ?>js/icheck/icheck.min.js"></script>
        <script src="<?= base_url('assets/template/form/') ?>js/icheck/icheck-active.js"></script>
        <script src="<?= base_url('assets/template/form/') ?>js/rangle-slider/jquery-ui-1.10.4.custom.min.js"></script>
        <script src="<?= base_url('assets/template/form/') ?>js/rangle-slider/jquery-ui-touch-punch.min.js"></script>
        <script src="<?= base_url('assets/template/form/') ?>js/rangle-slider/rangle-active.js"></script>
        <script src="<?= base_url('assets/template/form/') ?>js/datapicker/bootstrap-datepicker.js"></script>
        <script src="<?= base_url('assets/template/form/') ?>js/datapicker/datepicker-active.js"></script>
        <script src="<?= base_url('assets/template/form/') ?>js/bootstrap-select/bootstrap-select.js"></script>
        <script src="<?= base_url('assets/template/form/') ?>js/color-picker/farbtastic.min.js"></script>
        <script src="<?= base_url('assets/template/form/') ?>js/color-picker/color-picker.js"></script>
        <script src="<?= base_url('assets/template/form/') ?>js/notification/bootstrap-growl.min.js"></script>
        <script src="<?= base_url('assets/template/form/') ?>js/notification/notification-active.js"></script>
        <script src="<?= base_url('assets/template/form/') ?>js/summernote/summernote-updated.min.js"></script>
        <script src="<?= base_url('assets/template/form/') ?>js/summernote/summernote-active.js"></script>
        <script src="<?= base_url('assets/template/form/') ?>js/dropzone/dropzone.js"></script>
        <script src="<?= base_url('assets/template/form/') ?>js/wave/waves.min.js"></script>
        <script src="<?= base_url('assets/template/form/') ?>js/wave/wave-active.js"></script>
        <script src="<?= base_url('assets/template/form/') ?>js/chosen/chosen.jquery.js"></script>
        <script src="<?= base_url('assets/template/form/') ?>js/chat/jquery.chat.js"></script>
        <script src="<?= base_url('assets/template/form/') ?>js/todo/jquery.todo.js"></script>
        <script src="<?= base_url('assets/template/form/') ?>js/plugins.js"></script>
        <script src="<?= base_url('assets/template/form/') ?>js/data-table/jquery.dataTables.min.js"></script>
        <script src="<?= base_url('assets/template/form/') ?>js/data-table/data-table-act.js"></script>
        <script src="<?= base_url('assets/template/form/') ?>js/main.js"></script>
        <script src="<?= base_url('assets/template/form/') ?>js/sweetalert2.all.min.js"></script>
        <script src="<?= base_url('assets/template/form/') ?>js/informasi_tambahan.js"></script>
        <!-- <script src="<?= base_url('assets/template/form/') ?>js/penerjemah.js"></script> -->


        <!-- Validasi Input -->
        <script>
            const validasi = $('.flash-data').data('flashdata');
            if(validasi == "gagal")
            {
                Swal.fire({
                    icon: 'error',
                    title: 'Gagal Input Data',
                    text: 'Cek kembali data yang anda inputkan',
                    confirmButtonColor: '#d9534f',
                    confirmButtonText: 'Tutup'
                });
            }
        </script>


        <!-- Gagal Input Data -->
        <script>
            const flashDataInput = $('.flash-data').data('flashdata');
            if(flashDataInput == "gagal_tambah")
            {
                const modaltambah = $('#modaltambah');
                if (modaltambah) 
                {
                    modaltambah.click(); 
                }
                Swal.fire({
                    icon: 'error',
                    title: 'Gagal Input Data',
                    text: 'Cek kembali data yang anda inputkan',
                    confirmButtonColor: '#d9534f',
                    confirmButtonText: 'Tutup'
                });
            }
        </script>


        <!-- Gagal Edit Data -->
        <script>
            const flashDataEdit = $('.flash-data').data('flashdata');

            if(flashDataEdit == "gagal_edit")
            {
                var modaledit = $('#modaledit');
                if (modaledit) 
                {
                    modaledit.click(); 
                }
                Swal.fire({
                    icon: 'error',
                    title: 'Gagal Input Data',
                    text: 'Cek kembali data yang anda inputkan',
                    confirmButtonColor: '#d9534f',
                    confirmButtonText: 'Tutup'
                });
            }
        </script>


        <!-- Ganti Password -->
        <script>
            const flashData = $('.flash-data').data('flashdata');
            if(flashData == "0")
            {
                Swal.fire({
                    icon: 'error',
                    title: 'Gagal ubah password',
                    text: 'Konfirmasi Password Salah',
                    confirmButtonColor: '#d9534f',
                    confirmButtonText: 'Tutup'
                });
            }
            else if(flashData == "1")
            {
                Swal.fire({
                    icon: 'error',
                    title: 'Gagal ubah password',
                    text: 'Password Lama Tidak Sesuai',
                    confirmButtonColor: '#d9534f',
                    confirmButtonText: 'Tutup'
                });
            }
        </script>
        

        <!-- Alert Hapus -->
        <script>
            $('.hapus').on('click', function(e){
                e.preventDefault();
                const link = $(this).attr('href');
                Swal.fire({
                  title: 'Konfirmasi',
                  text: "Data akan dihapus?",
                  icon: 'warning',
                  showCancelButton: true,
                  confirmButtonColor: '#d9534f',
                  cancelButtonColor: '#00c292',
                  confirmButtonText: 'Hapus',
                  cancelButtonText: 'Tidak'
              }).then((result) => {
                  if (result.value) {
                    document.location.href = link;
                }
            })
          });
      </script>


      <script>

        // FlashData Effect
        setTimeout(function()
        {
            $('#flashData').slideUp(1000, function(){
                $(this).remove(); 
            }); 
        },3000);

        // Autofocus Input Modal
        $('#myModal1').on('shown.bs.modal', function() 
        {
            $('#input1').focus();
        });

        //  Input otomatis berubah
        $("#input1").change(function(){
            $("#input_1").val($("#input1").val());
        });

        $("#input1").keyup(function(){
            $("#input_1").val($("#input1").val());
        });


        // Otomatis input kualifikasi dan lanjutan
        $("#jenjang").change(function(){
            if($("#jenjang").val() == "Diploma")
            {
                $("#kualifikasi").val("Level 5");
                $("#lanjutan").val("Sarjana");
            } 
            else if($("#jenjang").val() == "Sarjana")
            {
                $("#kualifikasi").val("Level 6");
                $("#lanjutan").val("Magister");
            } 
            else if($("#jenjang").val() == "Magister")
            {
                $("#kualifikasi").val("Level 8");
                $("#lanjutan").val("Doktor");
            } 
            else
            {
                $("#kualifikasi").val("Level 9");
                $("#lanjutan").val("");
            }
        });

    </script>

</body>

</html>