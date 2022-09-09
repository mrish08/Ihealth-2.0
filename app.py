from distutils.log import debug
from flask import Flask, render_template,request, redirect,flash, url_for, session, logging
import os
import psycopg2

app=Flask(__name__,template_folder='template',static_folder='static')
def connection():
    s = 'localhost'
    d = 'iHealth_database' 
    u = 'postgres' 
    p = '123'
    conn = psycopg2.connect(host=s, user=u, password=p, database=d)
    with conn:
        with conn.cursor() as curs:
            curs.execute
    return conn

@app.route("/")
def index():
	return render_template("index.html")

@app.route("/clinic")
def clinic():
	return render_template("clinic.html")

@app.route("/dental")
def dental():
	return render_template("dental.html")

@app.route("/vaccination")
def vaccination():
	return render_template("vaccination.html")

@app.route("/schedule")
def schedule():
	return render_template("schedule.html")

@app.route("/addschedule")
def addschedule():
	if request.method == 'POST':
		schedule_name = request.form['schedule_name']
	conn = connection()
	cursor = conn.cursor()
	cursor.execute('INSERT INTO medicine (schedule_name)'' VALUES (%s)', [schedule_name])
	conn.commit()
	conn.close()
	return redirect('/schedule')

@app.route("/medicine")
def medicine():
	medicine = []
	conn = connection()
	cursor = conn.cursor()
	cursor.execute("SELECT * FROM medicine")
	for row in cursor.fetchall():
		medicine.append({"medicine_id": row[0], "medicine_name": row[1]})
	conn.close()	
	return render_template("medicine.html", medicine = medicine)
	
@app.route("/addmedicine", methods = ['GET', 'POST'])
def addmedicine():
	if request.method == 'POST':
		medicine_name = request.form['medicine_name']
	conn = connection()
	cursor = conn.cursor()
	cursor.execute('INSERT INTO medicine (medicine_name)'' VALUES (%s)', [medicine_name])
	conn.commit()
	conn.close()
	return redirect('/medicine')

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
		return redirect('/medicine')
		
if __name__ == '__main__':
	app.debug=True
	app.run(debug=True)
	