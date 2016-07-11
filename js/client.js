function scroll_box()
{
  $("#messages").animate({ scrollTop: 9999999 }, 1000);
}

$(document).ready(function()
{
  alert("test");
	scroll_box();


  $("#messageForm").submit( function(event) {
    alert("entro");
    event.preventDefault();
  	var msg = $( "#messageInput" ).val();
    alert(msg);
    if (msg.length == 0)
  		return false;

    $("#messages").append("<strong>Kazin</strong>asdasdasd");
    $("#messageInput").val("");

    return false;
  });

});
