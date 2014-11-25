# -*- encoding: utf-8 -*-(
 
iLista=[1,1]
  
print u'¿Qué término de la sucesión de Fibonacci quieres?'
termino=int(input())

for i in (range(2, termino)):
	numero = iLista[len(iLista)-2] + iLista[len(iLista)-1]
	iLista += [numero]
 
print u'El término %s de la sucesión de Fibonacci es %s.' % (str(termino), str(iLista.pop()))