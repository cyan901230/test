<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script  src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#submit').click(function() {
                var name = $('#name').val();
                var surname = $('#surname').val();
                var email = $('#email').val();
                var pass = $('#pass').val();
                $.ajax({
                    type: "POST",        
                    url: 'save.php',
                    data: {name:name,surname:surname,email:email,pass:pass},
                    success: function(data) {
                        alert('data has been stored to database');
                    }
                });
            });
        });
    </script>
</head>

<body>
<form action="save.php" method="POST">
<input  type="text"name="name" id="name" />
<input  type="text" name="surname" id="surname" />
<input  type="email" name="email" id="email" />
<input  type="password" name="pass" id="pass" />
<input  type="submit" value="Insert" id="submit" />
</form>
</body>
</html>