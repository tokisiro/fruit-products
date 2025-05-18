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
                <div class="product__content-button">
                    <a class="product__content-button-item" href="/register">
                    + 商品を追加
                    </a>
                </div>
            </div>
            <div>
                <form class="product__content-search" action="">
                    <div class="product__content-search-text">
                        <input class="product__content-search-text--item" type="text" name="name" placeholder="商品名で検索">
                    </div>
                    <div class="product__content-search-button">
                        <button class="product__content-search-button--item">
                        検索
                        </button>
                    </div>
                </form>
                <div class="product__content-order">
                    <!--並び替え機能を記述-->
                </div>
                @foreach ($products as $product)
                <div class="product__card">
                    <form class="product__card-form" action="/products/{{$product->id}}" method="get">
                    @csrf
                        <div class="product__card-form--img">
                            <button type="submit" style="border: none; padding: 0; background: none; cursor: pointer;">
                            <img src="{{$product->image}}" alt="" style="max-width: 200px; height: auto;">
                            <div class="product__card-form--content">
                                <div class="product__card-form--content-name">
                                    {{$product->name}}
                                </div>
                                <div class="product__card-form--content-price">
                                {{$product->price}}
                            </div>
                        </div>
                    </button>
                    </div>
                </a>
                </form>
            </div>
            </div>
            @endforeach
            {{ $pages->links() }}
        </div>
    </main>
</body>
</html>
