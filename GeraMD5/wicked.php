<!DOCTYPE html>
<html>
<head>
	<title>World wIck3D</title>
	<meta charset="utf-8" >
	<meta name="author" content="CodeW47">
	<style type="text/css">
		form input{
			display: block
		}
	</style>
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
$(".btn").click(function(){


var dados = $(".form").serialize();
			$.ajax({


				type:"POST",
				url:"valida.php",
				data:dados,
				success:function(data){
					$(".exibirdados").empty().html(data);
				}
			})
return false;
		

$('.form').trigger('submit');

})
$('.copiarMD5').click(function(){

	var temp = $(".exibirdados").text();
	window.prompt("CTRL+C", temp)
	})
		})

	</script>
</head>
<body>
<form method="POST" action="" class="form">
<input type="text" name="valor">
<input type="submit" name="btn" class="btn" value="Gerar MD5">

</form>

<button class="copiarMD5">Copy</button>
<div class="exibirdados"></div>
</body>
</html>