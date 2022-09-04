from distutils.log import debug
from flask import Flask, render_template,request, redirect
from flask.ext.sqlalchemy import SQLAlchemy
import psycopg2

app=Flask(__name__,template_folder='template',static_folder='static')
app.config['SQLALCHEMY_DATABASE_URI']='postgresql://postgres:postgres123@localhost/iHealth_database'
db=SQLAlchemy(app)


@app.route("/")
def index():
	return render_template("index.html")
if __name__ == '__main__':
	app.debug=True
	app.run(debug=True)

@app.route("/medicine")
def medicine():
	medicine = []
	conn = connection()
	cursor = conn.cursor()
	cursor.execute("SELECT * FROM MEDICINE")
	for row in cursor.fetchall():
		medicine.append({"medicine_id": row[0], "medicine_name": row[1]})
	conn.close()	
	return render_template("medicine.html", medicine = medicine)
	
@app.route("/addmedicine", methods = ['GET', 'POST'])
def addmedicine():
	if request.method == 'GET':
		return render_template("medicine.html", medicine = {})
	if request.method == 'POST':
		medicine_id = int(request.form["medicine_id"])
		medicine_name = request.form["medicine_name"]
	conn = connection()
	cursor = conn.cursor()
	cursor.execute("INSERT INTO MEDICINE (medicine_id, medicine_name VALUES (%s, %s)", (medicine_id, medicine_name))
	conn.commit()
	conn.close()
	return redirect('/')
@app.route('/updatemedicine/<int:medicine_id>', methods = ['GET', 'POST'])
def updatemedicine(medicine_id):
	md = []
	conn = connection()
	cursor = conn.cursor()
	if request.method == 'GET':
		cursor.execute("SELECT * FROM MEDICINE WHERE MEDICINE_ID = %s", (str(medicine_id)))
		for row in cursor.fetchall():
			md.append({"medicine_id": row[0], "medicine_name": row[1]})
		conn.close()
		return render_template("medicine.html", medicine = md[0])
	if request.method == 'POST':
		name = str(request.form["medicine_name"])
		cursor.execute("UPDATE MEDICINE SET MEDICINE_NAME = %s WHERE MEDICINE_ID = %s", (medicine_name))
		conn.commit()
		conn.close()
		return redirect('/')

	if(__name__ == "__main__"):
		medicine.run()
	
	