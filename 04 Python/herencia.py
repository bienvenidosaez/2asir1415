# -*- encoding: utf-8 -*-


class Persona:
    def __init__(self, nombre, apellidos):
        self.nombre = nombre
        self.apellidos = apellidos

    def presentarse(self):
        print u'Hola k ase soy %s %s' % (self.nombre, self.apellidos)


class Empleado(Persona):
    
    def __init__(self, nombre, apellidos, cargo):
        Persona.__init__(self, nombre, apellidos)
        self.cargo = cargo


    def trabajar(self):
        print 'Hola estoy trabajando'


class Jefe(Persona):

    def mandar(self):
        print 'Hola estoy mandando'

    def trabajar(self):
        self.mandar()


class JefeSeccion(Jefe, Empleado):

	def __init__(self, nombre, apellidos, cargo, seccion):
		Empleado.__init__(self, nombre, apellidos, cargo)
		self.seccion = seccion

	def dime_seccion(self):
		print 'Soy jefe de la seccion %s ' % self.seccion

    


p1 = Persona('Juan', 'Perez')
p1.presentarse()


e = Empleado('Bienvenido', 'Saez', 'Jefe')
e.presentarse()
e.trabajar()

j = Jefe('Jefe', 'Supremo')
j.presentarse()
j.trabajar()

js = JefeSeccion('Pepe', 'Sanchez', 'Jefe de seccion', 'Teles')
js.presentarse()
js.dime_seccion()




