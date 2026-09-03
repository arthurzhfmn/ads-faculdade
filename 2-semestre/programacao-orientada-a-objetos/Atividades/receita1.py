class Receita:
    def __init__(self, nome_receita :str, rendimento : float, tempo_preparo : float, ingredientes : dict):
        self.nome_receita = nome_receita
        self.rendimento = rendimento
        self.tempo_preparo = tempo_preparo
        self.ingredientes = ingredientes


    def calcular_porcoes(self, porcoes_desejadas : int):
        fator = porcoes_desejadas / self.rendimento
        return fator

    def exibir_ficha_tecnica(self, nome_chefe:str, porcoes_desejadas:int):
        fator = self.calcular_porcoes(porcoes_desejadas)
        print(f"----------FICHA TÉCNICA----------")
        print(f"RECEITA: {self.nome_receita}")
        print(f"Chefe responsável: {nome_chefe}")
        print(f"---------------------------------")
        print(f"Rendimento: {porcoes_desejadas} porção(ões)")
        print(f"Tempo total {self.tempo_preparo} minutos")
        print(f"---------------------------------")
        print(f"INGREDIENTES NECESSÁRIOS:")
        for item, qntd_base in self.ingredientes.items():
            qntd_ajustada = qntd_base * fator
            print(f"{qntd_ajustada:.1f} {item}")
        print("2 colheres de sopa de azeite")
        print("Sal a gosto")
receita_peixe = Receita('Filé de peixe no papelote com legumes', 1, 15,
                        {'filé de peixe': 1,
                         'batata': 2,
                         'cenoura': 1,
                         'abobrinha': 1})

if __name__ == "__main__":
    nome_usuario = input("Digite seu nome: ")
    porcoes_usuario =  int(input("Quantas porções você deseja preparar? "))

    receita_peixe.exibir_ficha_tecnica(nome_usuario, porcoes_usuario)