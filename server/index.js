const express = require('express')
const bodyParser = require('body-parser')
const path = require('path')

const app = express()

// to support JSON-encoded bodies
app.use( bodyParser.json() )

// to support URL-encoded bodies
app.use( bodyParser.urlencoded({ extended: true }))

app.use(express.static(__dirname + '/public'))

app.listen(3000, function() {
  console.log('listening on 3000')
})

app.get('/', function (request, respond) {
  respond.send('Hello world')
})

app.post('/api/v1/person', function (request, respond) {
  console.log(request.body)

  respond.send({ data: request.body })
})
