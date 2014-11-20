#-*- encoding: utf-8 -*-

print u'Indique cuántos números quiere insertar:'
nNumeros = int(input())
nMayor = False
nMenor = False
nMedia = 0

for i in range(1, nNumeros+1):
	
	print 'Dame el número %s' % str(i)
	numeroMetido = int(input())
	
	if numeroMetido > nMayor:
		nMayor = numeroMetido
	
	if numeroMetido < nMenor:
		nMenor = numeroMetido
	
	nMedia += numeroMetido

nMedia = nMedia/nNumeros

print 'El mayor es %s' % str(nMayor)
print 'El menor es %s' % str(nMenor)
print 'La media es %s' % str(nMedia)
