class Departamento:
    def __init__(self, cod_departamento, nome_departamento, nome_gerente):
        self.cod_departamento = int(cod_departamento)
        self.nome_depto = nome_departamento
        self.nome_gerente = nome_gerente

    def listar_departamento(self):
        dados_depto = f"""==========DADOS==========
Código do departamento = {self.cod_departamento}
Nome do departamento = {self.nome_depto}
Nome do gerente = {self.nome_gerente}"""
        print(dados_depto)

    def mudar_gerente(self, novo_gerente):
        print("Nome do gerente atualizado!")
        print(f"Gerente anterior: {self.nome_gerente}")
        self.nome_gerente = novo_gerente
        print(f"Gerente atual: {self.nome_gerente}")


def entrada_dados():
    return (
        input('Código do departamento: '),
        input('Nome do departamento: '),
        input('Nome do gerente: ').capitalize()
    )

marketing = Departamento(*entrada_dados())
marketing.listar_departamento()
marketing.mudar_gerente(input("\nInsira o nome do novo gerente: ").capitalize())
