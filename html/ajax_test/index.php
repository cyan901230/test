<script src="//code.jquery.com/jquery.min.js"></script>
<script language="javascript">
var confmKey="U01TX0FVVEgyMDE2MDcyMjE1MjA0OTE0MDA0";
var currentPage=1;
var countPerPage=10;
var keyword="논현로644";
var resultType="json";

   $.ajax({
      type: "post",
      url: "http://www.juso.go.kr/addrlink/addrLinkApiJsonp.do",
      async:false,
      data: {
		  confmKey:confmKey,
		  currentPage:currentPage,
		  countPerPage:countPerPage,
		  keyword:keyword,
		  resultType:resultType
		  },
      success: function(){
         document.write(juso.zipNo);
      }
   });
</script>
