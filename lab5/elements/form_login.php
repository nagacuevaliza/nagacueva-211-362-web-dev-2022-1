<main>
    <section>
      <figure class="back-link" style="float: left">
        <p><a href="./index.php"><img src="./images/back.png" alt="back" width="30"/></a></p>
      </figure>
    </section>

    <section class="login">
      <h2>Авторизация</h2>
        <form class="form_login" class="login" autocomplete="off" method='post'> 
          <label for="login">Логин</label>
          <input type='text' id="login" name='login'/>
        
          <label for="password">Пароль</label>
          <input type='text' id="password" name='password'/>
              
          <div class="checkbox">
            <input type='checkbox' id="checkbox_r" name='checkbox_R'/>
            <label for="checkbox_R">Запомнить меня</label>
          </div>
                
          <div class="button">
            <button type='submit'>Войти</button>
          </div>
        </form>
      </section>

      <section style="margin-bottom: 50px">
        <figure class="up-link" style="float: right">
          <p><a href="#header"><img src="./images/up.png" alt="up" width="30" style="float: right"/></a></p>
        </figure>
      </section>
    </main>