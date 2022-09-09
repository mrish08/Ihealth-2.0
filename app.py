from distutils.log import debug
from flask import Flask, render_template,request, redirect,flash, url_for, session, logging
import os
import psycopg2

app=Flask(__name__,template_folder='template',static_folder='static')
def connection():
    s = 'localhost'
    d = 'test_db' 
    u = 'postgres' 
    p = '123'
    conn = psycopg2.connect(host=s, user=u, password=p, database=d)
    with conn:
        with conn.cursor() as curs:
            curs.execute
    return conn


@app.route("/index")
def index():
	return render_template("index.html")

@app.route("/clinic", methods=['GET'])
def clinic():
	clinic = []
	conn = connection()
	cursor = conn.cursor()
	if request.method == 'GET':
		cursor.execute("SELECT * FROM clinic_services")
		for row in cursor.fetchall():
			clinic.append({"clinic_services_id": row[0], "clinic_services_name": row[1]})
	conn.close()	
	return render_template("clinic.html", clinic = clinic)


@app.route("/addclinic", methods = ['POST'])
def addclinic():
	if request.method == 'POST':
		clinic_services_name = request.form['clinic_services_name']
	conn = connection()
	cursor = conn.cursor()
	cursor.execute('INSERT INTO clinic_services (clinic_services_name)'' VALUES (%s)', [clinic_services_name])
	conn.commit()
	conn.close()
	return redirect('/clinic')

@app.route('/updateclinic/<int:clinic_services_id>', methods = ['GET', 'POST'])
def updateclinic(clinic_services_id):
	uc = []
	conn = connection()
	cursor = conn.cursor()
	if request.method == 'GET':
		cursor.execute("SELECT * FROM clinic_services WHERE clinic_services_id = %s", (str(clinic_services_id)))
		for row in cursor.fetchall():
			uc.append({"clinic_services_id": row[0], "clinic_services_name": row[1]})
		conn.close()
		return render_template("clinic.html", clinic = uc[0])
	if request.method == 'POST':
		name = str(request.form["clinic_services_name"])
		cursor.execute("UPDATE clinic SET clinic_services_name = %s WHERE clinic_services_id= %s", (clinic_services_name))
		conn.commit()
		conn.close()
		return redirect('/clinic')

@app.route("/dental")
def dental():
	dental = []
	conn = connection()
	cursor = conn.cursor()
	cursor.execute("SELECT * FROM clinic_services")
	for row in cursor.fetchall():
		dental.append({"clinic_services_id": row[0], "clinic_services_name": row[1]})
	conn.close()	
	return render_template("clinic.html", dental = dental)


@app.route("/vaccination")
def vaccination():
	vaccination = []
	conn = connection()
	cursor = conn.cursor()
	cursor.execute("SELECT * FROM vaccine")
	for row in cursor.fetchall():
		vaccination.append({"vaccine_id": row[0], "vaccine_name": row[1], "lot_name": row[2], "brand_manufacturer": row[3]})
	conn.close()	
	return render_template("vaccination.php", vaccination = vaccination)

@app.route("/addvaccination", methods = ['POST'])
def addvaccination():
	if request.method == 'POST':
		vaccine_name = request.form['vaccine_name']
		lot_name = request.form['lot_name']
		brand_manufacturer = request.form['brand_manufacturer']
	conn = connection()
	cursor = conn.cursor()
	cursor.execute('INSERT INTO vaccine (vaccine_name, lot_name, brand_manufacturer)'' VALUES (%s, %s, %s)', [vaccine_name, lot_name, brand_manufacturer])
	conn.commit()
	conn.close()
	return redirect('/vaccination')

@app.route('/updatevaccination/<int:vaccine_id>', methods = ['GET', 'POST'])
def updatevaccination(vaccine_id):
	uv = []
	conn = connection()
	cursor = conn.cursor()
	if request.method == 'GET':
		cursor.execute("SELECT * FROM vaccine WHERE vaccine_id = %s", (str(vaccine_id)))
		for row in cursor.fetchall():
			uv.append({"vaccine_id": row[0], "vaccine_name": row[1], "lot_name": row[2], "brand_manufacturer": row[3]})
		conn.close()
		return render_template("vaccination.html", vaccine = uv[0])
	if request.method == 'POST':
		name = str(request.form["vaccine_name"])
		cursor.execute("UPDATE vaccine SET vaccine_name = %s WHERE vaccine_id = %s", (vaccine_name))
		conn.commit()
		conn.close()
		return redirect('/vaccination')

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
	