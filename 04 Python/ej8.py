# -*- encoding: utf-8 -*-

print 'Convertidor a gruesas y docenas'
print 'Escriba una cantidad (entera)'

nUnidades = int(input())

nGruesas = nUnidades/(12*12)
nRestoGruesas = nUnidades%(12*12)
nDocenas = nRestoGruesas/12
nRestoUnidades = nRestoGruesas%12

print '%s unidades son %s gruesas, %s docenas y %s unidades' % (str(nUnidades), str(nGruesas), str(nDocenas), str(nRestoUnidades))
