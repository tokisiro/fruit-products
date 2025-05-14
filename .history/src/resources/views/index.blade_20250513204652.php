<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mogitate</title>
    <link rel="stylesheet" href="css/sanitize.css">
    <link rel="stylesheet" href="css/detail.css">
</head>
<body>
    <!--商品詳細画面-->
<header class="header">
    <div class="header__inner">
        <h2 class="header__logo" href="">
                mogitate
        </h2>
    </div>
</header>
<main>
    <div class="change-form">
        <div change-form__link>
            <p><a href="/products">商品一覧</a>>{{$change->name}}</p>
        </div>
        <form class="change-form__content" action="/products/{$change->id}/update" method="post" enctype="multipart/form-data">
            @csrf
            <div class="change-form__content-image">
                <input class="change-form__content-image-item" type="file" accept="image/*" name="image" />
                <div class="changeーform__content-image-card">
                    <img class="change-form__content-image--card-input" src="/{{$change->image}}" alt="フルーツ" />
                </div>
                <div class="change-form__content-image-error">
                    
                </div>
            </div>

            <div class="change-form__content-name">
            @if ($errors->has('name'))
                <span class="change-form__content-name--item">商品名</span>
                <input class="change-form__content-name--input" type="text" name="name" value="{{$change->name}}" placeholder="" />
                <div class="change-form__error">
                    <!--バリデーション機能を実装したら記述します。-->
                    <div style="background-color: red">ERROR</div>
                    {{$errors->first('name')}}
                </div>
            @endif
            </div>

            <div class="change-form__content-price">
            @if ($errors->has('prise'))
                <span class="change-form__content-price--item">値段</span>
                <input class="change-form__content-price--input" type="text" name="price" value="{{$change->price}}" placeholder="" />
                <div class="change-form__content-price--error">
                    <!--バリデーション機能を実装したら記述します。-->
                    <div style="background-color: red">ERROR</div>
                    {{$errors->first('name')}}
                </div>
                @endif
            </div>

            <div class="change-form__content-season">
                <span class="change-form__content-season--item">季節</span>
                <div class="change-form__content-season--select">
                    <label><input type="checkbox" name="name" value="{{$products->season_id}}" placeholder="" />春</label>
                    <label><input type="checkbox" name="name" value="{{$products->season_id}}" placeholder="" />夏</label>
                    <label><input type="checkbox" name="name" value="{{$products->season_id}}" placeholder="" />秋</label>
                    <label><input type="checkbox" name="name" value="{{$products->season_id}}" placeholder="" />冬</label>
                </div>
                <div class="change-form__content--error">
                        <!--バリデーション機能を実装したら記述します。-->
                    </div>
                </div>
            </div>

            <div class="change-form__content-explanation">
                <span class="change-form__content-explanation--item">商品説明</span>
                <input class="change-form__content-explanation--text" type="textarea" name="description" value="{{$change->description}}" placeholder="" />
                <div class="register-form__error">
                    <!--バリデーション機能を実装したら記述します。-->
                </div>
            </div>
            <div class="register-form__button">
                <a href="/products">戻る</a>
                <button class="register-form__button-submit" type="submit">変更を保存</button>
            </div>
        </form>
    </main>
</body>
</html>