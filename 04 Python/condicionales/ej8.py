# -*- encoding: utf-8 -*-
# Ejercicio 8. Juan Aurelio

import math
 
print ('Ecuación a x² + b x + c = 0')
print ('Escriba el valor del coeficiente a')
nCoeficienteA = float(input())
 
print ('Escriba el valor del coeficiente b')
nCoeficienteB = float(input())
 
print ('Escriba el valor del coeficiente b')
nCoeficienteC = float(input())
 
# Esta es la fórmula ->>>>      x = (-b ± √(b2-4ac) ) / (2a)
 
nSolucion1= float(nCoeficienteB**2-4*nCoeficienteA*nCoeficienteC)
 
if nSolucion1 < 0:
    print('Ecuacion no tiene solucion')
 
elif nSolucion1 ==0:
    s = -nCoeficienteB/2*nCoeficienteA
    print ('Solucion unica: ' + str(s))
else:
    nS1 = (-nCoeficienteB + math.sqrt((nCoeficienteB**2 - 4 * nCoeficienteA * nCoeficienteC))) / (2*nCoeficienteA)
    nS2 = (-nCoeficienteB - math.sqrt((nCoeficienteB**2 - 4 * nCoeficienteA * nCoeficienteC))) / (2*nCoeficienteA)
    print('Las soluciones son las siguientes')
    print('Solucion 1: '+ str(nS1))
    print('Solución 2: '+ str(nS2))
