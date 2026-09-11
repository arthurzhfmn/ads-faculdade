# Definição da classe (PRIMEIRA LETRA EM MAIÚSCULO)
class Conta:
    # Definição dos atributos
    numero = 0
    saldo = 0.0

# Início do programa

#criação dos objetos
mariana_conta = Conta()
mariana_conta.numero = 845684681
#objeto   #   atributo  #  valor do atributo
mariana_conta.saldo = 4000.00

raphael_conta = Conta()
raphael_conta.numero = 454545213
raphael_conta.saldo = 10000.00

daphne_conta = Conta()
daphne_conta.numero = 12132123
daphne_conta.saldo = 2000.00

### Transferência de uma conta para outra
raphael_conta.saldo -= 100.00
mariana_conta.saldo += 100.00
print("******** Conta Mariana *********")
print(f'Número da conta: {mariana_conta.numero} com saldo: {mariana_conta.saldo}')

print("\n******** Conta Raphael *********")
print(f'Número da conta: {raphael_conta.numero} com saldo: {raphael_conta.saldo}')

raphael_conta.saldo -= 100.00
mariana_conta.saldo -= 100.00
daphne_conta.saldo += 200.00

print("\n******** Conta Daphne *********")
print(f'Número da conta: {daphne_conta.numero} com saldo: {daphne_conta.saldo}')
