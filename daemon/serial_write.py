#!/usr/bin/env python

# A test file for the serial port
import time
import serial

ser = serial.Serial( 
    port='/dev/ttyS0',
    baudrate = 9600,
    parity=serial.PARITY_NONE,
    stopbits=serial.STOPBITS_ONE,
    bytesize=serial.EIGHTBITS,
    timeout=1
    )
counter=0

while 1:
    ser.write('%d'%(counter))
    #ser.write('T')
    time.sleep(1)
    counter +=1

