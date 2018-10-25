
<script>
	$('.battingfavor').click(function(){

		
		var leagueidx = $(this).data("leagueidx");
		var useridx = $(this).data("useridx"); 
		$(this).find("img").attr("src", function(index, attr){
				if(attr.match('favorites.png')){
					return attr.replace("favorites.png", "favorites_on.png");
				}else{
					return attr.replace("favorites_on.png", "favorites.png");
				}
			});
		});
</script>