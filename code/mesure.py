#!/usr/bin/env python

import os
import RPi.GPIO as GPIO
import time
from gpiozero import LightSensor
from time import sleep
import decimal
import MySQLdb as mdb 
import datetime

########## Initializing output sensor ##########


##### For light sensor on pin 12
ldr = LightSensor(12)

##### For humidity sensor on pin 17
channel = 17
GPIO.setmode(GPIO.BCM)
GPIO.setup(channel, GPIO.IN)
##### For temperature
"""
    For this sensor we popen (take the value of the bash command) the files
    We take the last line with `tail -n 1`
    Now with -f10 we cut at the 10th field when there is a ' ' with -d
    Before the end with the rest we cut at the 2nd tail when there is a egual
    And finally we read the rest of our os.popen
"""
temp = os.popen("cat /sys/bus/w1/devices/28-03179779d0e6/w1_slave | tail -n 1 | cut -f10 -d ' ' | cut -f 2 -d '='").read()


#--------------------------------------------------------------------------#


##########  Calculating value ##########

while True:

##### Take time

    datenow = datetime.datetime.now()
    datefake = str(datenow)
    date = (datefake[0:19])

##### For light sensor

    value_light = (ldr.value) * 100
    if value_light < 0 :
        value_light = 0

    light = str(round(value_light))


##### For humidity sensor

    humidity = str(round(GPIO.input(channel)))

##### For temperature

    temp_int = round(int(temp) / 1000)

    temperature = str(temp_int)

##### Here we open a file where we will write all values

    values = open("/home/pi/programme/values.txt", "a")
    values.write(light + ";" + humidity + ";" + temperature + ";" + date )
    values.close()

##### Insert into database
    
    # Connect to the dataase
    con = mdb.connect('localhost', 'pi', 'root', 'bdd_plantes')

    # We create the cursor for make request in sql
    cur = con.cursor()

    # We collect the plant's id who have been chose by the user
    cur.execute("SELECT id_plante FROM plante_select WHERE id_bool = 1")

    # We collect the answer of the request
    id_strslct = cur.fetchone()
    id_str = str(id_strslct[0])


    # We write in the database with the plant's id
    cur.execute("INSERT INTO releve (rlv_humidite, rlv_temperature, rlv_luminosite, Time, id_table_releve) VALUES (" + humidity + "," + temperature + "," + light + ", '" + date + "', " + id_str + " )")
    con.commit()
    con.close()

    ###### A shity try

#    os.system("sudo mysql -u root -p")
#    os.system("root")
#    os.system("USE bdd_plantes INSERT INTO releve (rlv_hmuidite, rlv_temperature, rlv_luminosite) VALUES (" + humidity + "," + temperature + "," + light + ");")
#    os.system("SELECT * FROM releve")
    
    sleep(5)
