<!DOCTYPE html>
<!-- Andy- ***List.php*** Change verifyPwd to retrievePost, remove everything about "data" -->
<html lang="en">
<head>
  <title>Chat Website</title> <!-- ADJUST this for as2 :Andy --> 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script>
                function retrievePosts(){

                            $.post("servlets/data_ops.php",
                            {
                                op: "getPosts"
                            },
                            function(data, status){
                                if(data=="ok"){
                                        window.location = "inbox.php";
                                }else{
                                        alert("ERROR!");
                                }
                            });
                }
        </script>
</head>
<body>

<div class="container">
        LIST.PHP

</div>

</body>
</html>

