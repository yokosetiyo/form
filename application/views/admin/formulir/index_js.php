<script src=<?= base_url("assets/js/select2/select2.full.min.js") ?>></script>
<script src=<?= base_url("assets/js/datepicker/date-picker/datepicker.js") ?>></script>
<script src=<?= base_url("assets/js/datepicker/date-picker/datepicker.en.js") ?>></script>

<script src=<?= base_url("assets/js/datatable/datatables/jquery.dataTables.min.js") ?>></script>

<script type="text/javascript">
    $( document ).ready(function() {
        $(`#jenis_kelamin`).select2({
            placeholder: "Pilih jenis kelamin"
        });
        $(`#pendidikan`).select2({
            placeholder: "Pilih pendidikan terakhir"
        });
        $(`#tanggal_lahir`).datepicker({
            language: 'en',
            dateFormat: 'yyyy-mm-dd'
        })
    });

    const FORM_URL = "http://setiyo.test/form/admin/formulir/simpan";
    $(`#form_biodata`).submit(function (event) {
        var formData = {
            id_biodata: $(`#id_biodata`).val(),
            nama: $(`#nama`).val(),
            jenis_kelamin: $(`#jenis_kelamin`).val(),
            tempat_lahir: $(`#tempat_lahir`).val(),
            tanggal_lahir: $(`#tanggal_lahir`).val(),
            no_hp: $(`#no_hp`).val(),
            email: $(`#email`).val(),
            pendidikan: $(`#pendidikan`).val(),
            jurusan: $(`#jurusan`).val(),
            alamat: $(`#alamat`).val()
        };
        $(`#btn_submit`).prop('disabled',true);

        $.ajax({
            type: 'POST',
            url: FORM_URL,
            data: formData,
            dataType: 'JSON',
            encode: true
        }).done(function (data) {
            if(data.status) {
                swal("Berhasil!", data.message, "success");
                tabel.ajax.reload();
                $(`#form_biodata`).trigger("reset");
                $(`#form_biodata select`).trigger("change");
                // $.notify(
                // {
                //     title: data.message,
                //     message: 'Akan dialihkan ke halaman dashboard...'
                // },
                // {
                //     type: 'success',
                //     allow_dismiss:false,
                //     newest_on_top:false ,
                //     mouse_over:false,
                //     showProgressbar:false,
                //     spacing:10,
                //     timer:1000,
                //     placement:{
                //         from:'top',
                //         align:'right'
                //     },
                //     offset:{
                //         x:30,
                //         y:30
                //     },
                //     delay:500 ,
                //     z_index:10000,
                //     animate:{
                //         enter:'animated bounce',
                //         exit:'animated bounce'
                //     }
                // });
                // setTimeout(function () {
                //     window.location.href = data.url;
                // },1500)
                $(`#btn_submit`).prop('disabled',false);
            } else {
                swal("Gagal!", data.message, "error");
                $(`#btn_submit`).prop('disabled',false);
            }
        });
        event.preventDefault();
    });

    var tabel = $('#example').DataTable({
        processing: true,
        serverSide: true,
        ajax: {
            url : 'http://setiyo.test/form/admin/formulir/data',
            type: 'post'
        },
    });

    function ambildata(id)
    {
        $.ajax({
            type: 'GET',
            url: 'http://setiyo.test/form/admin/formulir/ambildata',
            data: {
                id: id
            },
            dataType: 'JSON',
            encode: true
        }).done(function (data) {
            if(data.status) {
                $(`#id_biodata`).val(data.data.id_biodata);
                $(`#nama`).val(data.data.nama);
                $(`#jenis_kelamin`).select2('val',data.data.jenis_kelamin);
                $(`#tempat_lahir`).val(data.data.tempat_lahir);
                $(`#tanggal_lahir`).val(data.data.tanggal_lahir).change();
                $(`#no_hp`).val(data.data.no_hp);
                $(`#email`).val(data.data.email);
                $(`#pendidikan`).val(data.data.pendidikan).trigger('change');
                $(`#jurusan`).val(data.data.jurusan);
                $(`#alamat`).val(data.data.alamat);
                document.getElementById("judul_halaman").scrollIntoView();
                // swal("Berhasil!", data.message, "success");
                // tabel.ajax.reload();
            } else {
                swal("Gagal!", data.message, "error");
            }
        });
    }

    function hapus(id) {
        swal({
            title: "Hapus data ini?",
            // text: "Once deleted, you will not be able to recover this imaginary file!",
            icon: "warning",
            buttons: {
                cancel: "Tidak",
                Ya: true
            },
            dangerMode: true,
        })
        .then((value) => {
            if (value) {
                $.ajax({
                    type: 'GET',
                    url: 'http://setiyo.test/form/admin/formulir/hapus',
                    data: {
                        id: id
                    },
                    dataType: 'JSON',
                    encode: true
                }).done(function (data) {
                    if(data.status) {
                        swal("Berhasil!", data.message, "success");
                        tabel.ajax.reload();
                    } else {
                        swal("Gagal!", data.message, "error");
                    }
                });
                // swal("Poof! Your imaginary file has been deleted!", {
                //     icon: "success",
                // });
                // location.href = '<?= base_url($this->role_user."/dashboard/logout") ?>';
            }
            // else {
            //     swal("Your imaginary file is safe!");
            // }
        })
    }
</script>