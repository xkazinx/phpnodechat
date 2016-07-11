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
  	var msg = $( "#messageInput" ).val();
    if (msg.length == 0)
  		return false;

    $("#messages").append("<strong>Kazin:</strong> asdasdasd");
    $("#messageInput").val("");

    return false;
  });


  socket.on( 'req_name', function()
  {
    alert("req_name");
    var nameVal = $("#messageName").val();
    socket.emit( 'not_name', { name: nameVal } );
  });

});
