const flashdata = $('.flash-data').data('flashdata');
const flashdata_er = $('.gagal').data('flashdata');

if (flashdata) {
	Swal({
		title: 'Data',
		text: flashdata,
		type: 'success'
	})
}

if (flashdata_er) {
	Swal({
		title: 'Error',
		text: flashdata_er,
		type: 'error'
	})
}


// Tommbol hapus
$('.tombol-hapus').on('click', function (e) {
	// Mematikan href
	e.preventDefault();
	const href = $(this).attr('href');

	Swal({
		title: 'Apakah anda yakin ingin menghapus?',
		text: "data akan dihapus",
		type: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Hapus Data!'
	}).then((result) => {
		if (result.value) {
			document.location.href = href;
		}
	})
})


// Tommbol hapus
$('.go-home').on('click', function (e) {
	// Mematikan href
	e.preventDefault();
	const href = $(this).attr('href');

	Swal({
		title: 'Menuju halaman home?',
		type: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
	}).then((result) => {
		if (result.value) {
			document.location.href = href;
		}
	})
})


// Tommbol hapus
$('.alert-active').on('click', function (e) {
	// Mematikan href
	e.preventDefault();
	const href = $(this).attr('href');

	Swal({
		title: 'Aktifkan user ini?',
		type: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
	}).then((result) => {
		if (result.value) {
			document.location.href = href;
		}
	})
})
