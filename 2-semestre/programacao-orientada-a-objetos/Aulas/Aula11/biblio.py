class Livro:
    def __init__(self, titulo, autor, ano, paginas):
        self.__titulo = titulo
        self.__autor = autor
        self.__ano = ano
        self.__paginas = paginas
    def get_titulo(self):
        return self.titulo
    def get_autor(self):
        return self.__autor
    def get_ano(self):
        return self.__ano
    def get_paginas(self):
        return self.__paginas
    def mostrar_informacoes(self):
        print(f"Título: {self.__titulo}")
        print(f"Autor: {self.__autor}")
        print(f"Ano: {self.__ano}")
        print(f"Páginas: {self.__paginas}")

    def set_Titulo(self,novoTitulo):
        if novoTitulo:
            self.__titulo = novoTitulo
        else:
            print('Título NÃO pode ser VAZIO!')

livro = Livro('Caso das 7 mulheres','Érico Veríssimo',1940,300)
livro.mostrar_informacoes()
novoTitulo=None

print()

# sendo PRIVADO Não ocorre erro, mas NÃO altera o VALOR
livro.__titulo=novoTitulo
livro.mostrar_informacoes()

print()

# Para alterar o atributo privado, só usando o método
livro.set_Titulo(novoTitulo)
livro.mostrar_informacoes()