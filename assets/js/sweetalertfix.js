let flashData = $('.flash-data').data('flashdata');
let flashData2 = $('.flash-data2').data('flashdata2');

if (flashData) {
	Swal({
		title: 'Selamat',
		text: 'Anda Telah ' + flashData,
		type: 'success'
	});
}

if (flashData2) {
	Swal({
		title: 'Behasil',
		text: 'Data Telah ' + flashData2,
		type: 'success'
	});
}



$('.tombol-hapus').on('click', function (e) {

	e.preventDefault();
	const href = $(this).attr('href');

	Swal({
		title: 'Apakah Anda Yakin?',
		text: "",
		type: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Yes!'
	}).then((result) => {
		if (result.value) {
			document.location.href = href;
		}
	})

});
