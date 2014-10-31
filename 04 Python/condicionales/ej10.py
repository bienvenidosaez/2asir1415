#-*- encoding: utf-8 -*-
print "Convertidor de centímetros a kilometros, metros y centimetros"
 
print "Escriba una distancia en centimetros: "
iCm = int(input()) 
iKm = iCm // 100000
iM = (iCm % 100000) / 100
iRestoCm = (iCm % 100000) % 100

if iCm == 0:
	print 'Ha insertado un 0'
else:
	print ('%s son %s kilómetros, %s metros y %s centímetros') % (str(iCm), str(iKm), str(iM), str(iRestoCm))