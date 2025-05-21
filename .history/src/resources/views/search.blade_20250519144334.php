<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mogitate</title>
    <link rel="stylesheet" href="/css/sanitize.css">
    <link rel="stylesheet" href="/css/search.css">
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
        "{{$product->name}}"の商品一覧
        </h1>
    </div>
    <main>
        <div class="product">
            <div class="product-sidebar">
                <div class="product-sidebar__search">
                    <form class="product-sidebar__search-form" action="/products/search" method="GET">
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
                    <form class="product-sidebar__search-form" action="/products/sort" method="GET" id="sortForm">
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
                </div>
            </div>
                <!-- 右側：商品カードリスト -->
            <div class="product-card">
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
                </div>
            </div>
        @endforeach
        <div class="product-pages">
            {{ $pages->links('vendor.pagination.semantic-ui') }}
        </div>
    </main>
</body>
</html>