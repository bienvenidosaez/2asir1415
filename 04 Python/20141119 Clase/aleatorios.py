#-*- encoding: utf-8 -*-

from random import randint

print u'Indique cuántos números quieres:'
nNumeros = int(input())

lAleatorios = []
for i in range(1, nNumeros+1):
	nAleatorio = randint(1,100)
	lAleatorios += [nAleatorio]


print u'Dime un número para ver si te toca la cesta:'
nCesta = int(input())

bEncontrado = False
for i in lAleatorios:
	if nCesta == i:
		bEncontrado = True
		break

print u'La lista de número es %s' % str(lAleatorios)

if bEncontrado==True:
	print 'Te ha tocado la cesta'
else:
	print 'Sigue rascando'