var io = require('socketio')(6000)
console.log('Connected to port 6000')

io.on('error',function(socket){
  console.log('error')
})

io.on('connection',function(socket){
  console.log('Co nguoi vua ket noi' + socket.id)
})

var Redis = require('ioredis')
var redis = new Redis(6379)
