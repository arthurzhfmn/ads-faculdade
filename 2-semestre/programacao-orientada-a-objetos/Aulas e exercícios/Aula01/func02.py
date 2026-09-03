#funcao com parametro e sem retorno
def alo(nome):
    print(f'Olá, {nome}!')
    print('Bem vindo a POO')
    if nome == 'GABRIEL':
        print('Você é lindão')

#inicio do programa

while True:
    nomeAluno = input('Digite um nome: ').upper
    if nomeAluno == 'FIM':
        break
    alo(nomeAluno)