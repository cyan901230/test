<script>
		//이미지 on off
		bb.find("img").attr("src", function(index, a){
				if(a.match('favorites.png')){
					onoff = "on";
					return a.replace("favorites.png", "favorites_on.png");
				}else{
					onoff = "off";
					return a.replace("favorites_on.png", "favorites.png");
				}
			});

		//leagueidx가 같은 div each 돌면서 leagueidx가 같을때 if문 onoff 체크 파일명 바꿈
		$('.battingfavor').each(function(i, e){
			if($(this).data("leagueidx") == leagueidx){
				if(onoff == "on"){
					$(this).find("img").attr("src", function(index, a){
						return a.replace("favorites.png", "favorites_on.png");
					});
				}else if(onoff=="off"){
					$(this).find("img").attr("src", function(index, a){
						return a.replace("favorites_on.png", "favorites.png");
					});
				}
			}
		});
</script>