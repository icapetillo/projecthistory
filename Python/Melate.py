import random

# Definir una función para comprobar si un número es primo
def es_primo(n):
    if n < 2:
        return False
    for i in range(2, int(n**0.5) + 1):
        if n % i == 0:
            return False
    return True

# Definir una función para generar una secuencia de 6 números aleatorios entre 1 y 56
def generar_secuencia():
    secuencia = []
    while len(secuencia) < 6:
        numero = random.randint(1, 56) # Generar un número entero aleatorio entre 1 y 56
        if numero not in secuencia: # Evitar números repetidos
            secuencia.append(numero)
    return secuencia

# Generar 4 secuencias de 6 números aleatorios
for j in range(4):
    secuencia = generar_secuencia()

    # Contar cuántos números primos hay en la secuencia
    primos = 0
    for numero in secuencia:
        if es_primo(numero):
            primos += 1

    # Si hay más de dos números primos, reemplazar algunos por números compuestos
    while primos > 2:
        for i in range(len(secuencia)):
            if es_primo(secuencia[i]):
                numero = random.randint(1, 56) # Generar un nuevo número aleatorio
                if not es_primo(numero) and numero not in secuencia: # Asegurar que sea compuesto y no repetido
                    secuencia[i] = numero # Reemplazar el número primo por el compuesto
                    primos -= 1 # Reducir el contador de primos
                    break # Salir del bucle

    # Si hay menos de dos números primos, reemplazar algunos por números primos
    while primos < 2:
        for i in range(len(secuencia)):
            if not es_primo(secuencia[i]):
                numero = random.randint(1, 56) # Generar un nuevo número aleatorio
                if es_primo(numero) and numero not in secuencia: # Asegurar que sea primo y no repetido
                    secuencia[i] = numero # Reemplazar el número compuesto por el primo
                    primos += 1 # Aumentar el contador de primos
                    break # Salir del bucle

    # Ordenar la secuencia de menor a mayor
    secuencia.sort()

    # Imprimir la secuencia como una cadena de texto separada por comas
    print(", ".join(str(numero) for numero in secuencia))
