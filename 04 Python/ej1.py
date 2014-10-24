# -*- encoding: utf-8 -*-

# http://www.mclibre.org/consultar/python/ejercicios/ej_variables.html

# Inicializamos las variables
n1 = 0
n2 = 0

# Pedimos el primer número por pantalla
print 'Introduzca el primer número'
n1 = float(input())

print 'Introduzca el segundo número'
n2 = float(input())

# Calculamos la media, atención a los paréntesis
media_aritmetica = (n1+n2)/2

print 'La media aritmética es: ' + str(media_aritmetica)
