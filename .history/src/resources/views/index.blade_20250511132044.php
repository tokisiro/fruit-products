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
    <!--昇進詳細画面-->
<header class="header">
        <div class="header__inner">
            <a class="header__logo" href="">
                mogitate
            </a>
        </div>
    </header>
    <main>
        <div class="form__content">
            <p><a href="">商品一覧</a>>{{value=""}}</p>
        </div>
        <form class="form" action="" method="post" enctype="multipart/form-data">
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">商品名</span>
                </div>
                <div class="form__group-content">
                    <div class="register-form__input--text">
                        <input type="text" name="name" placeholder="" value=""/>
                    </div>
                    <div class="register-form__error">
                        <!--バリデーション機能を実装したら記述します。-->
                    </div>
                </div>
            </div>

            <div class="register-form__group">
                <div class="register-form__group-title">
                    <span class="register-form__label--item">値段</span>
                    <span class="register-form__label--required">必須</span>
                </div>
                <div class="register-form__group-content">
                    <div class="register-form__input--text">
                        <input type="text" name="price" placeholder="" value=""/>
                    </div>
                    <div class="register-form__error">
                        <!--バリデーション機能を実装したら記述します。-->
                    </div>
                </div>
            </div>

            <div class="register-form__group">
                <div class="register-form__group-title">
                    <span class="register-form__label--item">商品画像</span>
                    <span class="register-form__label--required">必須</span>
                </div>
                <div class="register-form__group-content">
                    <div class="register-form__input--text">
                        <input type="file" accept="image/*" name="image" value=""/>
                    </div>
                    <div class="registerーform__card">
                        <img class="register-form__card-img" src="img/" alt="フルーツ">
                    </div>
                    <div class="register-form__error">
                        <!--バリデーション機能を実装したら記述します。-->
                    </div>
                </div>
            </div>

            <div class="register-form__group">
                <div class="register-form__group-title">
                    <span class="register-form__label--item">季節</span>
                    <span class="register-form__label--required">必須</span>
                    <span class="register-form__label--multiple">複数選択可
                    </span>
                </div>
                <div class="register-form__group-content">
                    <div class="register-form__input--text">
                        <label><input type="checkbox" name="name" placeholder="" value=""/>春</label>
                        <label><input type="checkbox" name="name" placeholder="" value=""/>夏</label>
                        <label><input type="checkbox" name="name" placeholder="" value=""/>秋</label>
                        <label><input type="checkbox" name="name" placeholder="" value=""/>冬</label>
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
                        <input type="textarea" name="description" placeholder="" value=""/>
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

        </form>

    </main>
</body>
</html>