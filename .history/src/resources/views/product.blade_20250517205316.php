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
    <div class="product-sidebar__header">
        <h2 class="product-sidebar__header-title">
            商品一覧
        </h2>
        <div class="header-bottom">
            <a class="header-bottom-button" href="/register">
                + 商品を追加
            </a>
        </div>
    <main>
        <div class="product">
            <div class="product-sidebar">
                
                </div>
                <div class="product-sidebar__search">
                    <form class="product-sidebar__search-form" action="">
                        <div class="product-sidebar__search-form--text">
                            <input class="product-sidebar__search-form--text-item" type="text" name="name" placeholder="商品名で検索">
                        </div>
                        <div class="product-sidebar__search-form--button">
                            <button class="product-sidebar__search-form--button-item">
                                検索
                            </button>
                        </div>
                    </form>
                </div>
                <div class="product-sidebar__order">
                    <!--並び替え機能を記述-->
                </div>
            </div>
                <!-- 右側：商品カードリスト -->
            <div class="product-card">
            @foreach ($products as $product)
                <div class="product-card__form">
                    <form class="product-card__form" action="/products/{{$product->id}}" method="get">
                    @csrf
                        <div class="product-card__form-img">
                            <button type="submit" style="border: none; padding: 0; background: none; cursor: pointer;">
                                <img src="{{$product->image}}" alt="" style="max-width: 200px; height: auto;">
                                <div class="product-card__form-content">
                                    <div class="product-card__form-content--name">{{$product->name}}
                                    </div>
                                    <div class="product-card__form-content--price">
                                        {{$product->price}}
                                    </div>
                                </div>
                            </button>
                        </div>
                    </form>
                </div>
            @endforeach
            </div>
        </div>
        <div class="product-pages" style="margin-top:20px; text-align:center;">
            {{ $pages->links() }}
        </div>
    </main>
</body>
</html>
