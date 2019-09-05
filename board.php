<?php
include('header.php');?>
<style>
<?php
include('css/boardstyle.css');
?>
</style>
  <article class="post">
    <div class="container">
      <div class="bread">
        <ol>
          <li><a href="#">알림광장</a></li>
          <li><a href="board.php">공지사항</a></li>
        </ol>
      </div>
      <h1>공지사항</h1>
      <div class="board-container">
        <table>
          <!-- 해드부 -->
          <colgroup>
            <col width="50" />
            <col width="500" />
            <col width="100" />
            <col widht="100" />
            <col width="50" />
          </colgroup>
          <!-- 바디부 -->
          <thead>
            <tr>
              <th>no</th>
              <th>title</th>
              <th>date</th>
              <th>writer</th>
              <th>count</th>
            </tr>
          </thead>
          <!-- 버텀부 -->
          <tbody>
            <tr>
              <td class="tdNo">1</td>
              <td class="tdTitle"><a href="#">제목</a> </td>
              <td class="tdDate"> 2019.08.09</td>
              <td class="tdName">lee</td>
              <td class="tdCount">0</td>
            </tr>
            <tr>
              <td class="tdNo">2</td>
              <td class="tdTitle"><a href="#">제목</a> </td>
              <td class="tdDate"> 2019.08.09</td>
              <td class="tdName">lee</td>
              <td class="tdCount">0</td>
            </tr>
            <tr>
              <td class="tdNo">3</td>
              <td class="tdTitle"><a href="#">제목</a> </td>
              <td class="tdDate"> 2019.08.09</td>
              <td class="tdName">lee</td>
              <td class="tdCount">0</td>
            </tr>
            <tr>
              <td class="tdNo">4</td>
              <td class="tdTitle"><a href="#">제목</a> </td>
              <td class="tdDate"> 2019.08.09</td>
              <td class="tdName">lee</td>
              <td class="tdCount">0</td>
            </tr>
          </tbody>
          <!--버텀부-->
          <tfoot>
            <tr>
              <td colspan="5" class="tdFoot"> [prev]
                <a href="#"> 1</a>
                [next]
            </tr>
          </tfoot>
        </table>
        <form class="tablemenu" action="index.php" method="post">
          <button type="button" name="write" onclick="location.href='boardwrite.php'">글작성</button>
        </form>
      </div>
    </div>
  </article>
<?php
include('footer.php');
 ?>
