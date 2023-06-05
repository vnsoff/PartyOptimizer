const express = require('express');
const app = express();
const mysql = requite('mysql');

const db =  mysql.createPool ({
    host: 'localhost',
    user: 'root',
    password: '',
    database: 'partopt',
});

app.get ("/", (req, res) => {
    const sqlInsert = "INSERT INTO registration (userName, password) VALUES ('user1', 'pass23') ";
    db.query (sqlInsert, (req, result)=> {
        res.send ("refresh");
    });
});

app.listen (5174, () => {
    console.log('running on port 5174');
});