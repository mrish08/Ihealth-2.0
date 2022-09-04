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
def index():
    return render_template("index.html")

@app.route("/medicine")
def medicine():
    return render_template("medicine.html")

if __name__ == '__main__':
    app.debug=True
    app.run()