#-*- encoding: utf-8 -*-


def es_par(numero):
	if numero%2 == 0:
		return True
	else:
		return False

def busca_pares_intervalo(lInferior, lSuperior):
	lista_pares = []
	for i in range(lInferior, lSuperior+1):
		if es_par(i):
			lista_pares+=[i]

	# Me tiene que devolver una lista de los numeros pares que hay entre los dos límites
	return lista_pares

def imprime_hola():
	print 'hola'