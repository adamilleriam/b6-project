<div class="container">
    <a class="navbar-brand" href="{{ route('front.home') }}">Vegefoods</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
    </button>

    <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a href="index.html" class="nav-link">Home</a></li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Shop</a>
                <div class="dropdown-menu" aria-labelledby="dropdown04">
                    <a class="dropdown-item" href="shop.html">Shop</a>
                    <a class="dropdown-item" href="wishlist.html">Wishlist</a>
                    <a class="dropdown-item" href="product-single.html">Single Product</a>
                    <a class="dropdown-item" href="cart.html">Cart</a>
                    <a class="dropdown-item" href="checkout.html">Checkout</a>
                </div>
            </li>
            <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
            <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>
            <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
            <li class="nav-item cta cta-colored"><a href="{{ route('cart') }}" class="nav-link"><span class="icon-shopping_cart"></span>[{{ session()->has('cart')?count(session('cart')):0 }}]</a></li>

        </ul>
    </div>
</div>
