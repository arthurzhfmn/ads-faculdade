class Televisao:
    def __init__(self, modelo_tv: str):
        self.modeloTV = modelo_tv
        self.canal = 1
        self.volume = 0
        self.estado = 'Desligada'

    def verificar_estado(self):
        if self.estado == 'Desligada':
            return False
        return True

    def ligar_televisao(self):
        self.canal = 1
        self.volume = 0
        self.estado = 'Ligada'

    def desligar_televisao(self):
        self.estado = 'Desligada'

    def aumentar_volume(self, volume=None):
        if not self.verificar_estado():
            print("\nTV desligada, não é possível aumentar o volume")

        if volume is None:
            self.volume += 1
        else:
            self.volume += volume

        if self.volume > 100:
            self.volume = 100

    def diminuir_volume(self, volume=None):
        if not self.verificar_estado():
            print("\nTV desligada, não é possível diminuir o volume")

        if volume is None:
            self.volume -= 1
        else:
            self.volume -= volume

        if self.volume < 0:
            self.volume = 0

    def estado_tv(self):
        print(f'''
Modelo: {self.modeloTV}
Estado: {self.estado}
Canal: {self.canal}
Volume: {self.volume}''')


tv1 = Televisao("Samsung QLED50")

tv1.estado_tv()

tv1.ligar_televisao()

tv1.aumentar_volume()
tv1.estado_tv()

tv1.desligar_televisao()

tv1.aumentar_volume()