var socket = require( 'socket.io' ); //socket
var express = require( 'express' ); //express
var http = require( 'http' ); //http

var app = express(); //app handler
var server = http.createServer( app ); //server handler
var io = socket.listen( server ); //io handler

function send_names(client)
{
  var names = [];
  var clients = io.sockets.sockets;
  var arrayLength = clients.length;
  for (var i = 0; i < arrayLength; i++) {
    names.push(clients[i].name);
  }
  io.sockets.emit('names', names);
}

io.sockets.on( 'connection', function( client )
{
	console.log("New client");

  client.emit('req_name', "");

  client.on('disconnect', function()
  {
    console.log("Client [" + client.name + "] disconnected.");
    send_names(client);
  });

  client.on( 'not_name', function(data)
  {
    var clients = io.sockets.sockets;
    var found = false;
    var arrayLength = clients.length;
    for (var i = 0; i < arrayLength; i++) {
      if (clients[i].name == data.name)
      {
        found = true;
        break;
      }
    }

    if (found == true)
    {
      console.log("Client name [" + data.name + "] already exists; will rename.");
    }

    client.name = data.name;
    if (found)
    {
      client.name = data.name + "[" + clients.length + "]";
    }
    console.log("Client authenticated: " + client.name);

    send_names(client);
  });

	client.on( 'message', function( data )
	{
		console.log( 'Message received: ' + data.msg );
		//client.broadcast.emit( 'message', { name: data.name, message: data.message } );
		io.sockets.emit( 'message', { name: client.name, msg: data.msg } );
	});
});

server.listen( 8080 );
