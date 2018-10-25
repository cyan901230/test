<?
		$.ajax({
			url:"../game/favorites2.php",
			type:"POST",
			dataType:"json",
			data:{
				'useridx':useridx,
				'leagueidx':leagueidx,
				'onoff':onoff
			},
			success:function(){
			
			},
			error:function (xhr, textStatus, errorThrown){
				return false;
			}
		});
	});

?>