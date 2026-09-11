class Pessoa:
    nome = ""
    idade = 0
    cpf = ""
    email = ""
    celular = ""

    def cadastrar(self, nome, idade, cpf, email, celular):
        self.nome = nome
        self.idade = idade
        self.cpf = cpf
        self.email = email
        self.celular = celular

        print("Cadastro realizado com sucesso!")

    def dados(self):
        return f"""
        Idade: {self.idade}
        CPF: {self.cpf}
        Email: {self.email}
        Celular: {self.celular}
        """
    def exibir_dados(self):
        print(f"\n=====DADOS DE {self.nome.upper()}====")
        print(self.dados())

    def alterar_celular(self, novo_celular):
        self.celular = novo_celular
        print(f"\n=====DADOS DE {self.nome.upper()}====")
        print(self.dados())
        print("Celular alterado com sucesso!")

###########################################################
ana_julia = Pessoa()
ana_julia.cadastrar("Ana Júlia", 19, "05200599059", "anajulia@gmail.com", "(51) 920003312")
ana_julia.exibir_dados()
ana_julia.alterar_celular("(51) 982060470")