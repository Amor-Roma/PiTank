#
# Help from http://sourceforge.net/p/raspberry-gpio-python/wiki/BasicUsage/
#


# import the RPi.GPIO module
import RPi.GPIO as GPIO

# Pin numbering type
GPIO.setmode(GPIO.BCM)

# Setup channel for output
GPIO.setup(10, GPIO.OUT) 

# Turn on pin
GPIO.output(10, False)