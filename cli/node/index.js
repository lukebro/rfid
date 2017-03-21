'use strict';
require('colors');
const readline = require('readline');
const save = require('./lib/save');

const rl = readline.createInterface({
  input: process.stdin,
  output: process.stdout,
  prompt: 'SCAN: '.yellow.bold
});

console.log('\nWelcome to the RFID Scanner 5000!\n'.rainbow.bold);

rl.prompt();

rl.on('line', (line) => {
	if (line.toLowerCase() === 'exit') {
		rl.close();
		return;
	}

	if (line === '') {
		rl.prompt();
		return;
	}

	save(line);

	rl.prompt();
});

rl.on('close', () => {
	console.log('\nHave a nice day!\n'.rainbow.bold.italic);
	process.exit(0);
});
