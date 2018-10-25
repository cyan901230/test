<script>
    $(".btbt").click(function () {
      $(this).toggleClass(" colorselect");
	  $(".btbt").not($(this)).removeClass(' colorselect');
    });

</script>