<?php
include('header.php');
 ?>

  <article class="LOGIN">
    <div class="container">
      <div class="bread">
        <ol>
          <li><a href="login.php">LOGIN</a></li>
        </ol>
      </div>
      <div class="login-container">
        <h1>LOGIN</h1>
        <div class="id">
          <div class="id-icon">
            <span class="fas fa-portrait"></span>
          </div>
          <div class="id-input">
            <input type="text" class="form-control input-lg" placeholder="아이디">
          </div>
        </div>

        <div class="pw">
          <div class="pw-icon">
            <span class="fas fa-key"></span>
          </div>
          <div class="pw-input">
            <input type="password" class="form-control input-lg" placeholder="비밀번호">
          </div>
        </div>
        <div class="login-button">
          <a href="#">로그인</a>
        </div>
        <div class="register-find">
          <p>계정이 없으신가요?<a href="register.php">계정 만들기</a></p>
        </div>
      </div>
  </div>
  </article>
  <?php
  include('footer.php');
   ?>
