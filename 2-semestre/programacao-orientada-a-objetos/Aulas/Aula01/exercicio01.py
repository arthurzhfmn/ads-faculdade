cupons = ['DESCONTO10', 'DESCONTO20']
def encerrar_algoritmo(teclado):
    if teclado.lower() == 's':
        return True
    return False

def validar_cupom(cod_cupom):
    if cod_cupom in cupons:
        return True
    return False

def calcular_desconto(valor_compra, cupom):
    if cupom == 'DESCONTO10':
        return valor_compra * 0.9
    if cupom == 'DESCONTO20':
        return valor_compra * 0.8

##################################################################
while True:
    valor_compra = float(input('Digite o valor da compra: '))
    cupom = input('Digite o cupom de desconto: ')

    if validar_cupom(cupom):
        valor_final = calcular_desconto(valor_compra, cupom)
        print(f'\nCompra de R${valor_compra} com {cupom} --> VALOR FINAL: R${valor_final:.2f}')
        print("==============================================================================")
        resposta = input("Deseja continuar? (S/N): ")
        if encerrar_algoritmo(resposta):
            print("Algorítmo encerrado!")
            break

    else:
        print('CUPOM INVÁLIDO')


