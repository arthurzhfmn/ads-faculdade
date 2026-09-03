#função sem parametro e com retorno
def soma():
    while True:
        try:
            n1 = int(input('Digite um número: '))
            n2 = int(input('Digite outro número: '))
            break
        except ValueError:
            print('Digite valores inteiros')
    return n1 + n2

#inicio do programa
for i in range(5):
    print(f'A soma é {soma()}')