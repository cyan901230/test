<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script src="//code.jquery.com/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#submit').click(function() {
                var con = $('#con').val();
                $.ajax({
                    type: "POST",
					datatype:"json",
                    url: 'ota.php',
                    data: {
					con:con,
					},
                    success: function(dd) {
                       $('#result').val(dd);
                    }
                });
            });
        });
    </script>
</head>

<body>

<input  type="text" name="con" id="con" />
<input  type="button" value="오타검사" id="submit" />
<input  type="text" name="result" id="result" />
</body>
</html>