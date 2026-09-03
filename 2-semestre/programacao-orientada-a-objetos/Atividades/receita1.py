class Receita:
    def __init__(self, nome_chef, nome_receita :str, rendimento : int, tempo_preparo : int, ingredientes : dict):
        self.nome_chef = None
        self.nome_receita = nome_receita
        self.rendimento = rendimento
        self.tempo_preparo = tempo_preparo
        self.ingredientes = ingredientes

    def perguntar_nome(self):
        self.nome_chef = input("Digite seu nome: ")
        return self.nome_chef

    def calcular_porcoes(self, porcoes_desejadas : int):
        fator = porcoes_desejadas / self.rendimento
        return fator

receita_peixe = Receita(None, 'Filé de peixe no papelote com legumes', 1, 15,
                        {'filé de peixe': 1,
                         'batata': 2,
                         'cenoura': 1,
                         'abobrinha': 1})
