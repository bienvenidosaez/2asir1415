#-*- encoding: utf-8 -*-

from clase_carton import Carton


class Jugador:
	def __init__(self, nombre, apellidos):
		self.nombre = nombre
		self.apellidos = apellidos
		self.carton = Carton()
		
	def presentarse(self):
		print ('Hola soy %s %s y tengo el siguiente cartón:' % (self.nombre, self.apellidos))
		self.carton.imprimir()
