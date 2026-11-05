class Consulta:
    def __init__(self, data: str, hora: str):
        self.data = data
        self.hora = hora

    def exibir_consulta(self):
        return f"Data: {self.data} | Hora: {self.hora}"

class Animal:
    def __init__(self, nome: str, idade: int):
        self.nome = nome
        self.idade = idade
        self.historico_consultas = []

    def emitir_som(self):
        pass 

    def agendar_consulta(self, data: str, hora: str):
        nova_consulta = Consulta(data, hora)
        self.historico_consultas.append(nova_consulta)

    def listar_consultas(self):
        print(f"\n--- Histórico de Consultas: {self.nome} ---")
        if not self.historico_consultas:
            print("Nenhuma consulta agendada.")
        else:
            for consulta in self.historico_consultas:
                print(consulta.exibir_consulta())

    def listar_animal(self):
        print("-" * 35)
        print(f"Nome do Pet: {self.nome} | Idade: {self.idade} anos")
        print("-" * 35)

class Cachorro(Animal):
    def __init__(self, nome: str, idade: int, raca: str):
        super().__init__(nome, idade)
        self.raca = raca

    def emitir_som(self):
        print(f"{self.nome} (Cachorro) faz: Au au!")

class Gato(Animal):
    def __init__(self, nome: str, idade: int, cor: str):
        super().__init__(nome, idade)
        self.cor = cor

    def emitir_som(self):
        print(f"{self.nome} (Gato) faz: Miau!")
        
    def listar_animal(self):
        print("-" * 35)
        print(f"Nome do Pet: {self.nome} | Idade: {self.idade} anos | Cor: {self.cor}")
        print("-" * 35)

class Passaro(Animal):
    def __init__(self, nome: str, idade: int, especie: str):
        super().__init__(nome, idade)
        self.especie = especie

    def cantar(self):
        print(f"{self.nome} (Pássaro) está cantando: Piu piu piu!")

    def listar_passaro(self):
        super().listar_animal()
        print(f"Espécie: {self.especie}")
        print("-" * 35)

if __name__ == "__main__":
    rex = Cachorro("Rex", 5, "Labrador")
    mingau = Gato("Mingau", 3, "Branco")
    piu = Passaro("Piu", 1, "Calopsita")

    print("\n--- Teste de Sons ---")
    rex.emitir_som()
    mingau.emitir_som()
    piu.cantar()

    rex.agendar_consulta("10/11/2026", "14:30")
    mingau.agendar_consulta("12/11/2026", "09:00")
    mingau.agendar_consulta("15/11/2026", "10:30")
    
    print("\n--- Informações e Consultas dos Pets ---")
    rex.listar_animal()
    rex.listar_consultas()

    print("\n")
    mingau.listar_animal()
    mingau.listar_consultas()

    print("\n")
    piu.listar_passaro()
    piu.listar_consultas()