<style></style>
<header></header>
<main>
    <?php
        echo <<<FORM
        <form action="http://{$_SERVER['HTTP_HOST']}/signup/insert" method="POST">
            Login <input type="text" name="login"><br />
            Passw <input type="text" name="passw"><br />
            Email <input type="text" name="email"><br />
            Image <input type="text" name="image"><br />
            <input type="submit" value="OK">
        </form>
FORM;
    ?>
</main>
<footer></footer>