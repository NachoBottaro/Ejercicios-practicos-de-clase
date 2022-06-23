
print("""TABLERO DE AJEDREZ:
      
      8 . . . . . . . .
      7 . . . . . . . .
      6 . . . . . . . .
      5 . . . . . . . .
      4 . . . . . . . .
      3 . . . . . . . .
      2 . . . . . . . .
      1 . . . . . . . .
        1 2 3 4 5 6 7 8

Este programa esta hecho para probar si el rey negro esta en jaque por una de todas las piezas blancas que hay en el ajedrez""")




Valor_de_x_del_rey = int(input("Ingrese la posicion del rey Negro en el eje X: "))
Valor_de_y_del_rey = int(input("Ingrese la posicion del rey Negro en el eje Y: "))

Posicion_del_rey = (Valor_de_x_del_rey,Valor_de_y_del_rey)

while Valor_de_x_del_rey not in range (1, 9) or Valor_de_y_del_rey not in range(1,9):
    
    print("\nIngrese valores entre 1 y 8. El tablero de ajedres esta representado por un tablero 8x8. 8 filas (eje x) y 8 columnas (eje y)")
    Valor_de_x_del_rey = int(input("Ingrese la posicion del rey Negro en el eje X: "))
    Valor_de_y_del_rey = int(input("Ingrese la posicion del rey Negro en el eje Y: "))

    Posicion_del_rey = (Valor_de_x_del_rey,Valor_de_y_del_rey)
    

else:
    print("> La posicion del rey es:", Posicion_del_rey)
    
    pieza = input("""\nOPCIONES: 
    -Rey
    -Torre
    -Alfil
    -Peon
    -Reina
    -Caballo
                  
Ingrese la pieza que quiera colocar: """).lower()

piezas = "rey", "torre", "alfil", "peon", "reina", "caballo"

   

