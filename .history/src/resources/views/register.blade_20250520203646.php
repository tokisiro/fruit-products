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
                    <input class="register-form__name-input" type="text" name="name" placeholder="商品名を入力" value="{{ old('name') }}"/>
                    <div class="register-form__name-error">
                        @error('name')
                            <div class="register-form__error-item">
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
                    <input class="register-form__price-input" type="text" name="price" placeholder="値段を入力" inputmode="numeric" pattern="[0-9]*" value="{{ old('price') }}"/>
                        <div class="register-form__price-error">
                            @error('price')
                            <div class="register-form__price-error--item">
                                {{$errors->first('price')}}
                            </div>
                            @enderror
                        </div>
                </div>
                <div class="register-form__image">
                    <label class="register-form__image-item">
                        <span class="register-form__image-item--title">商品画像</span>
                        <span class="register-form__image-item--required">必須</span>
                    </label>
                    <div class="register-form__image-content">
                        <img class="register-form__image-content--card" id="imagePreview" src="" alt="フルーツ" style="display:none";>
                        <input  class="register-form__image-content--file" type="file" accept=".png, .jpeg" name="image" onchange="previewImage(event)"/>
                        <div class="register-form__image-content--error">
                            @error('image')
                            <div class="change-form__image-error">
                                {{$errors->first('image')}}
                            </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="register-form__season">
                    <label class="register-form__season-item">
                        <span class="register-form__season-item--title">季節</span>
                        <span class="register-form__season-item--required">必須</span>
                        <span class="register-form__season-item--multiple">複数選択可
                        </span>
                    </label>
                    <div class="register-form__season-content">
                        <div class="register-form__season-content--input">
                            <label class="register-form__season-content--input-item"><input type="checkbox" name="season_id[]"  value="1"/>春</label>
                            <label class="register-form__season-content--input-item"><input type="checkbox" name="season_id[]" value="2"/>夏</label>
                            <label class="register-form__season-content--input-item"><input type="checkbox" name="season_id[]" value="3" />秋</label>
                            <label class="register-form__season-content--input-item"><input type="checkbox" name="season_id[]" value="4"/>冬</label>
                        </div>
                        <div class="register-form__season-content--error">
                            <!--バリデーション機能を実装したら記述します。-->
                            @error('season_id')
                            <div    class="register-form__season-content--error-item">
                                {{$errors->first('season_id')}}
                            </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="register-form__explanation">
                    <label class="register-form__explanation-item">
                        <span class="register-form__explanation-item--title">商品説明</span>
                        <span class="register-form__explanation-item--required">必須</span>
                    </label>
                    <textarea  class="register-form__explanation-content-input" name="description" placeholder="商品の説明を入力" value=""></textarea>
                    <div class="register-form__explanation-error">
                        @error('description')
                        <div class="register-form__explanation-error--item">
                            {{$errors->first('description')}}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="register-form__button">
                    <a class="register-form__button-return" href="/products">戻る</a>
                    <button class="register-form__button-submit" type="submit">登録</button>
                </div>
            </form>
        </div>
    </main>
    <script>
        function previewImage(event) {
            var reader = new FileReader();
            reader.onload = function() {
                var output = document.getElementById    ('imagePreview');
                output.src = reader.result;
                output.style.display = 'block';
            };
            if(event.target.files[0]) {
                reader.readAsDataURL(event.target.files[0]);
            }
        }
    </script>
</body>
</html>