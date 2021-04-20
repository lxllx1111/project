<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<script src="https://cdn.bootcss.com/jquery/3.4.1/jquery.min.js"></script>
	<script>
	$.get('/api/get-demo?id=123&name=abc');
	$.post('/api/post-form-urlencode',{first_param:'first',second_param:'second'});
	var data = new FormData();
	data.append('first_param','first');
	data.append('second_param','second');
	$.ajax({
		url:'/api/post-form-data',
		type:'POST',
		data:data,
		contentType:false,
		processData:false
	});
	$.ajax({
		url:'/api/post-json',
		type:'POST',
		dataType:'json',
		contenType:'application/json;',
		data:JSON.stringify({'first_param':'first','second_param':'second'})
	});
	</script>
</body>
</html>