if Valor_de_x_del_rey in range(1,9) and Valor_de_y_del_rey in range(1,9):
    
    
    if pieza in piezas:
        
        
        #Jaque del rey
        if pieza == "rey":
            
            Valor_de_x_del_otroRey = int(input("Ingrese la posicion en el eje X del Rey blanco: "))
            Valor_de_y_del_otroRey = int(input("Ingrese la posicion en eje Y del Rey blanco: "))
            
            Posicion_del_otroRey = (Valor_de_x_del_otroRey,Valor_de_y_del_otroRey)
            
            if Valor_de_x_del_otroRey in range(1,9) and Valor_de_y_del_otroRey in range(1,9):
                print("> La posicion del Rey blanco es:", Posicion_del_otroRey)
                

                
                Movimiento_del_otroRey_1 = (Valor_de_x_del_otroRey + 1),(Valor_de_y_del_otroRey + 1) 
                
                Movimiento_del_otroRey_2 = (Valor_de_x_del_otroRey + 1),(Valor_de_y_del_otroRey - 1)
                
                Movimiento_del_otroRey_3 = (Valor_de_x_del_otroRey + 1),(Valor_de_y_del_otroRey)
                
                Movimiento_del_otroRey_4 = (Valor_de_x_del_otroRey - 1),(Valor_de_y_del_otroRey + 1)
                
                Movimiento_del_otroRey_5 = (Valor_de_x_del_otroRey - 1),(Valor_de_y_del_otroRey)
                
                Movimiento_del_otroRey_6 = (Valor_de_x_del_otroRey - 1),(Valor_de_y_del_otroRey - 1)
                
                Movimiento_del_otroRey_7 = (Valor_de_x_del_otroRey),(Valor_de_y_del_otroRey - 1)
                
                Movimiento_del_otroRey_8 = (Valor_de_x_del_otroRey),(Valor_de_y_del_otroRey + 1)
             
                Movimiento_del_otroRey = Movimiento_del_otroRey_1, Movimiento_del_otroRey_2, Movimiento_del_otroRey_3, Movimiento_del_otroRey_4, Movimiento_del_otroRey_5, Movimiento_del_otroRey_6, Movimiento_del_otroRey_7, Movimiento_del_otroRey_8
                
                if Posicion_del_rey in Movimiento_del_otroRey:
                    print("El rey Negro esta en jaque por el rey blanco")
                    
                
                else:
                    print("El rey no esta en jaque")
                    
            
            else:
                print("Ingrese valores entre 1 y 8")

            
        
        
        #Jaque de torre
        elif pieza == "torre":
            Valor_de_x_de_torre = int(input("Ingrese la posicion en el eje X del torre: "))
            Valor_de_y_de_torre = int(input("Ingrese la posicion en eje Y del torre: "))
            
            Posicion_de_torre = (Valor_de_x_de_torre,Valor_de_y_de_torre)
            
            if Valor_de_x_de_torre and Valor_de_y_de_torre in range(1,9):
                print("> La posicion del torre es:", Posicion_de_torre)
                
                
                if Valor_de_x_de_torre == Valor_de_x_del_rey or Valor_de_y_de_torre == Valor_de_y_del_rey:
                    print("El rey esta en jaque por la TORRE")
                    
                
                else:
                    print("El rey no esta en jaque")

            
            else:
                print("Ingrese valores entre 1 y 8")

            
        
        
            
        
        #Jaque de alfil
        elif pieza == "alfil":
            Valor_de_x_de_alfil = int(input("Ingrese la posicion en el eje X del alfil: "))
            Valor_de_y_de_alfil = int(input("Ingrese la posicion en eje Y del alfil: "))
            
            Posicion_de_alfil = (Valor_de_x_de_alfil,Valor_de_y_de_alfil)
            
            if Valor_de_x_de_alfil in range(1,9) and Valor_de_y_de_alfil in range(1,9):
                print("> La posicion del alfil es:", Posicion_de_alfil)
                
                
                #Todos los movimientos que puede realizar el alfil
                
                #Movimientos que puede hacer el alfil yendo en diagonal, de abajo hacia arriba y de izquierda a derecha
                
                Movimiento1_alfil = (Valor_de_x_de_alfil + 1, Valor_de_y_de_alfil + 1)
                
                Movimiento2_alfil = (Valor_de_x_de_alfil + 2, Valor_de_y_de_alfil + 2 )
               
                Movimiento3_alfil = (Valor_de_x_de_alfil + 3, Valor_de_y_de_alfil + 3 )
               
                Movimiento4_alfil = (Valor_de_x_de_alfil + 4, Valor_de_y_de_alfil + 4 ) 
               
                Movimiento5_alfil = (Valor_de_x_de_alfil + 5, Valor_de_y_de_alfil + 5 )
               
                Movimiento6_alfil = (Valor_de_x_de_alfil + 6, Valor_de_y_de_alfil + 6 )
               
                Movimiento7_alfil = (Valor_de_x_de_alfil + 7, Valor_de_y_de_alfil + 7 )
                
                
                Movimiento_hacia_arriba_hacia_derecha =  Movimiento1_alfil, Movimiento2_alfil, Movimiento3_alfil, Movimiento4_alfil, Movimiento5_alfil, Movimiento6_alfil, Movimiento7_alfil
                
                
                Movimiento8_alfil = (Valor_de_x_de_alfil - 1, Valor_de_y_de_alfil - 1)
                
                Movimiento9_alfil = (Valor_de_x_de_alfil - 2, Valor_de_y_de_alfil - 2 )
               
                Movimiento10_alfil = (Valor_de_x_de_alfil - 3, Valor_de_y_de_alfil - 3 )
               
                Movimiento11_alfil = (Valor_de_x_de_alfil - 4, Valor_de_y_de_alfil - 4 ) 
               
                Movimiento12_alfil = (Valor_de_x_de_alfil - 5, Valor_de_y_de_alfil - 5 )
               
                Movimiento13_alfil = (Valor_de_x_de_alfil - 6, Valor_de_y_de_alfil - 6 )
               
                Movimiento14_alfil = (Valor_de_x_de_alfil - 7, Valor_de_y_de_alfil - 7 )
                
                Movimientos_hacia_abajo_hacia_izquierda = Movimiento8_alfil, Movimiento9_alfil, Movimiento10_alfil, Movimiento11_alfil, Movimiento12_alfil, Movimiento13_alfil, Movimiento14_alfil 
                
                Movimiento15_alfil = (Valor_de_x_de_alfil - 1, Valor_de_y_de_alfil + 1)
                
                Movimiento16_alfil = (Valor_de_x_de_alfil - 2, Valor_de_y_de_alfil + 2 )
               
                Movimiento17_alfil = (Valor_de_x_de_alfil - 3, Valor_de_y_de_alfil + 3 )
               
                Movimiento18_alfil = (Valor_de_x_de_alfil - 4, Valor_de_y_de_alfil + 4 ) 
               
                Movimiento19_alfil = (Valor_de_x_de_alfil - 5, Valor_de_y_de_alfil + 5 )
               
                Movimiento20_alfil = (Valor_de_x_de_alfil - 6, Valor_de_y_de_alfil + 6 )
               
                Movimiento21_alfil = (Valor_de_x_de_alfil - 7, Valor_de_y_de_alfil + 7 )
                
                Movimientos_hacia_arriba_hacia_izquierda = Movimiento15_alfil, Movimiento16_alfil, Movimiento17_alfil, Movimiento18_alfil, Movimiento19_alfil, Movimiento20_alfil, Movimiento21_alfil
                
                Movimiento22_alfil = (Valor_de_x_de_alfil + 1, Valor_de_y_de_alfil - 1)
                
                Movimiento23_alfil = (Valor_de_x_de_alfil + 2, Valor_de_y_de_alfil - 2 )
               
                Movimiento24_alfil = (Valor_de_x_de_alfil + 3, Valor_de_y_de_alfil - 3 )
               
                Movimiento25_alfil = (Valor_de_x_de_alfil + 4, Valor_de_y_de_alfil - 4 ) 
               
                Movimiento26_alfil = (Valor_de_x_de_alfil + 5, Valor_de_y_de_alfil - 5 )
               
                Movimiento27_alfil = (Valor_de_x_de_alfil + 6, Valor_de_y_de_alfil - 6 )
               
                Movimiento28_alfil = (Valor_de_x_de_alfil + 7, Valor_de_y_de_alfil - 7 )
                
                Movimientos_hacia_abajo_hacia_derecha = Movimiento22_alfil, Movimiento23_alfil, Movimiento24_alfil, Movimiento25_alfil, Movimiento26_alfil, Movimiento27_alfil, Movimiento28_alfil
                
                
                
                Movimientos_del_alfil = ( Movimiento_hacia_arriba_hacia_derecha, Movimientos_hacia_abajo_hacia_izquierda, Movimientos_hacia_arriba_hacia_izquierda, Movimientos_hacia_abajo_hacia_derecha)
            
            
                if Posicion_del_rey in Movimiento_hacia_arriba_hacia_derecha or Posicion_del_rey in Movimientos_hacia_abajo_hacia_izquierda or Posicion_del_rey in Movimientos_hacia_arriba_hacia_izquierda or Posicion_del_rey in Movimientos_hacia_abajo_hacia_derecha:
                    print("El rey esta en jaque por el alfil")
                
                else:
                    print("El rey no esta en jaque")

            
            else:
                print("Ingrese valores entre 1 y 8")

            
        
       
        #Jaque del peon
        elif pieza == "peon":
            Valor_de_x_de_peon = int(input("Ingrese la posicion en el eje X del peon: "))
            Valor_de_y_de_peon = int(input("Ingrese la posicion en eje Y del peon: "))
            
            Posicion_de_peon = (Valor_de_x_de_peon,Valor_de_y_de_peon)
            
            if Valor_de_x_de_peon and Valor_de_y_de_peon in range(1,9):
                print("> La posicion del peon es:", Posicion_de_peon)
                
                
                #Movimiento_de_peon_en_eje_x_derecha = Valor_de_x_de_peon + 1 
                #Movimiento_de_peon_en_eje_y_x2 = Valor_de_y_de_peon + 2 
                
                
                Movimiento1_peon = (Valor_de_x_de_peon + 1, Valor_de_y_de_peon + 1)
                
                Movimiento2_peon = (Valor_de_x_de_peon - 1, Valor_de_y_de_peon + 1 )
               
                
                
                Movimientos_del_peon = ( Movimiento1_peon, Movimiento2_peon)
                
            
                if Posicion_del_rey in Movimientos_del_peon:
                    print("El rey esta en jaque por el peon")
                    
                
                else:
                    print("El rey no esta en jaque")

            
            else:
                print("Ingrese valores entre 1 y 8")

            
        
        #Jaque de la reina
        elif pieza == "reina":
            Valor_de_x_de_reina = int(input("Ingrese la posicion en el eje X del reina: "))
            Valor_de_y_de_reina = int(input("Ingrese la posicion en eje Y del reina: "))
            
            Posicion_de_reina = (Valor_de_x_de_reina,Valor_de_y_de_reina)
            
            if Valor_de_x_de_reina and Valor_de_y_de_reina in range(1,9):
                print("> La posicion del reina es:", Posicion_de_reina)
                
                
                #Todos los movimientos que puede realizar el reina
                
                #Movimientos que puede hacer el reina yendo en diagonal, de abajo hacia arriba y de izquierda a derecha
                
                Movimiento1_reina = (Valor_de_x_de_reina + 1, Valor_de_y_de_reina + 1)
                
                Movimiento2_reina = (Valor_de_x_de_reina + 2, Valor_de_y_de_reina + 2 )
               
                Movimiento3_reina = (Valor_de_x_de_reina + 3, Valor_de_y_de_reina + 3 )
               
                Movimiento4_reina = (Valor_de_x_de_reina + 4, Valor_de_y_de_reina + 4 ) 
               
                Movimiento5_reina = (Valor_de_x_de_reina + 5, Valor_de_y_de_reina + 5 )
               
                Movimiento6_reina = (Valor_de_x_de_reina + 6, Valor_de_y_de_reina + 6 )
               
                Movimiento7_reina = (Valor_de_x_de_reina + 7, Valor_de_y_de_reina + 7 )
                
                
                Movimiento_hacia_arriba_hacia_derecha =  Movimiento1_reina, Movimiento2_reina, Movimiento3_reina, Movimiento4_reina, Movimiento5_reina, Movimiento6_reina, Movimiento7_reina
                
                
                Movimiento8_reina = (Valor_de_x_de_reina - 1, Valor_de_y_de_reina - 1)
                
                Movimiento9_reina = (Valor_de_x_de_reina - 2, Valor_de_y_de_reina - 2 )
               
                Movimiento10_reina = (Valor_de_x_de_reina - 3, Valor_de_y_de_reina - 3 )
               
                Movimiento11_reina = (Valor_de_x_de_reina - 4, Valor_de_y_de_reina - 4 ) 
               
                Movimiento12_reina = (Valor_de_x_de_reina - 5, Valor_de_y_de_reina - 5 )
               
                Movimiento13_reina = (Valor_de_x_de_reina - 6, Valor_de_y_de_reina - 6 )
               
                Movimiento14_reina = (Valor_de_x_de_reina - 7, Valor_de_y_de_reina - 7 )
                
                Movimientos_hacia_abajo_hacia_izquierda = Movimiento8_reina, Movimiento9_reina, Movimiento10_reina, Movimiento11_reina, Movimiento12_reina, Movimiento13_reina, Movimiento14_reina 
                
                Movimiento15_reina = (Valor_de_x_de_reina - 1, Valor_de_y_de_reina + 1)
                
                Movimiento16_reina = (Valor_de_x_de_reina - 2, Valor_de_y_de_reina + 2 )
               
                Movimiento17_reina = (Valor_de_x_de_reina - 3, Valor_de_y_de_reina + 3 )
               
                Movimiento18_reina = (Valor_de_x_de_reina - 4, Valor_de_y_de_reina + 4 ) 
               
                Movimiento19_reina = (Valor_de_x_de_reina - 5, Valor_de_y_de_reina + 5 )
               
                Movimiento20_reina = (Valor_de_x_de_reina - 6, Valor_de_y_de_reina + 6 )
               
                Movimiento21_reina = (Valor_de_x_de_reina - 7, Valor_de_y_de_reina + 7 )
                
                Movimientos_hacia_arriba_hacia_izquierda = Movimiento15_reina, Movimiento16_reina, Movimiento17_reina, Movimiento18_reina, Movimiento19_reina, Movimiento20_reina, Movimiento21_reina
                
                Movimiento22_reina = (Valor_de_x_de_reina + 1, Valor_de_y_de_reina - 1)
                
                Movimiento23_reina = (Valor_de_x_de_reina + 2, Valor_de_y_de_reina - 2 )
               
                Movimiento24_reina = (Valor_de_x_de_reina + 3, Valor_de_y_de_reina - 3 )
               
                Movimiento25_reina = (Valor_de_x_de_reina + 4, Valor_de_y_de_reina - 4 ) 
               
                Movimiento26_reina = (Valor_de_x_de_reina + 5, Valor_de_y_de_reina - 5 )
               
                Movimiento27_reina = (Valor_de_x_de_reina + 6, Valor_de_y_de_reina - 6 )
               
                Movimiento28_reina = (Valor_de_x_de_reina + 7, Valor_de_y_de_reina - 7 )
                
                Movimientos_hacia_abajo_hacia_derecha = Movimiento22_reina, Movimiento23_reina, Movimiento24_reina, Movimiento25_reina, Movimiento26_reina, Movimiento27_reina, Movimiento28_reina
                
                
                
                Movimientos_del_reina = ( Movimiento_hacia_arriba_hacia_derecha, Movimientos_hacia_abajo_hacia_izquierda, Movimientos_hacia_arriba_hacia_izquierda, Movimientos_hacia_abajo_hacia_derecha)
            
            
                if Posicion_del_rey in Movimiento_hacia_arriba_hacia_derecha or Posicion_del_rey in Movimientos_hacia_abajo_hacia_izquierda or Posicion_del_rey in Movimientos_hacia_arriba_hacia_izquierda or Posicion_del_rey in Movimientos_hacia_abajo_hacia_derecha:
                    print("El rey esta en jaque por la reina")
                
                elif Valor_de_x_de_reina == Valor_de_x_del_rey or Valor_de_y_de_reina == Valor_de_y_del_rey:
                    print("El rey esta en jaque por la reina")
                
                else:
                    print("El rey no esta en jaque")

            
            else:
                print("Ingrese valores entre 1 y 8")

            

        #Jaque del caballo    
        elif pieza == "caballo":
            Valor_de_x_de_caballo = int(input("\nIngrese la posicion en el eje X del caballo: "))
            Valor_de_y_de_caballo = int(input("Ingrese la posicion en eje Y del caballo: "))
            
            Posicion_de_caballo = (Valor_de_x_de_caballo,Valor_de_y_de_caballo)
            
            if Valor_de_x_de_caballo and Valor_de_y_de_caballo in range(1,9):
                print("> La posicion del caballo es:", Posicion_de_caballo)
                
                
                #Todos los movimientos que puede realizar el caballo
                
                
                Movimiento1_caballo = (Valor_de_x_de_caballo + 1, Valor_de_y_de_caballo + 2)
                
                Movimiento2_caballo = (Valor_de_x_de_caballo + 1, Valor_de_y_de_caballo - 2 )
               
                Movimiento3_caballo = (Valor_de_x_de_caballo + 2, Valor_de_y_de_caballo + 1 )
               
                Movimiento4_caballo = (Valor_de_x_de_caballo + 2, Valor_de_y_de_caballo - 1 )
               
                Movimiento5_caballo = (Valor_de_x_de_caballo - 2, Valor_de_y_de_caballo - 1 )
               
                Movimiento6_caballo = (Valor_de_x_de_caballo - 2, Valor_de_y_de_caballo + 1 )
               
                Movimiento7_caballo = (Valor_de_x_de_caballo - 1, Valor_de_y_de_caballo + 2 )
                
                Movimiento8_caballo = (Valor_de_x_de_caballo - 1, Valor_de_y_de_caballo - 2 )
                
                Movimientos_del_caballo = ( Movimiento1_caballo, Movimiento2_caballo ,Movimiento3_caballo , Movimiento4_caballo, Movimiento5_caballo, Movimiento6_caballo, Movimiento7_caballo, Movimiento8_caballo)
                
            
                if Posicion_del_rey in Movimientos_del_caballo:
                    print("El rey esta en jaque por el caballo")
                    
                
                else:
                    print("El rey no esta en jaque")

            
            else:
                print("Ingrese valores entre 1 y 8")

            
    else:
        print("Ingrese una pieza valida, observe las opciones")
        
#####fin

