const express = require('express'); // like a PHP require
const server = express();
const path = require('path');

// set our views directory
server.set("views", path.join(__dirname, 'views'));
// set the static assets director so express knows where to look
// for css, js, images, etc. - anything static
server.use(express.static(path.join(__dirname, 'public')));

server.get('/', (req, res) => {
    // console.log('hit the home route');
    res.sendFile(path.join(__dirname, 'views/index.html'))
})

server.get("/contact", (req, res) => {
    res.sendFile(path.join(__dirname, 'views/contact.html'));
})

server.get("/about", (req, res) => {
    res.sendFile(path.join(__dirname, 'views/about.html'));
})

server.get("/members", (req, res) => {
    res.sendFile(path.join(__dirname, 'views/members.html'));
})

server.get("/train", (req, res) => {
    res.sendFile(path.join(__dirname, 'views/train.html'));
})

const port = process.env.PORT || 3000; // localhost:3000

server.listen(port, () => {
    console.log(`Server running at ${port}/`);
});