<html>
 <head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
 <script>
 function showUser(str)
 {
 if (str=="")
   {
   document.getElementById("txtHint").innerHTML="";
   return;
   } 
 if (window.XMLHttpRequest)  { 

// code for IE7+, Firefox, Chrome, Opera, Safari
   xmlhttp=new XMLHttpRequest();
 }
 else {   

// code for IE6, IE5
   xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
 }
 xmlhttp.onreadystatechange=function()  {
   if (xmlhttp.readyState==4 && xmlhttp.status==200)  {
     document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
     }
   }
 xmlhttp.open("GET","ajax.php?q="+str,true);
 xmlhttp.send();
 }
 </script>
 </head>
 <body> 

 <form>
 <select name="users" onchange="showUser(this.value)">
 <option value="">Select a person:</option>
 <option value="park">park</option>
 <option value="kim">kim</option>
 <option value="song">song</option>
 <option value="lee">lee</option>
 </select>
 </form>
 <br>
 <div id="txtHint"><b>사람들의 정보를 이곳에 보여줌.</b></div>

 </body>
 </html>