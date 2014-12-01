#-*- encoding: utf-8 -*

print 'Escribe una cadena:'
cadena = str(input())

cadena = cadena.replace(' ','').lower()

if cadena[:len(cadena)/2] == cadena[::-1][:len(cadena)/2]:
	print 'Es palíndromo'
else:
	print 'No lo es'