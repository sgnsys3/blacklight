function newPage(id) {
    window.open("profile/edit/"+ id,"","width=500,height=600,scrollbars=yes");
}

function checkDisplay() {
	$.ajax({
		url: currentIDUrl,
		method: "POST" ,
		data: {	_token: $('meta[name="_token"]').attr('content') },
		success :function(response) {
			if(response > displayID) location.reload();
		}
	})
}

function countQuene() {
	$("#countQuene").unbind();
	$.ajax({
		url: countQueneUrl,
		method: "POST" ,
		data: {	_token: $('meta[name="_token"]').attr('content') },
		success :function(response) {
			if(response != 0) response -= 1;
			$("#countQuene").empty();
			$("#countQuene").append(response);
		}
	});
}

function w8refresh() {
	$.ajax({
			url: countQueneUrl,
			method: "POST" ,
			data: {	_token: $('meta[name="_token"]').attr('content') },
			success :function(response) {
				if(response != 0) location.reload();
			}
		});
}

function sendSkip() {
	$(".skipButton").unbind();
	$(".skipButton").click(function(){
		var id = $(this).attr('skipID');
		$.ajax({
			url: skipUrl+'/'+id,
			method: "POST" ,
			data: {	_token: $('meta[name="_token"]').attr('content') },
			success :function() {
				update();
			}
		});
	});
}

function update() {
	$.ajax({
		url: updateUrl,
		method: "POST",
		data: {_token: $('meta[name="_token"]').attr('content')},
		success: function(response) {
			renderTable(response);
		}
	});
}

function renderTable(data) {
	$("#allinfo tbody").empty();
	var $csrf = '<input type="hidden" name="_token" value="' + $('meta[name="_token"]').attr('content') +'">';
	var trClass = ['info', 'danger', 'success', 'warning'];

	$.each(data, function(index, value) {
		var $trValue;
		var $skipButton = value.status == 3
						  ? '<span skipID="'+value.id+'" class="skipButton btn btn-warning btn-block btn-xs">Come Back</span>'
						  : '<span skipID="'+value.id+'" class="skipButton btn btn-danger btn-block btn-xs">Skip</span>';

		if(value.status == 2 || value.status == 0) $skipButton = '';

		var html =  '<tr class="' + trClass[value.status] + '">' +
					'<td>'+ value.firstname +'</td>' +
					'<td>'+ value.lastname + '</td>' +
					'<td>' + value.nickname + '</td>' +
					'<td><button type="button" class="btn btn-primary btn-block btn-xs" onclick="newPage('+ value.id + ')">Edit</button></td>' +
					'<td>'+ $skipButton +'</td>'
					'</tr>';
		$("#allinfo tbody").append(html);
	});
	sendSkip();
}