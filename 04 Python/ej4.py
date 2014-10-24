# -*- encoding: utf-8 -*-


print 'Convertidor de pies y pulgadas a centímetros'

print 'Escriba una cantidad de pies'
nPies = float(input())

print 'Escriba una cantidad de pulgadas'
nPulgadas = float(input())

nCentimetros = (nPies*12 + nPulgadas) * 2.54

print '%s pies y %s pulgadas son %s cm' % (str(nPies), str(nPulgadas), str(nCentimetros))
