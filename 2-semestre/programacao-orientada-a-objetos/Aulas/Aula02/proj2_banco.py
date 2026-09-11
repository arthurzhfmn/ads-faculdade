# Definição de classe
class Conta:
    numero = 0
    saldo = 0.0
    nome = ""

    # Definição de método (função que  o objeto vai chamar)
    def abertura_conta(self, numero, saldo, nome):
        self.numero = numero #self é a instância do objeto
        self.saldo = saldo
        self.nome = nome

        print('Conta aberta com sucesso!')

    def listar_conta(self):
        print(f"\n**********Conta de {self.nome}*****************")
        print(f"Número da conta: {self.numero} com saldo: {self.saldo}")

# Início do programa

#criar instâncias dos objetos
mariana_cc = Conta()
rafael_cc = Conta()
daphne_cc = Conta()

mariana_cc.abertura_conta(12321321, 2000.000, "Mariana")
rafael_cc.abertura_conta(987987, 9000.00, "Rafael")
daphne_cc.abertura_conta(6846345, 3900.00, "Daphne")

mariana_cc.listar_conta()
daphne_cc.listar_conta()
rafael_cc.listar_conta()