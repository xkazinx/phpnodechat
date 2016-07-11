var socket = io.connect( 'http://191.81.175.121:8080' );

function scroll_box()
{
  $("#messages").animate({ scrollTop: 9999999 }, 1000);
}

$(document).ready(function()
{
  alert("test");
	scroll_box();

  $("#messageForm").submit( function(event) {
    event.preventDefault();
  	var msgVal = $( "#messageInput" ).val();
    if (msgVal.length == 0)
  		return false;

    socket.emit('message', {msg: msgVal});
    $("#messageInput").val("");

    return false;
  });

  socket.on( 'req_name', function()
  {
    var nameVal = $("#messageName").val();
    socket.emit( 'not_name', { name: nameVal } );
  });

  socket.on( 'message', function(data)
  {
    $("#messages").append("<strong>" + data.name + ":</strong> " + data.msg + "<br>");
  });
});
