// $("#status").on('change', function(){
// 	var status_terpilih = $(this).val();
// 	$("#export").attr("href","mahasiswa/download/"+status_terpilih);
// 	$.ajax({
// 		url:'http://localhost/MyProject/Tugas-Akhir-v2/admin_prodi/mahasiswa/status_mahasiswa',
// 		method:'POST',
// 		data:'status='+status_terpilih,
// 		success:function(data_mahasiswa){
// 			console.log(data_mahasiswa)
// 			$("#data-mahasiswa").html(data_mahasiswa);
// 		}
// 	})
// })

// $("#export").attr("href","mahasiswa/download/");
// $.ajax({
// 	url:'http://localhost/MyProject/Tugas-Akhir-v2/admin_prodi/mahasiswa/status_mahasiswa',
// 	success:function(data_mahasiswa){
// 		console.log(data_mahasiswa)
// 		$("#data-mahasiswa").html(data_mahasiswa);
// 	}
// })

$("#export").on('click',function(e){
	var status = $("#status option:selected").val();
	var tahun = $("#tahun option:selected").val();
	$("#export").attr("href","mahasiswa/download"+"/"+status+"/"+tahun);
})