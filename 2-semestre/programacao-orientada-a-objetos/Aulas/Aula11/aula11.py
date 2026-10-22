class ContaBancaria:
    def __init__(self, titular, saldo):
        self.__titular = titular # Atributo privado
        self.__saldo = saldo # Atributo privado

    def sacar(self, valor):
        if valor <= self.__saldo:
            self.__saldo -= valor
            print("Saque realizado com sucesso.")
        else:
            print("Saldo insuficiente.")

    def depositar(self, valor):
        self.__saldo += valor
        print("Depósito realizado com sucesso.")

    def get_saldo(self):
        return self.__saldo

    def get_titular(self):
        return self.__titular

    def listar_saldo(self):
        print('Titular: ', self.__titular)
        print('Saldo: ', self.__saldo)

cliente1 = ContaBancaria('Gabriel', 1000.00)
cliente1.listar_saldo()

print()

cliente1.sacar(200)
cliente1.listar_saldo()

print()

cliente1.saldo = 2000 # Saldo não altera, pois o atributo é privado
cliente1.listar_saldo()