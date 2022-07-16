#!/usr/bin/env python

from re import L
import sys
import MySQLdb

miConexion = MySQLdb.connect( host='127.0.0.1', user= 'root', db='pruebas' )
cur = miConexion.cursor()
mySqlInsert = "INSERT INTO documentFin (co, localizacion, categoria, idItem, nombre, cantidad, fecha, lote) VALUES (%s, %s, %s, %s, %s, %s, %s, %s)"

def insertarTabla(co, localizacion, categoria, idItem, nombre, cantidad, fecha, lote):
    val = (co, localizacion, categoria, idItem, nombre, cantidad, fecha, lote)
    try:
        cur.execute(mySqlInsert, val)
        miConexion.commit()
    except:
        print(val)
def verificarFecha(fecha):
    if(len(fecha) == 10):
        if(fecha[4] == "/" and fecha[7] == "/"):
            return True
        else:
            return False
    else:
        return False


def probar():
    with open("UCIN3053.p01") as archivo:
        lines = archivo.readlines()
    co = ""
    localizacion = ""
    categoria = ""
    contadorMas = 0
    matriz = []
    listaTemp = []
    for x in range(len(lines)):
        temp = lines[x].split()
        if(len(temp) > 1):
            if(temp[1] == "C.O."):
                co = temp[3] + " " + temp[4]
            elif(temp[1] == "Localizacion"):            
                local = temp[3:len(temp) - 1]
                
                
            elif(temp[1] == "Categoria"):
                categoria = temp[3] 

            if(temp[0].isnumeric()):
                if(temp[1].isnumeric()):
                    listaTemp.append(cod)
                    listaTemp.append(cadena)
                    listaTemp.append(temp[1])
                    listaTemp.append(temp[0])
                    listaTemp.append("")
                    matriz.append(listaTemp)
                    listaTemp = []
                elif(verificarFecha(temp[1])):
                    listaTemp.append(cod)
                    listaTemp.append(cadena)
                    listaTemp.append(temp[2])
                    listaTemp.append(temp[0])
                    listaTemp.append(temp[1])
                    matriz.append(listaTemp)
                    listaTemp = []
                else:
                    listaTemp.append(temp[0])
                    cod = temp[0]
                    cadena = ""
                    for x in range(1, len(temp)):
                        if(temp[x].isnumeric() and (temp[x + 1] == "UND" or temp[x + 1] == "FCO" or temp[x + 1] == "CJA" or temp[x + 1] == "FRA")):
                            numTemp = x
                            break
                        cadena += temp[x] + " "
                    listaTemp.append(cadena)   
                    listaTemp.append(temp[numTemp])
                    listaTemp.append("") 
                    listaTemp.append("")     
                    matriz.append(listaTemp)
                    listaTemp = []
            elif(temp[0] != "|"):
                if(temp[0][len(temp[0]) - 2]) == "-":
                    if(verificarFecha(temp[1])):
                        listaTemp.append(cod)
                        listaTemp.append(cadena)
                        listaTemp.append(temp[2])
                        listaTemp.append(temp[0])
                        listaTemp.append(temp[1])
                        matriz.append(listaTemp)
                        listaTemp = []
                    else:
                        listaTemp.append(cod)
                        listaTemp.append(cadena)
                        listaTemp.append(temp[1])
                        listaTemp.append(temp[0])
                        listaTemp.append("")
                        matriz.append(listaTemp)
                        listaTemp = []
        elif(len(temp) == 1):
            contadorMas += 1
        if(contadorMas == 4):
            contadorMas = 0
            for w in range(len(local)):
                localizacion += local[w] + " "

            #Añadir matriz e identificadores
            for x in range(len(matriz)):
                insertarTabla(co, localizacion, categoria, matriz[x][0], matriz[x][1], matriz[x][2], matriz[x][3], matriz[x][4])
            matriz = []
            localizacion = ""
    cur.close()
    print("HHHHHH")
probar()