const express = require('express')
var path = require('path')
const app = express()

app.use(express.static(__dirname + '/public'))

app.listen(3000, function() {
  console.log('listening on 3000')
})

app.get('/', function (request, respond) {
  respond.send('Hello world')
})
