async function adicionarCarrinho(id){
    const formData = new FormData();
    formData.append('id', id);

    // ADICIONAR PRODUTO NO BANCO DE DADO DE CARRINHO
    const resp = await fetch('function2.php', {
        method: 'POST',
        body: formData
    });

    const resultado = await resp.json();
}
