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


@app.route("/index")
def index():
	return render_template("index.html")

@app.route("/clinic")
def clinic():
	clinic = []
	conn = connection()
	cursor = conn.cursor()
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
		return render_template("updateclinic.html", clinic = uc[0])
	if request.method == 'POST':
		clinic_services_name = str(request.form["clinic_services_name"])
		cursor.execute("UPDATE clinic_services SET clinic_services_name = %s WHERE clinic_services_id = %s", (clinic_services_name, clinic_services_id))
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
	return render_template("vaccination.html", vaccination = vaccination)

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
			uv.append({"vaccine_id": row[0], "vaccine_name": row[1], "lot_name": row[2], "brand_manufacturer": row[3] })
		conn.close()
		return render_template("updatevaccination.html", vaccination = uv[0])
	if request.method == 'POST':
		vaccine_name = str(request.form["vaccine_name"])
		lot_name = str(request.form["lot_name"])
		brand_manufacturer = str(request.form["brand_manufacturer"])
		cursor.execute("UPDATE vaccine SET (vaccine_name, lot_name, brand_manufacturer) = (%s,%s,%s)  WHERE vaccine_id =(%s)", (vaccine_name, lot_name, brand_manufacturer, vaccine_id))
		conn.commit()
		conn.close()
		return redirect('/vaccination')


@app.route("/schedule")
def schedule():
	schedule = []
	conn = connection()
	cursor = conn.cursor()
	cursor.execute("SELECT * FROM clinic_sched")
	for row in cursor.fetchall():
		schedule.append({"clinic_sched_id": row[0], "schedule_name": row[1],"schedule": row[2]})
	conn.close()	
	return render_template("schedule.html", schedule = schedule)



@app.route("/addschedule", methods = ['GET', 'POST'])
def addschedule():
	if request.method == 'POST':
		schedule = request.form['schedule']
		schedule_name = request.form['schedule_name']
	conn = connection()
	cursor = conn.cursor()
	cursor.execute('INSERT INTO clinic_sched (schedule,schedule_name)'' VALUES (%s,%s)', [schedule,schedule_name])
	conn.commit()
	conn.close()
	return redirect('/schedule')


@app.route('/updateschedule/<int:clinic_sched_id>', methods = ['GET', 'POST'])
def updateschedule(clinic_sched_id):
	sc = []
	conn = connection()
	cursor = conn.cursor()
	if request.method == 'GET':
		cursor.execute("SELECT * FROM clinic_sched WHERE clinic_sched_id = %s", (str(clinic_sched_id)))
		for row in cursor.fetchall():
			sc.append({"clinic_sched_id": row[0], "schedule_name": row[1], "schedule": row[2]})
		conn.close()
		return render_template("updateschedule.html", schedule = sc[0])
	if request.method == 'POST':
		schedule = str(request.form["schedule_name"])
		schedule_name = str(request.form["schedule"])
		cursor.execute("UPDATE clinic_sched SET (schedule_name,schedule) = (%s,%s) WHERE clinic_sched_id = %s", (schedule_name,schedule,clinic_sched_id))
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
		cursor.execute("SELECT * FROM medicine WHERE medicine_id = %s", (str(medicine_id)))
		for row in cursor.fetchall():
			md.append({"medicine_id": row[0], "medicine_name": row[1]})
		conn.close()
		return render_template("updatemedicine.html", medicine = md[0])
	if request.method == 'POST':
		medicine_name = str(request.form["medicine_name"])
		cursor.execute("UPDATE medicine SET medicine_name = %s WHERE medicine_id = %s", (medicine_name, medicine_id))
		conn.commit()
		conn.close()
		return redirect('/medicine')

@app.route("/indexstaff")
def indexstaff():
	return render_template("indexstaff.html")

@app.route("/schedulestaff")
def schedulestaff():
	return render_template("schedulestaff.html")

@app.route("/clinicstaff")
def clinicstaff():
	return render_template("clinicstaff.html")

@app.route("/medicinestaff")
def medicinestaff():
	return render_template("medicinestaff.html")

@app.route("/vaccinationstaff")
def vaccinationstaff():
	return render_template("vaccinationstaff.html")

@app.route("/dentalstaff")
def dentalstaff():
	return render_template("dentalstaff.html")

@app.route("/indexresident")
def indexresident():
	return render_template("indexresident.html")

@app.route("/scheduleresident")
def scheduleresident():
	return render_template("scheduleresident.html")

@app.route("/dentalresident")
def dentalresident():
	return render_template("dentalresident.html")

@app.route("/vaccinationresident")
def vaccinationresident():
	return render_template("vaccinationresident.html")

@app.route("/clinicresident")
def clinicresident():
	return render_template("clinicresident.html")

@app.route("/medicineresident")
def medicineresident():
	return render_template("medicineresident.html")

if __name__ == '__main__':
	app.debug=True
	app.run(debug=True)
	