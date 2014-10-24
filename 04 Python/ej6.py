# -*- encoding: utf-8 -*-

print 'Convertidor de segundos a minutos'

print 'Escriba una cantidad de segundos'
nSegundos = int(input())

nMinutos = nSegundos/60
nRestoSegundos = nSegundos%60

print str(nSegundos) + ' segundos son ' + str(nMinutos) + ' minutos ' + str(nRestoSegundos) + ' segundos' 