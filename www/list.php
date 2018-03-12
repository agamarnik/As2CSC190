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
		function genControl(author, msg, ts)
		{
			var newctrl = $('<div class='row'><span id= 'author'></span><span id= 'ts'></span> </div>');
	
		}

		function displayPosts(arrPosts)
		{
			for(var i=0; i<arrPosts.length; i++)
			{
				var post = arrPosts[i];
				var author = post['author'];
				var msg = post['post'];
				var ts = post['ts'];
				var newCtrl = genCentrol(author, msg, ts);
				$('#container').append(newCtrl);
			}

		}
		
                function retrievePosts(){

                            $.post("servlets/data_ops.php",
                            {
                                op: "getPosts"
                            },
                            function(data, status){
				var arrPosts = JSON.parse(data);
				displayPosts(arrPosts);
                               
                            });
                }
		setretrievePosts();
        </script>
</head>
<body>

<div class="container">
        <input type="author" id="author"> <br />
	<input type="msg" id="post"> <br />
	<button id="btnSubmit" onclick="displayPosts()">Post</button>

</div>

</body>
</html>

