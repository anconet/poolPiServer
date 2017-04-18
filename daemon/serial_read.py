#!/usr/bin/env python

import time
import serial
import string

ser = serial.Serial(
    port='/dev/ttyS0',
    baudrate=9600,
    parity=serial.PARITY_NONE,
    stopbits=serial.STOPBITS_ONE,
    bytesize=serial.EIGHTBITS
    )


while 1:
	start = time.time()
	x=ser.read()
	#localtime = time.asctime(time.localtime(time.time()))
	end = time.time()
	print (end - start)," : ",x.hexdigits()

