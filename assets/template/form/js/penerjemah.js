$(document).ready(function(){
    $("#fakultas").on('change', function(){
        var id_fakultas = $(this).val();
        console.log(id_fakultas);
        $.ajax({
            url     : "http://localhost/MyProject/Tugas-Akhir-v2/admin/penerjemah/ajax_fakultas",
            method  : "POST",
            data    : {fakultas:id_fakultas},
            dataType: 'json',
            success  : function(hasil){

                var baris = "<option value=''>Pilih Program Studi</option>";
                for (i=0; i<hasil.length; i++)
                {
                    baris+=`<option value='`+hasil[i].id_program_studi+`'>`+hasil[i].nama_prodi_indonesia+`</option>`;
                }
                console.log(hasil);
                $("#prodi").html(baris);
            }
        })
        
    })
})

$(document).ready(function(){
    $("#prodi").on('change', function(){
        var prodi = $(this).val();
        console.log(prodi);
        $.ajax({
            url     : "http://localhost/MyProject/Tugas-Akhir-v2/admin/penerjemah/ajax_prodi",
            method  : "POST",
            data    : {prodi:prodi},
            dataType: 'json',
            success  : function(hasil){

                var baris = "";
                for (i=0; i<hasil.length; i++)
                {
                    baris+=
                    `<tr>
                    <td>`+(i+1)+`</td>
                    <td>`+hasil[i].nim+`</td>
                    <td>`+hasil[i].nama_mahasiswa+`</td>
                    <td>`+hasil[i].nama_fakultas+`</td>
                    <td>`+hasil[i].nama_prodi_indonesia+`</td>
                    <td>
                    <a href="penerjemah/detail/`+hasil[i].nim+`" class="btn btn-success notika-btn-success">Data telah diterjemahkan</a>
                    </td>
                    </tr>`;
                }
                console.log(hasil);
                $("#mahasiswa").html(baris);
            }
        })
        
    })
})