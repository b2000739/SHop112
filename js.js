$('.cartadd').click(function () {
	idProduct = this.id;
	console.log(idProduct);
	$.ajax({
		url: 'save.php',
		type: 'POST',
		data: {
			idProduct: idProduct
		},
		success: function (data) {
			console.log(data)
			if (data == 'ok') {
				let n = parseInt($('.number-product').text())
				n++
				$('.number-product').text(n)
			}
			else { console.log('Данные не сохранены') }
		}
	});
})

$('.cartadd').mousedown(function () {
	$(this).addClass('cart_down');
})
$('.cartadd').mouseup(function () {
	$(this).removeClass('cart_down');

})
$('.heart').click(function () {


	if ($(this).hasClass('pink')) {
		$(this).removeClass('pink');
	} else {
		$(this).addClass('pink');
	}

	productId = this.id

	$.ajax({
		url: 'save.php',
		type: 'POST',
		data: {
			info: productId
		},
		success: function (data) {
			console.log(data)

		}
	});
})
$('.categories input').change(function () {
	$('.categories li').removeClass('categories-activ')
	$(this).closest('li').toggleClass('categories-activ')
})