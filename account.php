<?php
  include('header.php');
 ?>
  <article class="post">
    <div class="container">
      <div class="bread">
        <ol>
          <li><a href="about.php">도움말</a></li>
          <li><a href="about.php">계정 생성/삭제</a></li>
        </ol>
      </div>
      <h1>계정 생성/삭제</h1>
      <p>'계정 생성'을 통해 계정을 새로 만들거나 '계정 삭제'를 통해 이미 있는 계정을 삭제할 수 있습니다.</p>
      <div class="account-wrap">
          <div class="account">
            <a href="register.php"><span class="fas fa-user-alt"></span></a>
            <h3><a href="register.php">계정 생성</a></h3>
          </div>
          <div class="account">
            <a href="#"><span class="fas fa-user-slash"></span></a>
            <h3><a href="#">계정 삭제</a></h3>
          </div>
      </div>
    </div>
  </article>
<?php
  include('footer.php');
?>
