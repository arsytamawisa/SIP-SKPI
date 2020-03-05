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
        <script src="<?= base_url('assets/template/form/') ?>js/main.js"></script>
        <script src="<?= base_url('assets/template/form/') ?>js/sweetalert2.all.min.js"></script>
        <script src="<?= base_url('assets/template/form/') ?>js/informasi_tambahan.js"></script>

        <script>

            // Autofocus input modal
            $('#myModal1').on('shown.bs.modal', function() 
            {
                $('#input1').focus();
            });


            // Alert Hapus
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

            // Flash Data Effect
            setTimeout(function()
            {
                $('#flashData').slideUp(1000, function(){
                    $(this).remove(); 
                }); 
            },3000);
            
        </script>
        
</body>
</html>