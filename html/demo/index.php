  <head>

<script type="text/javascript"> 
 $(documtne).ready(function(){    
 
 var tabIndex = 0; 


  $('.tab li').click(function(){   


   tabIndex = $(this).index();   


   $('.tab li').each(function(idx){
   $(this).find('img').attr('src', $(this).find('img').attr('src').replace('_off','_on'));    

   if(tabIndex != idx) {
     $(this).find('img').attr('src', $(this).find('img').attr('src').replace('_on','_off'));

   }
  });
   $('.tab > div').eq(tabIndex).show().siblings('div').hide();
  });
  
 }); 
 </script>

</head>


<div class="sub_container">
    <div class="tab"> 
     <ul> 
        <li class="on"><a href="#panel01"><img src="images/smart_on.gif" align="absmiddle" /></a></li>
        <li><a href="#panel02"><img src="images/smart_off.gif" align="absmiddle" /></a></li>
        <li><a href="#panel03"><img src="images/smart_off.gif" align="absmiddle" /></a></li> 
        <li><a href="#panel04"><img src="images/smart_off.gif" align="absmiddle" /></a></li> 
     </ul> 
    
     <div class="panel" id="panel01" style="display:block;">1</div> 
     <div class="panel" id="panel02">2</div>
     <div class="panel" id="panel03">3</div> 
     <div class="panel" id="panel04">4</div>
   
    </div>
  </div>
