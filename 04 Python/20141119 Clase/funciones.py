#-*- encoding: utf-8 -*-
# Funciones (2) - 04
 

# Esta función recibe un año y dice si es bisiesto y la razón
# Función
def anoBisiesto (nAno):
	if nAno % 400 == 0 or (nAno % 100 != 0 and nAno % 4 == 0):
		return True
	else:
		return False


print ('Comparador de años bisiestos')
print ('Escriba un año y le diré si es bisiesto')
nAno = int(input())

if anoBisiesto(nAno):
	print (u'El año %s es bisiesto' % str(nAno))
else:
	print (u'El año %s no es bisiesto' % str(nAno))