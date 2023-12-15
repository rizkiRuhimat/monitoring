// $(document).ready(function() {
//     $('#myTable').DataTable();
// });

$(function () {
    $('.tombolTambahData').on('click', function () {
        console.log('ok');
        $('#formModalLabel').html('Tambah Data Config');
        $('.modal-footer button[type=submit]').html('Tambah Data');
        $('.modal-body form').attr('action', 'http://http://192.168.1.5:82/konfig/tambah')
        $('#operator').val('');
        $('#server').val('');
        $('#user_ssh').val('');
        $('#logfile').val('');
        $('#pathlog').val('');
        $('#status_err').val('');
        $('#service').val('');
        $('#vendor').val('');
        $('#url').val('');
        $('#port').val('');
        $('#fname').val('');
        $('#uname').val('');
        $('#upass').val('');
        $('#id').val()
    });


    $('.tampilEdit').on('click', function () {

        $('#ModalLabel').html('Edit Data Konfig');
        $('.modal-footer button[type=submit]').html('Edit Konfig');
        $('.modal-body form').attr('action', 'http://http://192.168.1.5:82/konfig/getUbahData')

        const id = $(this).data('id');

        $.ajax({
            url: 'http://http://192.168.1.5:82/konfig/getUbah',
            data: { id: id },
            method: 'POST',
            dataType: 'json',
            success: function (data) {
                $('#operator').val(data.opt);
                $('#server').val(data.srver);
                $('#user_ssh').val(data.ssh);
                $('#logfile').val(data.logf);
                $('#pathlog').val(data.pthlog);
                $('#status_err').val(data.sts_err);
                $('#service').val(data.svc);
                $('#vendor').val(data.vendor);
                $('#url').val(data.url);
                $('#port').val(data.port);
                $('#fname').val(data.fname);
                $('#uname').val(data.uname);
                $('#upass').val(data.upass);
            }
        });
    });
    $(document).ready(function () {
        $('#myTable').DataTable();
    });
});