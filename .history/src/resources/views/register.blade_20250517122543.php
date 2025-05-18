<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mogitate</title>
    <link rel="stylesheet" href="css/sanitize.css">
    <link rel="stylesheet" href="css/register.css">
</head>
<body>
    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="/products">
                mogitate
            </a>
        </div>
    </header>
    <main>
        <div class="register-form">
            <div class="register-form__content">
                <h2 class="register-form__content-title">
                    商品登録
                </h2>
            </div>
            <form class="register-form" action="/products/register" method="post" enctype="multipart/form-data">
            @csrf
                <div class="register-form__name">
                    <label class="register-form__name-item">
                        <span class="register-form__name-item--title">商品名</span>
                        <span class="register-form__name-item--required">必須</span>
                    </label>
                    <input class="register-form__name-input" type="text" name="name" placeholder="" />
                    <div class="register-form__error">
                        @error('name')
                            <div class="change-form__error">
                                {{$errors->first('name')}}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="register-form__price">
                    <label class="register-form__price-item">
                        <span class="register-form__price-item--title">値段</span>
                        <span class="register-form__price-item--required">必須</span>
                    </label>
                    <input class="register-form__price-input" type="text" name="price" placeholder="" />
                        <div class="register-form__error">
                            <!--バリデーション機能を実装したら記述します。-->
                            @error('prise')
                            <div class="change-form__content-price--error">
                                {{$errors->first('price')}}
                            </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="register-form__image">
                    <label class="register-form__image-item">
                        <span class="register-form__image-item--title">商品画像</span>
                        <span class="register-form__image-item--required">必須</span>
                    </label>
                    <div class="register-form__image-content">
                            <input  class="register-form__image-content--file" type="file" accept="image/*" name="image" />
                            <img class="register-form__image-content--card" src="img/" alt="フルーツ">
                        </>
                        <div class="register-form__error">
                            <!--バリデーション機能を実装したら記述します。-->
                            @error('image')
                            <div class="change-form__content-image-error">
                                {{$errors->first('image')}}
                            </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="register-form__season">
                    <div class="register-form__season-item">
                        <span class="register-form__label--item">季節</span>
                        <span class="register-form__label--required">必須</span>
                        <span class="register-form__label--multiple">複数選択可
                        </span>
                    </div>
                    <div class="register-form__group-content">
                        <div class="register-form__input--text">
                            <label><input type="checkbox" name="season_id[]"  value="1"/>春</label>
                            <label><input type="checkbox" name="season_id[]" value="2"/>夏</label>
                            <label><input type="checkbox" name="season_id[]" value="3" />秋</label>
                            <label><input type="checkbox" name="season_id[]" value="4"/>冬</label>
                        </div>
                        <div class="register-form__error">
                            <!--バリデーション機能を実装したら記述します。-->
                            @error('season_id')
                            <div    class="change-form__content--error">
                                {{$errors->first('season_id')}}
                            </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="register-form__group">
                    <div class="register-form__group-title">
                        <span class="register-form__label--item">商品説明</span>
                        <span class="register-form__label--required">必須</span>
                    </div>
                    <div class="register-form__group-content">
                            <input  class="register-form__input--text" type="textarea" name="description" placeholder="" />
                        <div class="register-form__error">
                            <!--バリデーション機能を実装したら記述します。-->
                            @error('description')
                            <div class="register-form__error">
                                {{$errors->first('description')}}
                            </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="register-form__button">
                    <a href="/products">戻る</a>
                    <button class="register-form__button-submit" type="submit">送信</button>
                </div>
            </form>
        </div>
    </main>
</body>
</html>