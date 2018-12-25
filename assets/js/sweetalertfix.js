let flashData = $('.flash-data').data('flashdata');
let flashData2 = $('.flash-data2').data('flashdata2');
let flashData3 = $('.flash-data3').data('flashdata3');

if (flashData) {
	Swal({
		title: 'Selamat',
		text: 'Anda Telah ' + flashData,
		type: 'success'
	});
}

if (flashData2) {
	Swal({
		title: 'Berhasil',
		text: 'Data Telah ' + flashData2,
		type: 'success'
	});
}

if (flashData3) {
	Swal({
		title: 'Terima Kasih',
		text: 'Anda Telah ' + flashData3,
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
