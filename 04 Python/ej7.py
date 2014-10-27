# -*- encoding: utf-8 -*-

print 'Convertidor de segundos a horas y minutos'
print 'Escriba una cantidad de segundos'

nSegundos = int(input())

nHoras = nSegundos/3600
nRestoSegundos = nSegundos%3600
nMinutos = nRestoSegundos/60

nRestoSegundos = nRestoSegundos%60

print '%s segundos son %s horas, %s minutos y %s segundos' % (str(nSegundos), str(nHoras), str(nMinutos), str(nRestoSegundos))
