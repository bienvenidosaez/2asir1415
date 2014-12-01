#-*- encoding: utf-8 -*-


def factorial( n ):
   if n==1:
       return 1
   else:
       returnNumber = n * factorial( n - 1 )
       return returnNumber


print factorial(5)