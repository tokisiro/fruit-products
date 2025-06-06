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
            <a class="header__logo" href="">
                mogitate
            </a>
        </div>
    </header>
    <main>
        <div class="register-form__content">
            <h2 class="register-form__content-title">
                商品登録
            </h2>
        </div>
        <form class="register-form" action="" method="">
            <div class="register-form__group">
                <div class="register-form__group-title">
                    <span class="register-form__label--item">商品名</span>
                    <span class="register-form__label--required">必須</span>
                </div>
                <div class="register-form__group-content">
                    <div class="register-form__input--text">
                        <input type="text" name="name" placeholder="" />
                    </div>
                    <div class="form__error">
                        <!--バリデーション機能を実装したら記述します。-->
                    </div>
                </div>
            </div>

            
        </form>
    </main>
</body>
</html>