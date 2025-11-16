
console.log("O script carregou!");

async function adicionarCarrinho(id){
    console.log("ID recebido:", id);

    const formData = new FormData();
    formData.append('id', id);

    const resp = await fetch('function2.php', {
        method: 'POST',
        body: formData
    });

    const resultado = await resp.json();
    console.log(resultado);
}
