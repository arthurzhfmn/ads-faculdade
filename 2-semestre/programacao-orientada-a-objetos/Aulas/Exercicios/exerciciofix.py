def entrada_dados():
    return (
        input('Cor: '),
        input('Tamanho: ').upper(),
        input('Preço: '),
        input('Tipo de gola: '),
        input('Quantidade no estoque: ')
    )

class Camiseta:
    def __init__(self, cor, tamanho, preco, tipo_gola, qntd_estoque):
        self.cor = cor
        self.tamanho = tamanho
        self.preco = float(preco)
        self.tipo_gola = tipo_gola
        self.qntd_estoque = int(qntd_estoque)
        self.tamanhos_disponiveis = ['P', 'M','G', 'GG']

    def validar_tamanho(self):
        if self.tamanho in self.tamanhos_disponiveis:
            return True
        else:
            print("\nTamanho indisponível!")
            return False

    def exibir_dados(self):
        dados = f"""
==================================
Cor: {self.cor}
Tamanho: {self.tamanho}
Preço: R${self.preco:.2f}
Tipo de Gola: {self.tipo_gola}
Quantidade no estoque: {self.qntd_estoque}"""
        print(dados)

    def vender_camiseta(self):
        print(f"\nUnidades disponíveis: {self.qntd_estoque}")
        unidades = int(input('Quantas unidades você deseja comprar? '))
        if unidades <= self.qntd_estoque:
            self.qntd_estoque -= unidades
            preco_total = self.preco * unidades

            print(f'\nVenda realizada com {unidades} unidade(s) vendidas pelo preço total de R${preco_total}')
            print(f'Estoque atualizado!')
            print(f"{self.qntd_estoque} unidade(s) restante(s)")


roupa = Camiseta(*entrada_dados())

if roupa.validar_tamanho():
    roupa.exibir_dados()

resposta = input('Deseja fazer uma compra? (S/N) ').lower()
if resposta == 's':
    roupa.vender_camiseta()