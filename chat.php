<html>
  <head>
    <title>Chat</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="js/node_modules/socket.io/node_modules/socket.io-client/socket.io.js"></script>
    <script src="js/client.js"></script>
  </head>
  <body>
    <div class="container">
      <div class="panel-group">
      <div class="col-xs-10">
      <div class="panel panel-primary">
        <div class="panel-heading">Chat</div>
        <div class="panel-body" id="messages" style="height: 80%; max-height: 80%;overflow-y: scroll;">
          <strong>Kazin:</strong>Message amigo <br>
          <strong>Kazin:</strong>Message amigo <br>
          <strong>Kazin:</strong>Message amigo <br>
          <strong>Kazin:</strong>Message amigo <br>
          <strong>Kazin:</strong>Message amigo <br>
          <strong>Kazin:</strong>Message amigo <br>
          <strong>Kazin:</strong>Message amigo <br>
          <strong>Kazin:</strong>Message amigo <br>
          <strong>Kazin:</strong>Message amigo <br>
          <strong>Kazin:</strong>Message amigo <br>
          <strong>Kazin:</strong>Message amigo <br>
          <strong>Kazin:</strong>Message amigo <br>
          <strong>Kazin:</strong>Message amigo <br>
          <strong>Kazin:</strong>Message amigo <br>
          <strong>Kazin:</strong>Message amigo <br>
          <strong>Kazin:</strong>Message amigo <br>
          <strong>Kazin:</strong>Message amigo <br>
          <strong>Kazin:</strong>Message amigo <br>
          <strong>Kazin:</strong>Message amigo <br>
          <strong>Kazin:</strong>Message amigo <br>
          <strong>Kazin:</strong>Message amigo <br>
          <strong>Kazin:</strong>Message amigo <br>
          <strong>Kazin:</strong>Message amigo <br>
          <strong>Kazin:</strong>Message amigo <br>
          <strong>Kazin:</strong>Message amigo <br>
          <strong>Kazin:</strong>Message amigo <br>
          <strong>Kazin:</strong>Message amigo <br>
          <strong>Kazin:</strong>Message amigo <br>
          <strong>Kazin:</strong>Message amigo <br>
          <strong>Kazin:</strong>Message amigo <br>
          <strong>Kazin:</strong>Message amigo <br>
          <strong>Kazin:</strong>Message amigo <br>
          <strong>Kazin:</strong>Message amigo <br>
          <strong>Kazin:</strong>Message amigo <br>
          <strong>Kazin:</strong>Message amigo <br>
          <strong>Kazin:</strong>Message amigo <br>
        </div>
      </div>
    </div>
    <div class="col-xs-2">
      <div class="panel panel-primary">
        <div class="panel-heading">Members</div>
        <div class="panel-body" id="members" style="height: 80%; max-height: 80%;overflow-y: scroll;">

        </div>
      </div>
    </div>

    </div>


      </div>
  </div>
  </div>

  <div class="navbar navbar-fixed-bottom" >
    <div class="navbar-inner" id="test">
      <form class="form-inline" id="messageForm">
      <input type="text" id="messageInput" autocomplete="off" style="width:85%;">
      <input type="hidden" id="messageName" value="test" autocomplete="off" style="width:85%;">
      <input type="submit" id="messageSubmit" class="btn">
			<a href="logout.php" class="btn">Log Out</a>
    </form>
    </div>
  </div>
  </div>
  </body>
</html>
