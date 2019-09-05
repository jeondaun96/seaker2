<?php
include('header.php');
 ?>
  <article class="registerpage">
    <div class="container">
      <div class="bread">
        <ol>
          <li><a href="#">도움말</a></li>
          <li><a href="account.php">계정 생성/삭제</a></li>
          <li><a href="register.php">계정 생성</a></li>
        </ol>
      </div>
    </div>
      <div class="makeaccount-text">
        <h1>계정생성</h1>
      </div>
      <div class="register-box">
        <div class="info-input">
          <p>이름:</p>
          <input type="text" class="form-control" id="inputName" placeholder="이름을 입력해주세요">
          <p>이메일 주소:</p>
          <input type="email" class="form-control" id="InputEmail" placeholder="이메일 주소를 입력해주세요">
          <p>핸드폰 번호:</p>
          <input type="tel" class="form-control" id="inputMobile" placeholder="'-'를 제외한 휴대폰 번호를 입력해주세요">
          <p>아이디:</p>
          <input type="text" class="form-control" id="inputID" placeholder="아이디를 입력해주세요">
          <p>비밀번호:</p>
          <input type="password" class="form-control" id="inputPassword" placeholder="비밀번호를 입력해주세요">
          <p>비밀번호 확인:</p>
          <input type="password" class="form-control" id="inputPasswordCheck" placeholder="비밀번호 확인을 위해 다시 한 번 입력해주세요">
        </div>
        <div class="agreement">
          <div class="pre-scroller">
            <p>1. 개인정보 수집항목
              <br>아이디, 비밀번호, 이름, 휴대폰 번호, 이메일</p>
            <p>2. 수집 기간
              <br>회원 탈퇴 시까지</p>
            <p>3. 수집 목적
              <br>고객 유형별 데이터 분석, 고객 맞춤형 서비스 제공</p>
          </div>
          <div class="check">
            <label class="checkbox-inline" for="inlineCheckbox">
              <input type="checkbox" id="inlineCheckbox" value="agree">
              원활한 서비스 이용을 위해 개인정보 수집에 동의해주세요
            </label>
          </div>
        </div>
        <div class="register-button">
          <a href="#">계정 생성하기</a>
        </div>
      </div>
  </article>
  <?php
  include('footer.php');
   ?>
