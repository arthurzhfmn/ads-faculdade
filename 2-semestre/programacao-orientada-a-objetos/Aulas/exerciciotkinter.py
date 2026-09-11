import tkinter as tk
from tkinter import messagebox
from datetime import date

def calcular_idade():
    try:
        ano_nascimento = int(entry_anonasc.get())
    except ValueError: 
        messagebox.showwarning("Atenção", "Digite apenas números!")

    ano_atual = date.today().year
    if ano_nascimento > ano_atual or ano_nascimento < 1900:
        messagebox.showwarning("Aviso", "Digite anos válidos!")
        return
    
    idade = ano_atual - ano_nascimento
    messagebox.showinfo("Cálculo da sua idade concluído", f"Idade: {idade}")
    label_idade.config(text=str(idade))

janela = tk.Tk()
janela.title("Calculadora de idade")
janela.geometry("400x300")

label_boasvindas = tk.Label(janela, text="Bem vindo(a) a calculadora de idade por interface gráfica usando Tkinter")
label_boasvindas.grid(row=0, column=0, columnspan=2, pady=10)

label_anonasc = tk.Label(janela, text="Informe o ano de nascimento: ")
label_anonasc.grid(row=1, column=0, padx=10, pady=10, sticky="w")

entry_anonasc = tk.Entry(janela, width=8)
entry_anonasc.grid(row=1, column=1, pady= 10)

button_calcular = tk.Button(janela, text="CALCULAR IDADE", command=calcular_idade)
button_calcular.grid(row=2, column=0, columnspan=2, pady=15)

label_idade = tk.Label(janela, text="")
label_idade.grid(row=3, column=0, pady=15)

janela.mainloop()