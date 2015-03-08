
// Server Side Scripting

var io = require('socket.io').listen(80);

io.sockets.on('connection', function (socket) { // create socket connection, use callback function
    socket.emit('news', {hello: 'world' }); // sends the message on
    socket.on('my other event', function (data) {  //listens to the event
        console.log(data);
    });
});
// Client Side Scripting
<script src="/socket.io/socket.io.js"></script>  \n\
// calls the socket.io.js file

<script>
var socket = io.connect('http://localhost'); //creates the socket connection back to the server
socket.on('news', function (data) { // message to news, log the data and send back the other event with "my data"
    console.log(data);
    socket.emit('my other event', { my: 'data'});
});
</script>


// emit - emits a message.  All of the data in the second argument is passed with it
// on - listens for messages to be sent.  When message is received, the callback is triggered
// send (similar to emit) send data to message.
socket.set // set Basic getter/setter built into socket.io
socket.get // get Basic getter/setter built into socket.io

socket.volatile.emit // low bandwidth connections creates a longer delay for listening

/****************** NameSpaces ****************  */
//Server
var io = require('socket.io').listen(80);
var chickens = io.of('chickens').on('connection', function (socket){
    chickens.emit('lay-egg', {});
});

//client
var chickens = io.connect('http://localhost/chickens');
chickens.on('connect', function () {
    chickens.on('lay-egg', function () {
        console.log('cackle');
    });
});


