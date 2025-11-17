<header>
    <!--Baner da lojar-->
    <div id="banner">
        <img src="../imagens/FAETHER.png" alt="Acampamento" class="baner">
        <div id="textos">
            <h1>LOJAS FAETHER</h1>
            <p>Qualidade que fisga resultados.</p>
        </div>
        <div id="amostras">
            <img src="../imagens/banner-img1.png" />
            <img src="../imagens/banner-img2.png" />
            <img src="../imagens/banner-img3.png" />
        </div>
    </div>
    <!--Menu-->
    <nav class="menu" id="menu">
        <i class="logo" id="logo">FAETHER</i> |
        <a href="/ECommerce/home">Inicio</a> |
        <a href="/ECommerce/carrinho">Carrinho</a> |
        <a href="/ECommerce/vender">Vender Produtos</a> |
        <a href="/ECommerce/sobre">Sobre</a> |
    </nav>
</header>

<style>
    #banner {
        display: flex;
        justify-content: space-around;
        align-items: center;
        padding: 30px;
        background-color: rgba(51, 51, 131, 1);
        border-bottom: 1px solid white;
    }

    #banner img {
        width: 20vw;
        background-color: rgb(180, 180, 255);
        border: 3px solid rgb(48, 48, 138);
        border-radius: 10px;
    }

    #banner #amostras {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 20px;
    }

    #banner #amostras img {
        width: 6vw;
        background-color: transparent;
    }

    #textos {
        display: inline-block;
        text-align: center;
        user-select: none;
        font-family: "Inter", "Arial", sans-serif;
    }

    #textos h1 {
        font-size: 4vw;
        font-weight: 700;
        color: white;
        white-space: nowrap;
    }

    #textos p {
        font-size: 1.6vw;
        letter-spacing: 3px;
        white-space: nowrap;
        color: white;
    }

    .menu {
        display: flex;
        justify-content: space-around;
        align-items: center;
        gap: 50px;
        color: aliceblue;
        background-color: rgb(77, 77, 164);
        width: 100%;
    }

    .logo {
        text-align: left;
    }

    .baner {
        background-image: url("FAETHER.png");
        background-position: right top;
        background-attachment: fixed;
        max-height: 200px;
        width: auto;


    }

    a:link {
        text-decoration: none;
        color: aliceblue;
    }

    a:visited {
        text-decoration: none;
        color: aliceblue;
    }

    a:hover {
        text-decoration: underline;
        color: aliceblue;
    }

    a:active {
        text-decoration: underline;
        color: aliceblue;
    }
</style>