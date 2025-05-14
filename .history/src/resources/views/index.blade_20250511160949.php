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
            <p><a href="">商品一覧</a>></p>
        </div>
        <form class="change-form__content" action="" method="post" enctype="multipart/form-data">
            <div class="change-form__content-name">
                <span class="change-form__content-name--item">商品名</span>
                <input class="change-form__content-name--input" type="text" name="name" placeholder="" />
                <div class="change-form__error">
                        <!--バリデーション機能を実装したら記述します。-->
                </div>
            </div>

            <div class="change-form__content-price">
                <span class="change-form__content-price--item">値段</span>
                <input class="change-form__content-price--input" type="text" name="price" placeholder="" />
                <div class="change-form__content-price--error">
                    <!--バリデーション機能を実装したら記述します。-->
                </div>
            </div>

            <div class="change-form__content-image">
                <input class="change-form__content-image-item" type="file" accept="image/*" name="image" />
                <div class="changeーform__content-image-card">
                    <img class="change-form__content-image--card-input" src="img/" alt="フルーツ">
                </div>
                <div class="change-form__content-image-error">
                    <!--バリデーション機能を実装したら記述します。-->
                </div>
            </div>

            <div class="change-form__content-season">
                <span class="change-form__content-season--item">季節</span>
                <div class="change-form__content-season">
                        <label><input type="checkbox" name="name" placeholder="" />春</label>
                        <label><input type="checkbox" name="name" placeholder="" />夏</label>
                        <label><input type="checkbox" name="name" placeholder="" />秋</label>
                        <label><input type="checkbox" name="name" placeholder="" />冬</label>
                    </div>
                    <div class="register-form__error">
                        <!--バリデーション機能を実装したら記述します。-->
                    </div>
                </div>
            </div>

            <div class="register-form__group">
                <div class="register-form__group-title">
                    <span class="register-form__label--item">商品説明</span>
                    <span class="register-form__label--required">必須</span>
                </div>
                <div class="register-form__group-content">
                    <div class="register-form__input--text">
                        <input type="textarea" name="description" placeholder="" />
                    </div>
                    <div class="register-form__error">
                        <!--バリデーション機能を実装したら記述します。-->
                    </div>
                </div>
            </div>
            <div class="register-form__button">
                <a href="/products">戻る</a>
                <button class="register-form__button-submit" type="submit">送信</button>
            </div>
            </div>
        </form>
    </main>
</body>
</html>