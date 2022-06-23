"""

TP#16-rescate de naufragos - TRABAJO 5

"""

#>   creo el maximo del tablero: 

Eje_x_maximo = int(input("Ingrese el maximo del eje x del tablero del juego: "))
Eje_y_maximo = int(input("Ingrese el maximo del eje y del tablero del juego: "))
Extencion_maxima_del_tablero = (Eje_x_maximo,Eje_y_maximo)

print("Extencion maxima del tablero: ", Eje_x_maximo, "x", Eje_y_maximo)

# - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
# - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -


#>   creo las posiciones de la cantidad de naufragos que quiero:
    
Maximo_de_naufragos = int(input("Ingrese maximo de naufragos: "))

import random

#para determinar si me exedo con la cantidad de naufragos que puedo colocar en el tabler, volver a pedir valores correctos

while Maximo_de_naufragos > (Eje_x_maximo * Eje_y_maximo):
    print("\nNo es posible ingresar esa cantidad de naufragos en el tablero. Ingrese un tablero mas grande o coloque menos naufragos. \n")
    
    Eje_x_maximo = int(input("Ingrese el maximo del eje x del tablero del juego: "))
    Eje_y_maximo = int(input("Ingrese el maximo del eje y del tablero del juego: "))
    Extencion_maxima_del_tablero = (Eje_x_maximo,Eje_y_maximo)

    print("Extencion maxima del tablero: ", Eje_x_maximo, "x", Eje_y_maximo)

    Maximo_de_naufragos = int(input("Ingrese nuevamente el maximo de naufragos: "))


#random.sample(population, k)

#Creo la lista donde coloco los pares de los naufragos, otra para poner solo las x y otro para poner solo las y

lista_de_posiciones_de_naufragos = []

lista_de_posiciones_de_naufragos_en_x = []

lista_de_posiciones_de_naufragos_en_y = []

for naufrago in range(0, Maximo_de_naufragos):
    
    Posicion_del_naufrago_en_eje_X = random.randint(1, Eje_x_maximo)
    Posicion_del_naufrago_en_eje_Y = random.randint(1, Eje_y_maximo)
    Posicion_del_naufrago = (Posicion_del_naufrago_en_eje_X, Posicion_del_naufrago_en_eje_Y)
    #Posicion_del_naufrago = list(Posicion_del_naufrago)
    
    
    while Posicion_del_naufrago in lista_de_posiciones_de_naufragos:
        Posicion_del_naufrago_en_eje_X = random.randint(1, Eje_x_maximo)
        Posicion_del_naufrago_en_eje_Y = random.randint(1, Eje_y_maximo)
        Posicion_del_naufrago = (Posicion_del_naufrago_en_eje_X, Posicion_del_naufrago_en_eje_Y)
        
        
    else:
        
        lista_de_posiciones_de_naufragos.append(Posicion_del_naufrago)
        
        lista_de_posiciones_de_naufragos_en_x.append(Posicion_del_naufrago_en_eje_X)
        
        lista_de_posiciones_de_naufragos_en_y.append(Posicion_del_naufrago_en_eje_Y)

"""    
print(lista_de_posiciones_de_naufragos)
print(lista_de_posiciones_de_naufragos_en_x)
print(lista_de_posiciones_de_naufragos_en_y)
"""



# - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
# - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -

#>     pedir la cantidad de sondas que uno quiere usar y dsp si encuentra un naufrago

Maximo_de_sondas = int(input("Ingrese maximo de sondas: "))

Contador_de_naufragos = Maximo_de_naufragos
Contador_de_sondas = Maximo_de_sondas


for sonda in range(0, Maximo_de_sondas):    #repite la cantidad de sondas que tengas
    
    if Contador_de_naufragos == 0:
        break
    
    Posicion_de_la_sonda_en_eje_X = int(input(f"Ingrese la posicion en el eje x de la sonda numero {sonda + 1}: "))
    Posicion_de_la_sonda_en_eje_Y = int(input(f"Ingrese la posicion en el eje y de la sonda numero {sonda + 1}: "))
    Posicion_de_la_sonda = (Posicion_de_la_sonda_en_eje_X, Posicion_de_la_sonda_en_eje_Y)
     
        
        
    if Posicion_de_la_sonda in lista_de_posiciones_de_naufragos:    #si la posicion de la sonda agregada esta en la lista de naufragos
        print(f"Encontraste a un naufrago en la posicion {Posicion_de_la_sonda}")
        lista_de_posiciones_de_naufragos.remove(Posicion_de_la_sonda)   #elimina al naufrago que se genero en la lista para que no se repita
        
        lista_de_posiciones_de_naufragos_en_x.remove(Posicion_de_la_sonda_en_eje_X)

        lista_de_posiciones_de_naufragos_en_y.remove(Posicion_de_la_sonda_en_eje_Y)
        
        Contador_de_naufragos  = Contador_de_naufragos - 1  #disminuye la cantidad de naufragos a busacar
        Contador_de_sondas = Contador_de_sondas - 1 #disminuyen las sondas disponibles
        
        #print(lista_de_posiciones_de_naufragos)
        #print(lista_de_posiciones_de_naufragos_en_x)
        #print(lista_de_posiciones_de_naufragos_en_y)
        
    elif Posicion_de_la_sonda_en_eje_X in lista_de_posiciones_de_naufragos_en_x:
        Contador_de_sondas = Contador_de_sondas - 1 #disminuyen las sondas disponibles
        print("Hay un naufrago en el mismo eje x")
    
    elif Posicion_de_la_sonda_en_eje_Y in lista_de_posiciones_de_naufragos_en_y:
        Contador_de_sondas = Contador_de_sondas - 1 #disminuyen las sondas disponibles
        print("Hay un naufrago en el mismo eje y")

    
    
    else:
        Contador_de_sondas = Contador_de_sondas - 1 #disminuyen las sondas disponibles
        print("No encontraste a ningun naufrago, ni tampoco se encuentra un naufrago en ninguno de los dos ejes")

    print(f"Sondas disponibles: {Contador_de_sondas}")
    print(f"Naufragos por encontrar: {Contador_de_naufragos}")
 
    

if Contador_de_naufragos == 0:
    print("\n¡Encontraste a todos los naufragos!")
else:
    print(f"Te faltaron por encontrar {Contador_de_naufragos} naufragos")

#print(lista_de_posiciones_de_naufragos)
   
#else:
        #print("No encontraste un naufrago")
        
