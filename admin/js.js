$('.gds-delete').click(function () {
	id = $(this).attr('id')
	el = $(this)
	$.ajax({
		url: 'req.php',
		type: 'POST',
		data: {
			id: id,
			req: 'delproduct'
		},
		success: function (data) {
			if (data.indexOf('ok') != -1) {
				el.closest('tr').remove()
			}
		}
	})
})
$('.gds-delete_n').click(function () {

	console.log('norm');
	id = $(this).attr('id')
	el = $(this)
	$.ajax({
		url: 'req.php',
		type: 'POST',
		data: {
			id: id,
			req: 'delproduct_n'
		},
		success: function (data) {
			if (data.indexOf('ok') != -1) {
				el.closest('tr').remove()
			}
		}
	})
})
$('.role').click(function () {
	id = $(this).attr('id')
	el = $(this)
	console.log('el', el);
	$.ajax({
		url: 'req.php',
		type: 'POST',
		data: {
			id: id,
			result: 'change'
		},
		success: function (data) {
			nm = el.text() == 1 ? 0 : 1;
			el.text(nm);

		}
	})
})