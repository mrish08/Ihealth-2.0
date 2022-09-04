from distutils.log import debug
from flask import Flask, render_template, request

app=Flask(__name__,template_folder='../../template',static_folder='static')

@app.route("/")
def index():
    return render_template("index.html")

@app.route("/medicine")
def medicine():
    return render_template("medicine.html")

if __name__ == '__main__':
    app.debug=True
    app.run()