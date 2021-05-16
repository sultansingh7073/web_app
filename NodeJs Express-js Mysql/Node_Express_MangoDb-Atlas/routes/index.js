var express = require('express');
var router = express.Router();
var mongodb = require("mongoose");
var mongodburl = "mongodb+srv://sultan:sultan@1234@cluster0-uujmr.mongodb.net/test?retryWrites=true&w=majority";

/* GET home page. */
router.get('/', function(req, res, next) {
  res.render('index', { title: 'Express' });
});

module.exports = router;
