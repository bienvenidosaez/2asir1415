#-*- encoding: utf-8 -*-


class Persona:

	def __init__(self, nombre, apellidos, edad=0):
		self.nombre = nombre
		self.apellidos = apellidos
		self.edad = edad
		
	def presentarse(self):
		print u'Hola k ase soy %s %s y tengo %s años' % (self.nombre, self.apellidos, self.edad)


p1 = Persona('Pepito', 'Perez')
p2 = Persona('Juanito', 'Valderrama', 26)

p1.presentarse()
p2.presentarse()

print p1.nombre