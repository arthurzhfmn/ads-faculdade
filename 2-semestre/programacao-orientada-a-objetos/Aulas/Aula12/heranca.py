# DEFINIÇÃO DA SUPERCLASSE (PAI / MÃE)

class Animal:

    # Método construtor com seus atributos
    def __init__(self, nome, idade):
        self.nome = nome
        self.idade = idade

    # Método emitir_som que dependerá da espécie do animal
    def emitir_som(self):
        pass  # Implementar em cada classe filha

    # Método para listar os dados do animal
    def listar_animal(self):
        print('*' * 25, ' ANIMAL ', '*' * 25)
        print(f'Nome do Pet = {self.nome}')
        print(f'Idade: {self.idade}')
        print('*' * 58, '\n')


# DEFINIÇÃO DA CLASSE FILHA: CACHORRO

class Cachorro(Animal):

    # Método construtor com atributos da superclasse
    # e atributo específico da classe filha (raça)
    def __init__(self, nome, idade, raca):
        super().__init__(nome, idade)
        self.raca = raca

    # Redefinindo o método emitir_som da superclasse
    def emitir_som(self):
        print('AU AU AU AU')
        print(f'{self.nome} está latindo!')


# DEFINIÇÃO DA CLASSE FILHA: GATO

class Gato(Animal):

    # Método construtor com atributos da superclasse
    # e atributo específico da classe filha (cor)
    def __init__(self, nome, idade, cor):
        super().__init__(nome, idade)
        self.cor = cor

    # Redefinindo o método emitir_som da superclasse
    def emitir_som(self):
        print('Miau Miau Miau Miau')
        print(f'{self.nome} está miando!')

    # Redefinindo o método para listar os dados do gato
    def listar_animal(self):
        print('*' * 25, ' GATO ', '*' * 25)
        print(f'Nome do Pet = {self.nome}')
        print(f'Idade: {self.idade}')
        print(f'COR: {self.cor}')
        print('*' * 58, '\n')


# DEFINIÇÃO DA CLASSE FILHA: PÁSSARO

class Passaro(Animal):

    # Método construtor com atributos da superclasse
    # e atributo específico da classe filha (espécie)
    def __init__(self, nome, idade, especie):
        super().__init__(nome, idade)
        self.especie = especie

    # Método específico para o pássaro cantar
    def cantar(self):
        print('Piu Piu Piu')
        print(f'{self.nome} está cantando!')

    # Método para listar os dados do pássaro
    def listar_passaro(self):
        print('*' * 25, ' PÁSSARO ', '*' * 25)
        self.listar_animal()
        print(f'Espécie: {self.especie}')


# CRIANDO OS OBJETOS

cachorro = Cachorro('Rex', 3, 'Labrador')
gato = Gato('Frajola', 2, 'Frajolinha')
passaro = Passaro('Piu-Piu', 1, 'Canário')


# UTILIZANDO OS MÉTODOS DOS OBJETOS

# Métodos redefinidos da superclasse
cachorro.emitir_som()
gato.emitir_som()

# Método específico do objeto pássaro
passaro.cantar()

# Método herdado da superclasse
passaro.emitir_som()

# Listando os dados dos animais
gato.listar_animal()
cachorro.listar_animal()
passaro.listar_animal()

# Método específico da classe filha Passaro
passaro.listar_passaro()