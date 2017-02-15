import MySQLdb
import os
from dotenv import load_dotenv, find_dotenv

load_dotenv(find_dotenv())

db = MySQLdb.connect(
	host=os.environ.get("DB_HOST"),
	user=os.environ.get("DB_USERNAME"),
	passwd=os.environ.get("DB_PASSWORD"),
	db=os.environ.get("DB_DATABASE"))

cur = db.cursor()
sql = "INSERT INTO captures (card, location_id) VALUES(%s,%s)"

value = raw_input()

while (value != "EOF"):
	cur.execute(sql, (value, 1))
	db.commit()
	value = raw_input()

cur.close()
db.close()
