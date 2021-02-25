const express = require('express');
const { createPool } = require('mysql');

const router = express.Router();

const connect = require("../config/sqlConfig");


router.get("/", (req, res) => {

    res.json({message: "you hit the api route"});
})

module.exports = router;