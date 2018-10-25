		$.ajax({
			url:"./favorites2.php",
			type:"POST",
			dataType:"json",
			data:{
				'mode':'favorIn',
				'useridx':useridx,
				'leagueidx':leagueidx
			},
			success(function(){
				alert("성공");

				})
			});
		});

