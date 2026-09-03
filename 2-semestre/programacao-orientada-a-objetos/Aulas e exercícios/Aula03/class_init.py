class Veiculo:
    def __init__(self, marca, modelo, ano, motor):
        self.marca = marca
        self.modelo = modelo
        self.ano = ano
        self.motor = motor
        self.velocidade = 0


def entrada_dados():
    return (
        input('Marca: '),
        input('Modelo: '),
        input('Ano: '),
        input('Motor: ')
    )

while True:
    carro1 = Veiculo(*entrada_dados()) #Desempacota os argumentos, ao invés de deixar numa tupla

    print('\n--- DADOS DO VEÍCULO ---')
    print(f'Marca: {carro1.marca}')
    print(f'Modelo: {carro1.modelo}')
    print(f'Ano: {carro1.ano}')
    print(f'Motor: {carro1.motor}\n')