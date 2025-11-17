async function adicionarProduto() {
    // PEGANDO VALORES DO FORMULARIO
    const titulo = document.getElementById('titulo').value
    const descricao = document.getElementById('descricao').value
    const imagem = document.getElementById('imagem').files[0]
    const preco = document.getElementById('preco').value

    if (!titulo || !descricao || !preco) return window.alert("Preencha todos os campos") // VERIFICAR SE TODOS FORAM PREENCHIDOS

    // DEFININDO FORMATAÇÃO DOS DADOS PARA PHP
    const formData = new FormData();
    formData.append('titulo', titulo);
    formData.append('descricao', descricao);
    formData.append('preco', preco); 
    if (imagem) formData.append('imagem', imagem);

    // ENVIANDO DADOS PARA O PHP SALVAR NO BANCO DE DADOS
    const resp = await fetch('function.php', {
      method: 'POST',
      body: formData
    });

    const resultado = await resp.json();

    // RESPOTA DA FUNÇÃO
    if (resultado.sucesso) {
        document.getElementById('screensucesso').style.display = 'flex'

        setTimeout(() => {
            window.location.href = '/ECommerce/home'
        }, 3000)
    } else {
        alert("Ocorreu um erro ao adicionar o produto a venda. Tente novamente.")
    }
}

// APLICAR PREVIEW DA IMAGEM
function imagemAdd() {
    const imagem = document.getElementById('imagem').files[0]
    document.getElementById('imagem-preview').src = URL.createObjectURL(imagem)
}