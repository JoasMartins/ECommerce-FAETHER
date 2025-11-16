async function aplicarDesconto(start) {
    const cupom = document.getElementById("cupomDesconto").value

    const listaCupoms = [
        {
            nome: "medanotamaxima",
            desconto: 10
        },
        {
            nome: "naomereprova",
            desconto: 5
        },
        {
            nome: "javascriptmelhorquephp",
            desconto: 40
        }
    ]

    let desconto = 0
    listaCupoms.forEach((cupomValido) => {
        if (cupom === cupomValido.nome) desconto = cupomValido.desconto
    })

    if (!start) {
        if (desconto > 0) {
            document.getElementById("alertDescontoSucesso").style.display = "block"
        } else {
            document.getElementById("alertDescontoInvalido").style.display = "block"
        }

        setTimeout(() => {
            document.getElementById("alertDescontoSucesso").style.display = "none"
            document.getElementById("alertDescontoInvalido").style.display = "none"
        }, 5000)
    }

    return desconto
}

async function atualizarPreco(start) {
    const tagSomaProdutos = document.getElementById("somaProdutos")
    const somaProdutos = tagSomaProdutos.innerHTML
    tagSomaProdutos.innerHTML = Number(somaProdutos).toFixed(2)

    let descontoPorcentagem = await aplicarDesconto(start)
    let descontoPreco = Number(somaProdutos) * (descontoPorcentagem / 100)
    let precoFinal = Number(somaProdutos) - descontoPreco

    let tagDesconto = document.getElementById("desconto")
    let tagPrecoFinal = document.getElementById("precoFinal")

    tagDesconto.innerHTML = `${descontoPorcentagem}% | -R$ ${descontoPreco.toFixed(2)}`
    tagPrecoFinal.innerHTML = `R$ ${precoFinal.toFixed(2)}`

    return
}

async function finalizarCompra() {
    console.log("finalizar compra")
    document.getElementById("compraFinalizada").style.display = "flex"

    await fetch("limparCarrinho.php", {
        method: "POST",
    })

    setTimeout(() => {
        window.location.href = "/ECommerce/home"
    }, 5000)
}

async function excluirItem(id) {
    const formId = new FormData()
    formId.append("id", id)
    
    fetch("excluirItem.php", {
        method: "POST",
        body: formId
    }).then(() => {
        window.location.reload()
    })
    
}

atualizarPreco(true)