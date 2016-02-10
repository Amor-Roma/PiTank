#
# Help from http://sourceforge.net/p/raspberry-gpio-python/wiki/BasicUsage/
#



# import the RPi.GPIO module
import RPi.GPIO as GPIO

# Pin numbering type
GPIO.setmode(GPIO.BCM)

# Setup channel for output
GPIO.setup(2, GPIO.OUT) 

# Return Status of pin
if GPIO.input(2):
	status = 'OFF'
else:
    status = 'ON'
print status
