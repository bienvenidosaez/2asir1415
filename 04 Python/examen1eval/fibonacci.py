#-*- encoding: utf-8 -*-

print ('%s' % u'Indica el término de la sucesión de Fibonacci que quieres: ')
nTermino = int(input())

nAntepenultimo = 1
nPenultimo = 1

contador = 2
lTerminos = [nAntepenultimo, nPenultimo]

while contador < nTermino:
	temporal = nAntepenultimo + nPenultimo
	lTerminos += [temporal]
	nAntepenultimo = nPenultimo
	nPenultimo = temporal
	contador += 1

print lTerminos