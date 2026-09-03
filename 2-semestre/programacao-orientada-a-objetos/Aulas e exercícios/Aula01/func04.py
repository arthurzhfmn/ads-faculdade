def somar(n1,n2):
    return n1+n2

def subtrair(n1, n2):
    return n1 - n2

def dividir(n1, n2):
    return n1/n2

def multiplicar(n1, n2):
    return n1*n2

operacoes=['+','-','/','*']
continua="S"
while True: # repetição Principal do Programa
    if continua != 'S':
        break
    while True: # try controle de erro
        try:

            op='k'
            n1=float(input('Digite um número:'))
            while op not in operacoes:
                op = input('Digite uma operação ( + - * / ):')
            n2 = float(input('Digite um número:'))
            break
        except:
            print('Digite somente FLOATS')

    if op == '+':
        somatoria = somar(n1,n2)
        print(f'soma {n1} + {n2} = {somatoria}')

    if op == '-':
        diferenca = subtrair(n1, n2)
        print(f'subtração {n1} - {n2} = {diferenca}')

    if op == '/':
        divisao = dividir(n1 , n2)
        print(f'divisão {n1} / {n2} = {divisao}')

    if op == '*':
        multiplicacao = multiplicar(n1, n2)
        print(f'multiplicação {n1} * {n2} = {multiplicacao}')

    continua=input('Continua (S/N):').upper()
print('Tchau!')