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
            <a id="logo" href="resources\views\index.blade.php">
                <h2>MyPC</h2></a>
                <h3>WebStore</h3>

            <div class="cart">
                <span>In cart: </span><span id="cart-count"> 0</span>
            </div>
        </div>
    </nav>
    <section class="container">
    <main>
        <!--<div class="pc"><h2>The GigaChad 20000</h2></div>
        <div class="pc"><h2>The PlebBoi</h2></div>-->
        <div class="pc">
            <section class ="column" style="background-color:blue;">
        
            <h2>The GigaChad 20000</h2>
            <p>The GigaChad 20000 is the perfect machine for all of your gaming needs, with RGB that will literally make you puke.</p>
            <ul>
                <li><b>1000</b> GigaWatt Processor</li>
                <li>4x Undimmed Memoryless RAM</li>
                <li>Supports more than one monitor</li>
            </ul>
        </section>

        </div>
        <div class="pc">
            <section class ="column" style="background-color:red;">
            
            <h2>The PlebBoi</h2>
            <p>The only computer made for betas by betas. The ideal computer that comes with a 2 year simp warranty.</p>
            <ul>
                <li>RGB to satisfy all your needs½</li>
                <li>1034 KB Virtual <b>Attachable</b> RAM</li>
                <li>8096 KBit Ethernet porth</li>
                <li>Cheetos resistant keyboard</li>
                <li><b>$5</b> OnlyFans gift card included</li>
            </ul>
        </section>
        </div>
    </main>
    </section>
</body> 

</html>
