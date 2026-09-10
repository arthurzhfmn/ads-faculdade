import tkinter as tk
from tkinter import messagebox #Mensagens de popup

def cadastrar_usuario():
    '''Função chamada quando o botão Cadastrar é clicado. 
        Obtém os valores dos campos de usuário e senha e exibe uma mensagem'''
    usuario = entry_usuario.get() #Obtém o texto do campo usuário
    senha = entry_senha.get() #Obtém o texto do campo de senha

    if usuario and senha:
        messagebox.showinfo("Cadastro realizado", f"Usuário: {usuario} \n Senha: {senha}")
        # Limpa os campos após o cadastro
        entry_usuario.delete(0, tk.END) #Limpa do inicio ao fim
        entry_senha.delete(0, tk.END)
    else:
        messagebox.showwarning("Atenção", "Preencha todos os campos antes de cadastrar")

def limpar_campos():
    entry_usuario.delete(0, tk.END)
    entry_senha.delete(0, tk.END)

###########################################################################################

# Cria a janela principal
janela = tk.Tk()
janela.title("Login")
janela.geometry("350x200")

# Widgets do Formulário de Login
label_usuario = tk.Label(janela, text="Usuário")
label_usuario.grid(row=0, column=0, padx=10, pady=10, sticky="w")

entry_usuario = tk.Entry(janela, width=30) #Faz ter no max 30 caracteres
entry_usuario.grid(row=0, column=1, padx=10, pady=10)

label_senha = tk.Label(janela, text="Senha")
label_senha.grid(row = 1, column= 0, padx=10, pady=10, sticky="w") #linha 1 para ficar abaixo do label usuario

entry_senha = tk.Entry(janela, show="*", width=30) #show="*" esconde os caracteres
entry_senha.grid(row=1, column=1, padx=10, pady=10)

# Botão de cadastro
button_cadastro = tk.Button(janela, text="CADASTRAR", command=cadastrar_usuario)
button_cadastro.grid(row=2, column=3, columnspan=2, pady=20, sticky="e") #columnspan faz ocupar duas colunas

# Botão limpar
button_clear = tk.Button(janela, text="LIMPAR", command=limpar_campos)
button_clear.grid(row=3, column=3, columnspan=2, sticky="e")

# Inicia o loop da aplicação
janela.mainloop()
