#-*- encoding: utf-8 -*

print 'Escribe una cadena:'
cadena = str(input())

print list(cadena[:len(cadena)/2])
print list(reversed(cadena[len(cadena)/2+1:]))

if cadena[:len(cadena)/2] == list(reversed(cadena[len(cadena)/2+1:])):
	print 'Es palíndromo'
else:
	print 'No lo es'