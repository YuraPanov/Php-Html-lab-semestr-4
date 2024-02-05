<!DOCTYPE html>
<html lang="ru">
    <head>
        <title>Color</title>
        <!--Пример создании формы для выбора цвета в поле, используя "label" и "input"-->
        <base href="https://cvetvibor.ru/" target="_blank">
        <meta name="viewport" content="width=device-width, init-scale=1.0">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>

        <header>
            <h1>Выбири свой цвет</h1>
        </header>
        <main>
            <form>
                <label for="color">Цвет:</label>
                <input list="colors" name="color" id="color">
                <datalist id="colors">
                    <option class="color1" value="Красный">
                    <option class="color2" value="Синий">
                    <option class="color3" value="Зелёный">
                </datalist>
            </form>
        </main>
    </body>
</html>