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
            <a class="header__logo" href="">
                mogitate
            </a>
        </div>
    </header>
    <main>
        <form action="change-form__content">
            <div class="change-form__content-image">
                <!--画像選択機能-->
            </div>
            <div class="change-form">
                <div class="change-form__item">
                    <div class="change-form__item-name">
                        <span>商品名</span>
                        <input class="change-form__item-text" type="text">
                    </div>
                    <div class="change-form__item">
                        <span class="change-form__item-price">値段</span>
                    </div>
                    <div class="register-form__group-content">
                    <div class="register-form__input--text">
                        <input type="text" name="price" placeholder="" />
                    </div>
                    <div class="register-form__error">
                        <!--バリデーション機能を実装したら記述します。-->
                    </div>
                </div>
                    </div>
                </div>
            </div>
        </form>
    </main>
</body>
</html>