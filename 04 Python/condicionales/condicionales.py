# -*- encoding: utf-8 -*-

# print 'Introduzca un número:'

# nNumero = input()

# if nNumero > 10:
# 	print 'El número insertado es mayor que diez'
# elif nNumero < 10:
# 	print 'El número insertado es menor que diez'
# else:
# 	print 'El número insertado es 10!'

print 'Introduzca un nombre:'
sNombre = str(input())

tNombre = ('Ramon', 'Juan', 'Bienve')

if sNombre in tNombre:
	print 'Es alguno de los mayores de la clase'
elif sNombre == 'Aida':
	print 'Es la chica de la clase'
else:
	print 'Ni idea de quien es'
