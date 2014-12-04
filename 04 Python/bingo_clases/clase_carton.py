#-*- encoding: utf-8 -*-

from random import randint


class Carton:

	def __init__(self, limiteInferior=1, limiteSuperior=90):
		self.numeros = []
		while(len(self.numeros)<15):
			numero = randint(limiteInferior, limiteSuperior)
			if numero in self.numeros:
				continue
			else:
				self.numeros += [numero]

	def comprueba_numero(self, numero):
		if numero in self.numeros:
			self.numeros.remove(numero)
			return True
		else:
			return False

	def imprimir(self):
		print u'%s' % self.numeros

	def tienes_numeros(self):
		if len(self.numeros)>0:
			return True
		else:
			return False



