<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mogitate</title>
    <link rel="stylesheet" href="/css/sanitize.css">
    <link rel="stylesheet" href="/css/product.css">
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
    <div class="header-bottom">
        <h1 class="header-bottom__title">
            商品一覧
        </h1>
        <div class="header-bottom__add">
            <a class="header-bottom__add-button" href="/register">
                + 商品を追加
            </a>
        </div>
    </div>
    <main>
        <div class="product">
            <div class="product-sidebar">
                <div class="product-sidebar__form">
                    <form class="product-sidebar__form-search" action="/products/search" method="GET">
                    @csrf
                        <div class="product-sidebar__search-form--text">
                            <input class="product-sidebar__search-form--text-item" type="text" name="name" placeholder="商品名で検索" value="{{ request('name') }}">
                        </div>
                        <div class="product-sidebar__search-form--button">
                            <button class="product-sidebar__search-form--button-item" type="submit">
                                検索
                            </button>
                        </div>
                    </form>
                    <form class="product-sidebar__form-so" action="/products/sort" method="GET" id="sortForm">
                    @csrf
                        <span class="product-sidebar__search-form--title">
                                価格順で表示
                        </span>
                        <div class="product-sidebar__search-form--order">
                            <select class="product-sidebar__search-form--order-item" name="sort" onchange="document.getElementById('sortForm').submit();">
                                <option value="">並び替えを選択</option>
                                <option value="price_asc" {{ request('sort')=='price_asc' ? 'selected' : '' }}>
                                        価格の安い順
                                </option>
                                <option value="price_desc" {{ request('sort')=='price_desc' ? 'selected' : '' }}>
                                    価格の高い順
                                </option>
                            </select>
                        </div>
                    </form>
                    @if(request()->has('sort'))
                    @php
                        $sort = request()->input('sort');
                    @endphp
                    <div class="sorting-tag">
                        @if($sort == 'price_asc')
                            価格の安い順
                        @elseif($sort == 'price_desc')
                            価格の高い順
                        @else
                            並び替え
                        @endif
                        <!-- ×ボタン -->
                        <a href="{{ request()->fullUrlWithQuery(['sort' => null]) }}" class="close-btn">×</a>
                    </div>
                    @endif
                </div>
            </div>
                <!-- 右側：商品カードリスト -->
            <div class="product-card">
            @foreach ($products as $product)
                    <form class="product-card__form" action="/products/{{$product->id}}" method="get">
                    @csrf
                        <div class="product-card__form-img">
                            <button class="product-card__form-img--button" type="submit" >
                                <img class="product-card__form-image--button-item" src="{{$product->image}}">
                                <div class="product-card__form-image--button-content">
                                    <div class="product-card__form-image--button-content-name">{{$product->name}}
                                    </div>
                                    <div class="product-card__form-content--price">
                                        <span>¥</span>
                                        {{$product->price}}
                                    </div>
                                </div>
                            </button>
                        </div>
                    </form>
            @endforeach
            </div>
        </div>
        <div class="product-pages">
            {{ $products->links('vendor.pagination.pages') }}
        </div>
    </main>
</body>
</html>
