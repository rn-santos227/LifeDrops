$(document).ready(function(){


	$('tr.cards').click(function(){
		$("div#create").attr('donorid', '');
		$("div#create").attr('donorid', $(this).attr('id'));
		$("div#create").modal('show');

		$('input#modal-donor-id').val('');
		$('input#modal-donor-id').val($(this).attr('id'));
	})



});