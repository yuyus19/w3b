<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('styles/primary.css') }}" />
    <link rel="stylesheet" href="{{ asset('styles/custom.css') }}" />
    <title>MyPC</title>
</head>

<body>
    <nav>
        <div class="container">
            <a id="logo" href="http://127.0.0.1:8000/">
                <h2>MyPC</h2>
                <h3>WebStore</h3>

            </a>
            <div class="cart">
                <span>In cart: </span><span id="cart-count"> 0</span>
            </div>
        </div>
    </nav>
    <section class="container">
        <main>
            <div class="pc">
                <section class="column" style="background-color:blue;">
                    <h2>The GigaChad 20000</h2>
                    <p>Data</p>
                    <img src="/img/pc1.png" alt="gigaChad image Not found">

                </section>
                <section class="column" style="background-color:red;">
                    <h2>The PlebBoi</h2>
                    <p>Data</p>
                    <img src="\img\pc2.png" alt="pleboi image not found">
                </section>
                <!--<div class ="column" style="background-color:blue;"><h2>The GigaChad 20000</h2><p>Data</p></div>
        <div class ="column" style="background-color:red;"><h2>The PlebBoi</h2><p>Data</p></div>-->
            </div>
        </main>
    </section>
</body>

</html>