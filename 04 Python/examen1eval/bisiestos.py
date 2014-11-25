#-*- encoding: utf-8 -*-

print ('%s' % u'Dame el primer año: ')
nAnoInferior = int(input())

print (u'Dame el segundo año: ')
nAnoSuperior = int(input())

while(nAnoSuperior <= nAnoInferior):
	print (u'Dame el segundo año: ')
	nAnoSuperior = int(input())


nDiferencia = nAnoSuperior - nAnoInferior
nAnosBisiestos = []

while (nAnoInferior < nAnoSuperior):
	if (nAnoInferior % 4 == 0 and nAnoInferior % 100 != 0) or nAnoInferior % 400 == 0:
		nAnosBisiestos += [nAnoInferior]
	nAnoInferior += 1

nDias = len(nAnosBisiestos)*366 + (nDiferencia - len(nAnosBisiestos))* 365

print u'Entre %s y %s hay %s años bisiestos y %s días' % (str(nAnoSuperior-nDiferencia), str(nAnoSuperior), str(len(nAnosBisiestos)), str(nDias))

print nAnosBisiestos

