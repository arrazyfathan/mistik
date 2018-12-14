const flashData = $('.flash-data').data('flashdata');

if (flashData) {
	Swal({
		title: 'Selamat',
		text: 'Anda Telah ' + flashData,
		type: 'success'
	});
}
