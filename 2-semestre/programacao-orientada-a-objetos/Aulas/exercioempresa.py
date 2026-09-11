class Departamentos:
    def __init__(self, cod_departamento : int, nome_departamento : str, nome_gerente : str):
        self.cod_departamento = int(cod_departamento)
        self.nome_depto = nome_departamento
        self.nome_gerente = nome_gerente
        self.gerente_anterior = None

    def listar_departamento(self):
        dados_depto = f"""\n==========DADOS==========
Código do departamento = {self.cod_departamento}
Nome do departamento = {self.nome_depto}
Nome do gerente = {self.nome_gerente}"""
        print(dados_depto)

    def mudar_gerente(self, novo_gerente):
        self.gerente_anterior = self.nome_gerente
        self.nome_gerente = novo_gerente
        dados_depto = f"""\n==========DADOS==========
Código do departamento = {self.cod_departamento}
Nome do departamento = {self.nome_depto}
Nome do gerente = Anterior: {self.gerente_anterior} | Atual: {self.nome_gerente}"""
        print(dados_depto)

departamento1 = Departamentos('101', 'Marketing', 'Paulo')
departamento2 = Departamentos('405', 'T.I.', 'Jefferson')
departamento3 = Departamentos('298', 'RH', 'Karina')

departamento1.listar_departamento()
departamento2.listar_departamento()
departamento3.listar_departamento()
departamento1.mudar_gerente('Marcos')
departamento2.mudar_gerente(input('\nNome do novo gerente? '))