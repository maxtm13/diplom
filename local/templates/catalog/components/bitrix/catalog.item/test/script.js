BX.ready(function (){
	let $buttons = $('button.add2basket');
	$buttons.each(function (){
		$(this).on('click', function(e){
			let id = $(this).attr('data-id-item')
			$.ajax({
				url: '/ajax/add2card.php',
				method: 'post',
				dataType: 'html',
				data: {ID: id},
				success: function (data) {
					console.log(data)
					// window.location.replace('/personal/cart/')
				},
				error: function (error){
					console.log('Не вышло', error)
				}
			})
		})

	})
})