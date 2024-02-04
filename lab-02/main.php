<html lang="ru">
    <!--Пример создании формы для выбора цвета в поле, используя "label" и "input"-->
    <base href="https://cvetvibor.ru/" target="_blank">
    <meta name="viewport" content="width=device-width, init-scale=1.0">
    <header>
        <h1>Выбири свой цвет</h1>
    </header>
    <style>
        h1 {color: chocolate}
        main {color: darkgoldenrod}
    </style>
    <main>
        <form>
            <label for="color">Цвет:</label>
            <input list="colors" name="color" id="color">
            <datalist id="colors">
                <option value="Красный">
                <option value="Синий">
                <option value="Зелёный">
            </datalist>
        </form>
    </main>
</html>