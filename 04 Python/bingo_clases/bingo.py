#-*- encoding: utf-8 -*-

from clase_carton import Carton
from clase_jugador import Jugador
from clase_bombo import Bombo


b = Bombo()
b.imprimir()

j1 = Jugador('Pepita', 'Perez')
j1.presentarse()

bola = b.sacar_bola()
print bola

b.imprimir()