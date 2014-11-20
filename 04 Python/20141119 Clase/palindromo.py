#-*- encoding: utf-8 -*-

print 'Introduce una palabra:'
palabra = str(input())


letras = len(palabra)
principio = 0
final = letras-1

es_palindromo = True

while(principio<final):
	if palabra[principio] == palabra[final]:
		principio = principio + 1
		final = final - 1
		continue
	else:
		es_palindromo = False
		break

if es_palindromo:
	print 'La palabra es palindroma'
else:
	print 'No'
