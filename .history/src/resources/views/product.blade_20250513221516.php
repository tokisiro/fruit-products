<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mogitate</title>
    <link rel="stylesheet" href="css/sanitize.css">
    <link rel="stylesheet" href="css/product.css">
</head>
<body>
    <!--商品一覧-->
    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="">
                mogitate
            </a>
        </div>
    </header>
    <main>
        <div class="product">
            <div class="product__content">
                <h2 class="product__content-title">
                    商品一覧
                </h2>
            </div>
            <div class="product__content-button">
                <button class="product__content-button-item">
                    +商品を追加
                </button>
            </div>
            <form class="product__content-search" action="">
                <div class="product__content-search-text">
                    <input type="text" name="name" placeholder="商品名で検索">
                </div>
                <div class="product__content-search-button">
                    <button class="product__content-search-button-item">
                        検索
                    </button>
                </div>
            </form>
            <div class="product__content-order">
                <!--並び替え機能を記述-->
            </div>
            
            @foreach ($products as $product)
            <div class="product__card">
                <a href="">
                    @csrf
                    <div class="product__card-img" href="">
                        <img src="{{$product->image}}" alt="" />
                        <div class="product__card-content">
                            <div class="product__card-content-name">
                                {{$product->name}}
                            </div>
                            <div class="product__card-content-price">
                                {{$product->price}}
                            </div>
                        </div>
                    </div>
                </a>
                </form>
            </div>
            @endforeach
            {{ $pages->links() }}
        </div>
    </main>
</body>
</html>
