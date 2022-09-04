from distutils.log import debug
from flask import Flask, render_template, request

app=Flask(__name__,template_folder='template',static_folder='static')
def connection():
    s = 'localost'
    d = 'IHEALTH_DATABASE'
    u = 'postgres'
    p = '123'
    conn = psycopg2.connect(host=s, user=u, password=p, database=d)
    return conn

@app.route("/")
def medicine():
	medicine = []
	conn = connection()
	cursor = conn.cursor()
	cursor.execute("SELECT * FROM MEDICINE")
	for row in cursor.fetchall():
		medicine.append({"medicine_id": row[0], "medicine_name": row[1]})
	conn.close()	
	return render_template("medicine.html", medicine = medicine)

@app.route("/addmedicine", methods = ['GET','POST'])    
if __name__ == '__main__':
    app.debug=True
    app.run(debug=True)