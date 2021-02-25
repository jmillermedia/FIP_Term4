const express = require('express');
const { createPool } = require('mysql');
//express router handles incoming requests and directs them where they need to go
const router = express.Router();
//import the sql connection
const connect = require("../config/sqlConfig");

//think of route handlers like PHP functions
router.get("/", (req, res) => {
    //res.json = echo json_encode in php
    res.json({message: "you hit the api route"});
})

module.exports = router;