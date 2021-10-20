
import express from 'express';
import {VERSION_INFO} from "./_config";

var app = express();

app.get('/', function (req, res) {
  res.json({success: true, msg: 'Hello World!'});

});

app.listen(8080, function () {
  console.log('Example app listening on port 4100! ' + VERSION_INFO);
});
