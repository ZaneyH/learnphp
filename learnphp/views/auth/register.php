<?php include __DIR__ . '/../partials/Header.php'; ?>
<div class="container">
   <h1>New Article</h1>
</div>
    <form action="/register" method="POST">
        <div class="field">
            <label class="label" for="email">Email</label>
                <div class="control">
                    <input class="input" type="email" placeholder="email" name="email" id="email">
                </div>
        </div>
        <div class="field">
                <label class="label" for="password">Paswword</label>
            <div class="control">
                <input type="password"  class="input" placeholder="password" name="password" id="password">
            </div>
        </div>
        <div class="field">
                <label class="label" for="password_confirm">Password confirm</label>
            <div class="control">
                <input type="password"  class="input" placeholder="password_confirm" name="password_confirm" id="password_confirm">
            </div>
        </div>
        <div class="field">
            <div class="control">
                <input class="button is-primary" type="submit" value="register">
            </div>
        </div>
   
    </form>

<?php include __DIR__ . '/../partials/footer.php'; ?>