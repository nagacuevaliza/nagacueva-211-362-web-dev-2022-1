<main>
    <section>
      <figure class="back-link" style="float: left">
        <p><a href="./index.php"><img src="./images/back.png" alt="back" width="30"/></a></p>
      </figure>
    </section>

    <section class="feedback">
      <h2>Обратная связь</h2>
        <form class="form_feedback" class="feedback" autocomplete="off" method='post'> 
          <label class="fio" for="fio">ФИО</label>
          <input type='text' id="fio" name='username'/>
        
          <label class="email" for="email">Электронная почта</label>
          <input type='text' id="email" name='email'/>
        
          <p>Откуда узнали о нас?</p>
          <div class="radio-wrap">
            <input type='radio' value="Учеба" id="rb1" name='question'/>
            <label for="rb1" style="margin-right: 20px;">Учеба</label>
            <br>
            <input type='radio' value="Работа" id="rb2" name='question'/>
            <label for="rb2" style="margin-right: 20px;">Работа</label>
            <br>
            <input type='radio' value="Друзья" id="rb3" name='question'/>
            <label for="rb3" style="margin-right: 20px;">Друзья</label>
          </div>
                 
          <select id="select" name="typeOf">
            <option value="Жалоба">Жалоба</option>
            <option value="Предложение">Предложение</option>
          </select>
                
          <label class="label-text">Введите ваше сообщение</label>
          <textarea id="text" name="message"></textarea>

          <input type='file' id="file" name='file'/>
        
          <div class="checkbox">
            <input type='checkbox' id="checkbox_PD" name='checkbox_PD'/>
            <label for="checkbox_PD">Даю согласие на обработку персональных данных</label>
          </div>
                
          <div class="button">
            <button type='submit'>Отправить</button>
          </div>
        </form>
      </section>

      <section style="margin-bottom: 50px">
        <figure class="up-link" style="float: right">
          <p><a href="#header"><img src="./images/up.png" alt="up" width="30" style="float: right"/></a></p>
        </figure>
      </section>
    </main>
