var kompetisi 				= $("#kompetisi");
var pemakalah 				= $("#pemakalah");
var pembicara 				= $("#pembicara");
var penulis 				= $("#penulis");
var magang 					= $("#magang");
var kerja_praktek 			= $("#kerja_praktek");
var asisten_mata_kuliah 	= $("#asisten_mata_kuliah");
var asisten_pengabdian 		= $("#asisten_pengabdian");
var asisten_penelitian 		= $("#asisten_penelitian");
var kegiatan_internal 		= $("#kegiatan_internal");
var kegiatan_eksternal 		= $("#kegiatan_eksternal");
var pengurus		 		= $("#pengurus");
var toefl			 		= $("#toefl");
var pelatihan		 		= $("#pelatihan");
var kategori		 		= $("#kategori");


kompetisi.hide();
pemakalah.hide();
pembicara.hide();
penulis.hide();
magang.hide();
kerja_praktek.hide();
asisten_mata_kuliah.hide();
asisten_pengabdian.hide();
asisten_penelitian.hide();
kegiatan_internal.hide();
kegiatan_eksternal.hide();
pengurus.hide();
toefl.hide();
pelatihan.hide();
kategori.hide();


$("#status").on('change', function(){
	var status = $(this).val();
	
	if (status == "kompetisi") 
	{
		$(".form-text").hide();
		$("#"+status).show(1000);
		$("#"+status+" "+"input[type='text']").val('');
		$("#"+status+" "+"textarea").val('');
		$("#"+status+" "+"input[type='file']").val('');
		$("#"+status+" "+"input[type='radio']").attr('checked',false);
		pemakalah.hide();
		pembicara.hide();
		penulis.hide();
		magang.hide();
		kerja_praktek.hide();
		asisten_mata_kuliah.hide();
		asisten_pengabdian.hide();
		asisten_penelitian.hide();
		kegiatan_internal.hide();
		kegiatan_eksternal.hide();
		pengurus.hide();
		toefl.hide();
		pelatihan.hide();
	}
	else if(status == "pemakalah")
	{
		$(".form-text").hide();
		$("#"+status).show(1000);
		$("#"+status+" "+"input[type='text']").val('');
		$("#"+status+" "+"textarea").val('');
		$("#"+status+" "+"input[type='file']").val('');
		$("#"+status+" "+"input[type='radio']").attr('checked',false);
		kompetisi.hide();
		pembicara.hide();
		penulis.hide();
		magang.hide();
		kerja_praktek.hide();
		asisten_mata_kuliah.hide();
		asisten_pengabdian.hide();
		asisten_penelitian.hide();
		kegiatan_internal.hide();
		kegiatan_eksternal.hide();
		pengurus.hide();
		toefl.hide();
		pelatihan.hide();
	}
	else if(status == "pembicara")
	{
		$(".form-text").hide();
		$("#"+status).show(1000);
		$("#"+status+" "+"input[type='text']").val('');
		$("#"+status+" "+"textarea").val('');
		$("#"+status+" "+"input[type='file']").val('');
		$("#"+status+" "+"input[type='radio']").attr('checked',false);
		kompetisi.hide();
		pemakalah.hide();
		penulis.hide();
		magang.hide();
		kerja_praktek.hide();
		asisten_mata_kuliah.hide();
		asisten_pengabdian.hide();
		asisten_penelitian.hide();
		kegiatan_internal.hide();
		kegiatan_eksternal.hide();
		pengurus.hide();
		toefl.hide();
		pelatihan.hide();
	}
	else if(status == "penulis")
	{
		$(".form-text").hide();
		$("#"+status).show(1000);
		$("#"+status+" "+"input[type='text']").val('');
		$("#"+status+" "+"textarea").val('');
		$("#"+status+" "+"input[type='file']").val('');
		$("#"+status+" "+"input[type='radio']").attr('checked',false);
		kompetisi.hide();
		pemakalah.hide();
		pembicara.hide();
		magang.hide();
		kerja_praktek.hide();
		asisten_mata_kuliah.hide();
		asisten_pengabdian.hide();
		asisten_penelitian.hide();
		kegiatan_internal.hide();
		kegiatan_eksternal.hide();
		pengurus.hide();
		toefl.hide();
		pelatihan.hide();
	}
	else if(status == "magang")
	{
		$(".form-text").hide();
		$("#"+status).show(1000);
		$("#"+status+" "+"input[type='text']").val('');
		$("#"+status+" "+"textarea").val('');
		$("#"+status+" "+"input[type='file']").val('');
		$("#"+status+" "+"input[type='radio']").attr('checked',false);
		kompetisi.hide();
		pemakalah.hide();
		pembicara.hide();
		penulis.hide();
		kerja_praktek.hide();
		asisten_mata_kuliah.hide();
		asisten_pengabdian.hide();
		asisten_penelitian.hide();
		kegiatan_internal.hide();
		kegiatan_eksternal.hide();
		pengurus.hide();
		toefl.hide();
		pelatihan.hide();
	}
	else if(status == "kerja_praktek")
	{
		$(".form-text").hide();
		$("#"+status).show(1000);
		$("#"+status+" "+"input[type='text']").val('');
		$("#"+status+" "+"textarea").val('');
		$("#"+status+" "+"input[type='file']").val('');
		$("#"+status+" "+"input[type='radio']").attr('checked',false);
		kompetisi.hide();
		pemakalah.hide();
		pembicara.hide();
		penulis.hide();
		magang.hide();
		asisten_mata_kuliah.hide();
		asisten_pengabdian.hide();
		asisten_penelitian.hide();
		kegiatan_internal.hide();
		kegiatan_eksternal.hide();
		pengurus.hide();
		toefl.hide();
		pelatihan.hide();
	}
	else if(status == "asisten_mata_kuliah")
	{
		$(".form-text").hide();
		$("#"+status).show(1000);
		$("#"+status+" "+"input[type='text']").val('');
		$("#"+status+" "+"textarea").val('');
		$("#"+status+" "+"input[type='file']").val('');
		$("#"+status+" "+"input[type='radio']").attr('checked',false);
		kompetisi.hide();
		pemakalah.hide();
		pembicara.hide();
		penulis.hide();
		magang.hide();
		kerja_praktek.hide();
		asisten_pengabdian.hide();
		asisten_penelitian.hide();
		kegiatan_internal.hide();
		kegiatan_eksternal.hide();
		pengurus.hide();
		toefl.hide();
		pelatihan.hide();
	}
	else if(status == "asisten_pengabdian")
	{
		$(".form-text").hide();
		$("#"+status).show(1000);
		$("#"+status+" "+"input[type='text']").val('');
		$("#"+status+" "+"textarea").val('');
		$("#"+status+" "+"input[type='file']").val('');
		$("#"+status+" "+"input[type='radio']").attr('checked',false);
		kompetisi.hide();
		pemakalah.hide();
		pembicara.hide();
		penulis.hide();
		magang.hide();
		kerja_praktek.hide();
		asisten_mata_kuliah.hide();
		asisten_penelitian.hide();
		kegiatan_internal.hide();
		kegiatan_eksternal.hide();
		pengurus.hide();
		toefl.hide();
		pelatihan.hide();
	}
	else if(status == "asisten_penelitian")
	{
		$(".form-text").hide();
		$("#"+status).show(1000);
		$("#"+status+" "+"input[type='text']").val('');
		$("#"+status+" "+"textarea").val('');
		$("#"+status+" "+"input[type='file']").val('');
		$("#"+status+" "+"input[type='radio']").attr('checked',false);
		kompetisi.hide();
		pemakalah.hide();
		pembicara.hide();
		penulis.hide();
		magang.hide();
		kerja_praktek.hide();
		asisten_mata_kuliah.hide();
		asisten_pengabdian.hide();
		kegiatan_internal.hide();
		kegiatan_eksternal.hide();
		pengurus.hide();
		toefl.hide();
		pelatihan.hide();
	}
	else if(status == "kegiatan_eksternal")
	{
		$(".form-text").hide();
		$("#"+status).show(1000);
		$("#"+status+" "+"input[type='text']").val('');
		$("#"+status+" "+"textarea").val('');
		$("#"+status+" "+"input[type='file']").val('');
		$("#"+status+" "+"input[type='radio']").attr('checked',false);
		kompetisi.hide();
		pemakalah.hide();
		pembicara.hide();
		penulis.hide();
		magang.hide();
		kerja_praktek.hide();
		asisten_mata_kuliah.hide();
		asisten_pengabdian.hide();
		asisten_penelitian.hide();
		kegiatan_internal.hide();
		pengurus.hide();
		toefl.hide();
		pelatihan.hide();
	}
	else if(status == "kegiatan_internal")
	{
		$(".form-text").hide();
		$("#"+status).show(1000);
		$("#"+status+" "+"input[type='text']").val('');
		$("#"+status+" "+"textarea").val('');
		$("#"+status+" "+"input[type='file']").val('');
		$("#"+status+" "+"input[type='radio']").attr('checked',false);
		kompetisi.hide();
		pemakalah.hide();
		pembicara.hide();
		penulis.hide();
		magang.hide();
		kerja_praktek.hide();
		asisten_mata_kuliah.hide();
		asisten_pengabdian.hide();
		asisten_penelitian.hide();
		kegiatan_eksternal.hide();
		pengurus.hide();
		toefl.hide();
		pelatihan.hide();
	}
	else if(status == "pengurus")
	{
		$(".form-text").hide();
		$("#"+status).show(1000);
		$("#"+status+" "+"input[type='text']").val('');
		$("#"+status+" "+"textarea").val('');
		$("#"+status+" "+"input[type='file']").val('');
		$("#"+status+" "+"input[type='radio']").attr('checked',false);
		kompetisi.hide();
		pemakalah.hide();
		pembicara.hide();
		penulis.hide();
		magang.hide();
		kerja_praktek.hide();
		asisten_mata_kuliah.hide();
		asisten_pengabdian.hide();
		asisten_penelitian.hide();
		kegiatan_internal.hide();
		kegiatan_eksternal.hide();
		toefl.hide();
		pelatihan.hide();
	}
	else if(status == "toefl")
	{
		$(".form-text").hide();
		$("#"+status).show(1000);
		$("#"+status+" "+"input[type='text']").val('');
		$("#"+status+" "+"textarea").val('');
		$("#"+status+" "+"input[type='file']").val('');
		kompetisi.hide();
		pemakalah.hide();
		pembicara.hide();
		penulis.hide();
		magang.hide();
		kerja_praktek.hide();
		asisten_mata_kuliah.hide();
		asisten_pengabdian.hide();
		asisten_penelitian.hide();
		kegiatan_internal.hide();
		kegiatan_eksternal.hide();
		pengurus.hide();
		pelatihan.hide();
	}
	else if(status == "pelatihan")
	{
		$(".form-text").hide();
		$("#"+status).show(1000);
		$("#"+status+" "+"input[type='text']").val('');
		$("#"+status+" "+"textarea").val('');
		$("#"+status+" "+"input[type='file']").val('');
		$("#"+status+" "+"input[type='radio']").attr('checked',false);
		kompetisi.hide();
		pemakalah.hide();
		pembicara.hide();
		penulis.hide();
		magang.hide();
		kerja_praktek.hide();
		asisten_mata_kuliah.hide();
		asisten_pengabdian.hide();
		asisten_penelitian.hide();
		kegiatan_internal.hide();
		kegiatan_eksternal.hide();
		pengurus.hide();
		toefl.hide();
	}
	else
	{
		kompetisi.hide(1000);
		pemakalah.hide(1000);
		pembicara.hide(1000);
		penulis.hide(1000);
		magang.hide(1000);
		kerja_praktek.hide(1000);
		asisten_mata_kuliah.hide(1000);
		asisten_pengabdian.hide(1000);
		asisten_penelitian.hide(1000);
		kegiatan_internal.hide(1000);
		kegiatan_eksternal.hide(1000);
		pengurus.hide(1000);
		toefl.hide(1000);
		pelatihan.hide(1000);
	}
})


window.onload = function() { 
	var status = $("#status").val();
	$("#kategori").hide();

	if (status == "kompetisi") 
	{
		$("#"+status).show();
	}
	else if(status == "pemakalah")
	{
		$("#"+status).show();
	}
	else if(status == "pembicara")
	{
		$("#"+status).show();
	}
	else if(status == "penulis")
	{
		$("#"+status).show();
	}
	else if(status == "magang")
	{
		$("#"+status).show();
	}
	else if(status == "kerja_praktek")
	{
		$("#"+status).show();
	}
	else if(status == "asisten_mata_kuliah")
	{
		$("#"+status).show();
	}
	else if(status == "asisten_penelitian")
	{
		$("#"+status).show();
	}
	else if(status == "asisten_pengabdian")
	{
		$("#"+status).show();
	}
	else if(status == "kegiatan_eksternal")
	{
		$("#"+status).show();
	}
	else if(status == "kegiatan_internal")
	{
		$("#"+status).show();
	}
	else if(status == "pengurus")
	{
		$("#"+status).show();
	}
	else if(status == "toefl")
	{
		$("#"+status).show();
	}
	else if(status == "pelatihan")
	{
		$("#"+status).show();
	}
};