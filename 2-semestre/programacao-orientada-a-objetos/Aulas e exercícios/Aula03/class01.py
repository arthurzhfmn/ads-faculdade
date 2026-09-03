class Veiculo:
    marca = ''
    modelo = ''
    ano = 0
    motor = ''
    velocidade = 0

    def listar_veiculo(self):
        dados = f"""
Marca: {self.marca}
Modelo: {self.modelo}
Ano: {self.ano}
Motor: {self.motor}
Velocidade: {self.velocidade}Km/H {'Em movimento' if self.velocidade > 0 else 'Carro parado'}"""
        print(dados)

    def acelerar(self):
        if self.velocidade >= 99:
            print(f"Limite máximo atingido: {self.velocidade}Km/H")
        else:
            self.velocidade+=10
fusca = Veiculo() #To dizendo que ele(fusca) ta dentro da classe veículo
fusca.marca = 'Volkswagen'
fusca.modelo = '2 Portas'
fusca.ano = 1970
fusca.motor = 'Gasolina 1300'
fusca.velocidade = 0

fusca.listar_veiculo()
for i in range(10):
    fusca.acelerar()
    fusca.listar_veiculo()