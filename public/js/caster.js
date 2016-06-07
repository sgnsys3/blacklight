function newPage(id) {
    window.open("profile/edit/"+ id,"","width=500,height=600,scrollbars=yes");
}

var timer = setInterval(update, 2000);

function update() {
	console.log("Click La");
	$.ajax({
		url: updateUrl,
		method: "POST",
		data: {_token: $('meta[name="_token"]').attr('content')},
		success: function(response) {
			console.log("Render La");
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
		var $skipButton = value.status == 4 
						  ? '<input type="submit" value="Comback" class="btn btn-warning btn-block btn-xs">'
						  : '<input type="submit" value="Skip" class="btn btn-danger btn-block btn-xs">';

		if(value.status == 2 || value.status == 0) $skipButton = '';

		var html =  '<tr class="' + trClass[value.status] + '">' +
					'<td>'+ value.firstname +'</td>' +
					'<td>'+ value.lastname + '</td>' +
					'<td>' + value.nickname + '</td>' +
					'<td><button type="button" class="btn btn-primary btn-block btn-xs" onclick="newPage('+ value.id + ')">Edit</button></td>' +
					'<td><form method="post" enctype="multipart/form-data" action="' + skipUrl + '/' + value.id + '">' + $csrf + $skipButton +'</form></td>'
					'</tr>';
		$("#allinfo tbody").append(html);
	});
}