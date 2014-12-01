#-*- encoding: utf-8 -*-

from funciones import *


# Comienzo del programa
print u'Dame el límite inferior'
limite_i = int(input())

print u'Dame el límite superior'
limite_s = int(input())

lista = busca_pares_intervalo(limite_i, limite_s)

print u'Los números pares entre %s y %s son: %s' % (str(limite_i), str(limite_s), str(lista))
imprime_hola()