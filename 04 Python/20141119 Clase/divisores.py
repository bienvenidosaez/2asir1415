#-*- encoding: utf-8 -*-
# Función de devuelve los divisores de un número pasado como parámetro

def divisores(nNumero):
	divisores = []
	for contador in range(2,(nNumero//2)+1):
		if ((nNumero % contador) == 0):
			divisores += [contador]

	return divisores


print ('Dame un número y te diré sus divisores:')
nX = int(input())

divs = divisores(nX)

if len(divs) > 0:
	print 'Los divisores de %s son:' % str(nX)
	print divs
else:
	print u'El número %s es primo' % str(nX)
