<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Chat</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  </head>
  <body>
  <div class="container">
    <div class="col-md-3 col-md-offset-4" style="padding-top:20%;">
    <div class="panel-group">
    <div class="panel panel-primary">
      <div class="panel-heading">Authentication</div>
      <div class="panel-body">
        <form action="chat.php" method="POST">
          <div class="input-append">
            <input type="text" name="user" placeholder="Username" />
            <input type="submit" value="Ok" class="btn">
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</div>
  </body>
</html>
