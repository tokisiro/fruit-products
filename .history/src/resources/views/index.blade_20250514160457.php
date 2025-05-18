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
        <form class="change-form__content" action="/products/{{$change->id}}/update" method="post" enctype="multipart/form-data">
            @csrf
            @method('patch')
            <div class="change-form__content-image">
                <div class="changeーform__content-image-card">
                    <img class="change-form__content-image--card-input" src="/{{$change->image}}" alt="フルーツ" />
                </div>
                <input class="change-form__content-image-item" type="file" accept="images/*" name="image" onchange="previewImage(event)"/>
                @error('image')
                <div class="change-form__content-image-error">
                    {{$errors->first('image')}}
                </div>
                @enderror
            </div>

            <div class="change-form__content-name">
                <span class="change-form__content-name--item">商品名</span>
                <input class="change-form__content-name--input" type="text" name="name" value="{{ old('name', $change->name) }}" placeholder="" />
                @error('name')
                <div class="change-form__error">
                    {{$errors->first('name')}}
                </div>
                @enderror
            </div>

            <div class="change-form__content-price">
                <span class="change-form__content-price--item">値段</span>
                <input class="change-form__content-price--input" type="text" name="price" value="{{ old('price', $change->price) }}" placeholder="" />
                @error('prise')
                <div class="change-form__content-price--error">
                    {{$errors->first('price')}}
                </div>
                @enderror
            </div>

            <div class="change-form__content-season">
                <span class="change-form__content-season--item">季節</span>
                <div class="change-form__content-season--select">
                    <label><input type="checkbox" name="season_id[]" value="1" {{ in_array(1, $selected_seasons) ? 'checked' : '' }}>春</label>
                    <label><input type="checkbox" name="season_id[]" value="2" {{ in_array(1, $selected_seasons) ? 'checked' : '' }}>夏</label>
                    <label><input type="checkbox" name="season_id[]" value="3" {{ in_array(1, $selected_seasons) ? 'checked' : '' }}>秋</label>
                    <label><input type="checkbox" name="season_id[]" value="4" {{ in_array(1, $selected_seasons) ? 'checked' : '' }}>冬</label>
                </div>
                @error('season_id')
                <div class="change-form__content--error">
                    {{$errors->first('season_id')}}
                </div>
                @enderror
            </div>

            <div class="change-form__content-explanation">
                <span class="change-form__content-explanation--item">商品説明</span>
                <input class="change-form__content-explanation--text" type="textarea" name="description" value="{{ old('description', $change->description) }}" placeholder="" />
                @error('description')
                <div class="register-form__error">
                    {{$errors->first('description')}}
                </div>
                @enderror
            </div>
            <div class="register-form__button">
                <a href="/products">戻る</a>
                <button class="register-form__button-submit" type="submit">変更を保存</button>
            </div>
        </form>
    </main>
    <script>
        function previewImage(event) {
            const reader = new FileReader();
            reader.onload = function(e){
                document.querySelector('#image-container img').src = e.target.result;
            }
            reader.readAsDataURL(event.target.files[0]);
        }
</script>
</body>
</html>