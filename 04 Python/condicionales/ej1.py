# -*- encoding: utf-8 -*-

print 'Dame el dividendo'
nN1 = int(input())

print 'Dame el divisor'
nN2 = int(input())

if nN2 != 0:
	cociente = nN1/nN2
	resto = nN1%nN2

	if resto == 0:
		print 'La división es exacta. Cociente: %s Resto: %s' % (str(cociente), str(resto))
	else:
		print 'La división no es exacta. Cociente: %s Resto: %s'  % (str(cociente), str(resto))
else:
	print 'No se puede dividir por 0'

print 'Fin del programa'