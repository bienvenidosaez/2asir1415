#-*- encoding: utf-8 -*-

from random import shuffle

class Bombo:

	def __init__(self, limiteInferior=1, limiteSuperior=90):
		self.numeros = range(limiteInferior, limiteSuperior+1)
		shuffle(self.numeros)

	def imprimir(self):
		print self.numeros

	def sacar_bola(self):
		bola = self.numeros.pop()
		return bola
