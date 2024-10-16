<section>

    <h3>IF/ELSE</h3>

    <p>Digite uma <strong>número</strong> e clique em <strong>OK</strong> para saber se é <strong>impar</strong> ou <strong>par</strong>:</p>

    <form action="ifelse.php" method="post">

        <input type="text" name="numero" id="numero" placeholder="Digite um número" required>
        <input type="submit" value="OK">

    </form>

</section>

<section>

    <h3>SWITCH/CASE</h3>

    <p>Selecione uma das <strong>linguagens</strong> e <strong>tecnologias</strong> usadas em <strong>programação</strong> e clique em <strong>OK</strong> para conhecer suas características:</p>

    <form action="switch.php" method="post">

        <select name="tec" id="tec">
            <option value="html">HTML</option>
            <option value="css">CSS</option>
            <option value="js">JS</option>
            <option value="php">PHP</option>
            <option value="sql">SQL</option>
            <option value="laravel">Laravel</option>
        </select>

        <input type="submit" value="OK">

    </form>

</section>

<style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-size: 20px;
}

body {
    width: 100%;
}


h1,
h2,
h3,
h4,
h5,
h6 {
    text-align: center;
}

h2,
h3,
h4,
h5,
h6 {
    width: 100%;
    text-align: center;
    margin-bottom: 16px;
}

main {
    width: 1000px;
    margin: 0 auto;
    padding: 20px;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    gap: 20px;
}

form {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    margin-top: 20px;
    gap: 16px;
}

form input[type="text"],
form select {
    height: 40px;
    font-size: 20px;
    display: flex;
    align-items: center;
    padding: 0px 8px;
    border-radius: 8px;

}

form input[type="submit"] {
    width: 150px;
    height: 40px;
    font-size: 16px;
    border-radius: 8px;
}

button {
    width: 100px;
    height: 40px;
    font-size: 16px;
}

a button {
    width: 100px;
    height: 40px;
    font-size: 16px;
}

section {
    width: 470px;
    border: 1px solid #464646;
    border-radius: 20px;
    padding: 20px;
}

.img {
    width: 1005;
    display: block;
    height: 300px;
    overflow: hidden;
}

</style>