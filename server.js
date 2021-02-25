const express = require('express');
const app = express();

const port = process.env.PORT || 5050;

//this catches every route request this intercepts and reacts to the route request
app.use((req, res, next) => {
    console.log('incoming request');
    console.log(process.env.PORT);
    //next is the original route request
    next(); // => send the user to the route they requested
})

// use the api file to handle api routes
app.use("/api", require("./routes/api"));

//run the app on the port
app.listen(port, () => {
    console.log(`server is running on ${port}`);
})