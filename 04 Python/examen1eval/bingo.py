#-*- encoding: utf-8 -*

from random import shuffle
from random import randint


def generar_bombo():
	bombo = range(1,91)
	shuffle(bombo)
	return bombo

def generar_carton():
	carton = []
	while len(carton) < 15:
		numero = randint(1,90)
		if numero in carton:
			continue
		else:
			carton += [numero]
	return carton

def saca_bola_bombo():
	global bombo
	bola_sacada = bombo.pop()
	return bola_sacada

##################################################################

bombo = generar_bombo()

# Creamos los cartones
carton1 = generar_carton()
carton2 = generar_carton()


print u'El bombo generado es: %s' % str(bombo)
print u'El cartón del jugador 1 es: %s' % str(carton1)
print u'El cartón del jugador 2 es: %s' % str(carton2)

while len(carton1) > 0 and len(carton2) > 0:
	bola_sacada = saca_bola_bombo()
	print u'La bola extraida es: %s' % str(bola_sacada)
	if bola_sacada in carton1:
		carton1.remove(bola_sacada)

	if bola_sacada in carton2:
		carton2.remove(bola_sacada)

if len(carton1) == 0 and len(carton2)==0:
	print 'El premio se reparte entre los dos'
elif len(carton1) == 0:
	print u'Ha ganado el jugador 1'
	print u'El jugador 2 le quedan los siguientes números: %s' % str(carton2)
	print u'En el bombo quedan los siguientes números: %s' % str(bombo)
else:
	print u'Ha ganado el jugador 2'
	print u'El jugador 1 le quedan los siguientes números: %s' % str(carton1)
	print u'En el bombo quedan los siguientes números: %s' % str(bombo)





