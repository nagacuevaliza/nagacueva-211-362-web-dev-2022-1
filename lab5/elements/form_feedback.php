<main>
    <section>
      <figure class="back-link" style="float: left">
        <p><a href="./index.php"><img src="./images/back.png" alt="back" width="30"/></a></p>
      </figure>
    </section>

    <section class="feedback">
    <h2>Обратная связь</h2>
        <form action="./home.php" method='POST'> 
        <div class="form_div">
          <div class="field">
            <label class="fio" for="fio">ФИО</label>
            <input type='text' id="fio" name='fio' value = <?php 
        if(isset($_GET["fio"])){
          echo $_GET["fio"];
        } else {
          echo "";
        }
        ?>/>
          </div>
               
          <div class="field">
            <label class="email" for="email">Электронная почта</label>
            <input type='email' id="email" name='email' placeholder="<?= $email ?>" value = <?php 
        if(isset($_GET["E"])){
          echo $_GET["E"];
        } else {
          echo "";
        }
        ?>/>
          </div>

          <div class="field">
          <label class="label-text">Тип обращения</label>
            <select id="select" name="typeOf">
              <option value="Жалоба">Жалоба</option>
              <option value="Предложение">Предложение</option>
            </select>
          </div>
          
          <div class="field">
            <label class="label-text">Введите ваше сообщение</label>
            <textarea id="text" name="message" value = <?php 
        if(isset($_GET["M"])){
          echo $_GET["M"];
        } else {
          echo "";
        }
        ?>></textarea>
          </div>

          <div class="field">
            <label>Откуда узнали о нас?</label>
            <div class="radio-wrap">
              <input class="rbinput" type='radio' value="Учеба" id="rb1" name='radioValue' 
              <?php
              if (isset($_GET["R"]) && $_GET["R"] == "Реклама из интернета") {
              echo "checked";
              }?>/>
              <label class="rb" for="rb1" style="margin-right: 20px;">Реклама из интернета</label>

              <input  type='radio' value="Рассказали друзья" id="rb2" name='radioValue'
              <?php
              if (isset($_GET["R"]) && $_GET["R"] == "Рассказали друзья") {
              echo "checked";
              }?>>
              <label class="rb" for="rb2" style="margin-right: 20px;">Рассказали друзья</label> 
            </div>
          </div>

          <div class="field">
            <input type='file' id="file" name='file'/>
          </div>

          <div class="checkbox">
            <p for="checkbox_PD">
              <input type='checkbox' id="checkbox_PD" name='checkbox_PD'/>Даю согласие на обработку персональных данных</p>
          </div>
                
          <div class="button">
            <button type='submit'>Отправить</button>
          </div>
        </div>
      </section>

      <section style="margin-bottom: 50px">
        <figure class="up-link" style="float: right">
          <p><a href="#header"><img src="./images/up.png" alt="up" width="30" style="float: right"/></a></p>
        </figure>
      </section>
    </main>
