<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mogitate</title>
    <link rel="stylesheet" href="/css/sanitize.css">
    <link rel="stylesheet" href="/css/index.css">
</head>
<body>
    <!--商品詳細画面-->
<header class="header">
    <div class="header__inner">
        <a class="header__logo" href="/products">
                mogitate
        </a>
    </div>
</header>
<main>
    <div class="change">
        <div class="change-header">
            <p class="change-header__text">
                <a class="change-header__text-item" href="/products">商品一覧</a>>{{$change->name}}
            </p>
        </div>
        <form class="change-form" action="/products/{{$change->id}}/update" method="post" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
            <div class="change-form__content">
                <div class="change-form__content-image">
                    <div class="changeーform__content-image-card">
                        <img class="change-form__content-image--card-input" id="imagePreview"src="{{ old('image', $change->image) }}" alt="フルーツ"/>
                    </div>
                    <input class="change-form__content-image-item" type="file" accept="images/*" name="image" onchange="previewImage(event)"/>
                    @error('image')
                    <div class="change-form__content-image-error">
                        {{$errors->first('image')}}
                    </div>
                    @enderror
                </div>
                <div class="change-form__content-info">
                    <div class="change-form__content-info--name">
                        <span class="change-form__content-info--name-item">
                            商品名
                        </span>
                        <input class="change-form__content-info--name-input" type="text" name="name" value="{{ old('name', $change->name) }}" />
                        @error('name')
                        <div class="change-form__content-info--name-error">
                            {{$errors->first('name')}}
                        </div>
                        @enderror
                    </div>
                    <div class="change-form__content-info--price">
                        <span class="change-form__content-info--price-item">
                            値段
                        </span>
                        <input class="change-form__content-info--price-input" type="text" name="price" value="{{ old('price', $change->price) }}"/>
                        @error('prise')
                        <div class="change-form__content-info--price-error">
                            {{$errors->first('price')}}
                        </div>
                        @enderror
                    </div>
                    <div class="change-form__content-info--season">
                        <span class="change-form__content-info--season-item">季節</span>
                        <div class="change-form__content-info--season-select">
                            <label class="-form__season-content--input-item">
                                <input class="register-form__season-content--input-checkbox"type="checkbox" name="season_id[]" value="1" {{ in_array(1, $products) ? 'checked' : '' }}>
                                春
                            </label>
                            <label class="register-form__season-content--input-item">
                                <input class="register-form__season-content--input-checkbox"type="checkbox" name="season_id[]" value="2" {{ in_array(3, $products) ? 'checked' : '' }}>
                                夏
                            </label>
                            <label class="register-form__season-content--input-item">
                                <input class="register-form__season-content--input-checkbox"type="checkbox" name="season_id[]" value="3" {{ in_array(3, $products) ? 'checked' : '' }}>
                                秋
                            </label>
                            <label class="register-form__season-content--input-item">
                                <input class="register-form__season-content--input-checkbox"type="checkbox" name="season_id[]" value="4" {{ in_array(4, $products) ? 'checked' : '' }}>
                                冬
                            </label>
                        </div>
                        @error('season_id')
                            <div class="change-form__content-info--season-error">
                                {{$errors->first('season_id')}}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="change-form__content-bottom">
                <div class="change-form__content-bottom--explanation">
                    <span class="change-form__content-bottom--explanation-item">商品説明</span>
                    <textarea class="change-form__content-bottom--explanation-text" name="description" placeholder="">{{ old('description', $change->description) }}</textarea>
                    @error('description')
                        <div class="change-form__content--explanation-error">
                            {{$errors->first('description')}}
                        </div>
                    @enderror
                </div>
                <div class="change-form__content-bottom--button">
                    <a class="change-form__content-button--submit" href="/products">戻る</a>
                    <button class="change-form__content-button--update" type="submit">変更を保存</button>
                </div>
            </div>
        </form>
        <form class="change-form__button" action="/products/{{$change->id}}/delete" method="post">
            @method('DELETE')
            @csrf
            <button class="change-form__button-delete--submit">🗑️</button>
        </form>
    </main>
    <script>
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
</script>
</body>
</html>