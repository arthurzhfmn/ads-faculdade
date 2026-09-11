import tkinter as tk # Importa a biblioteca Tkinter e a renomeia para 'tk' para facilitar
##### definição do 
import os

# Define os caminhos onde o Tcl/Tk realmente reside no Python para Windows
os.environ['TCL_LIBRARY'] = r'C:\Program Files\Python313\tcl\tcl8.6'
os.environ['TK_LIBRARY'] = r'C:\Program Files\Python313\tcl\tk8.6'


# 1. Cria a janela principal
janela = tk.Tk()
janela.title("Minha Primeira Janela Tkinter") # Define o título da janela
janela.geometry("400x300") # Define as dimensões da janela (largura x altura)
# 2. Adiciona um widget (por exemplo, um Label)
label_boas_vindas = tk.Label(janela, text="Olá, mundo do Tkinter!")
label_boas_vindas.pack(pady=10) # Posiciona o label na janela com um preenchimento vertical
label_local = tk.Label(janela, text="UNISENAC 2026")
label_local.pack(pady=10)
label_nome = tk.Label(janela, text="Fábio")
label_nome.pack(pady=10)

# 3. Inicia o loop principal da aplicação
janela.mainloop()
