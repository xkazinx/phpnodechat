var socket = require( 'socket.io' ); //socket
var express = require( 'express' ); //express
var http = require( 'http' ); //http

var app = express(); //app handler
var server = http.createServer( app ); //server handler
var io = socket.listen( server ); //io handler

var _clients = [];

io.sockets.on( 'connection', function( client )
{
	console.log("New client");
  client.emit('req_name', "");

  client.on( 'not_name', function(data)
  {
      _clients.push(data.name);
      console.log("Client authenticated: " + data.name);
  });

	client.on( 'message', function( data )
	{
		console.log( 'Message received ' + data.name + ":" + data.message );

		//client.broadcast.emit( 'message', { name: data.name, message: data.message } );
		io.sockets.emit( 'message', { name: data.name, message: data.message } );
	});

});

server.listen( 8080 );
