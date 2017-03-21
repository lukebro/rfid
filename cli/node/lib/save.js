require('colors');
require('dotenv').config();
const mysql = require('mysql');

const options = {
	host: process.env.DB_HOST,
	user: process.env.DB_USERNAME,
	password: process.env.DB_PASSWORD,
	database: process.env.DB_DATABASE,
};

module.exports = (line) => {
	let conn = mysql.createConnection(options);

	new Promise((resolve, reject) => {
		conn.connect(err => {
			if (err) return reject(err);

			return resolve();
		});
	}).then(() => {
		conn.query(`INSERT INTO captures (card, location_id) VALUES("${line}", ${process.env.RFID_ROOM})`, (err) => {
			if (err) {
				console.log('\nError saving capture.'.red.bold);
			}
			conn.end();
		});
	}).catch(err => {
		console.log('\nError connecting to DB.'.red.bold);
	});
};
