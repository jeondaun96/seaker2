<?php
include('header.php');?>
<style>
<?php
include('css/boardview.css');
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
      <div class="container">
    		<div class="row">
    				<table class="table table-striped"
    					style="text-align: center; border: 1px solid #dddddd">
    					<thead>
    						<tr>
    							<th colspan="3" style="background-color: #eeeeee; text-align: center; font-size: 16px; letter-spacing: 0.8em; color:#495057;">공지사항 보기 </th>
    						</tr>
    					</thead>
    					<tbody>
    						<tr>
    							<td style="width: 20%;"> 글 제목 </td>
    							<td colspan="2">
                    <!-- <%= bbs.getBbsTitle() %> -->
                  </td>
    						</tr>
    						<tr>
    							<td style="width: 20%;">작성자</td>
    							<td colspan="2">
                    <!-- <%= bbs.getUserID() %> -->
                  </td>
    						</tr>
    						<tr>
    							<td style="width: 20%;">작성일</td>
    							<td colspan="2">
                    <!-- <%= bbs.getBbsDate().substring(0, 11) + bbs.getBbsDate().substring(11, 13) + "시"
    							+ bbs.getBbsDate().substring(14, 16) + "분"%> -->
                </td>
    						</tr>
    						<tr>
    							<td style="width: 20%;">내용</td>
    							<td colspan="2" style="min-height: 350px; text-align: left;">
                    <!-- <%= bbs.getBbsContent() %> -->
                  </td>
    						</tr>
    					</tbody>
    				</table>
    				<a href = "board.php" class="btn btn-primary">목록</a>
    					<!-- if(userID != null && userID.equals(bbs.getUserID())){ -->
    						<a href="update.jsp?bbsID=<%= bbsID %>" class="btn btn-primary">수정</a>
    						<a href="delete.jsp?bbsID=<%= bbsID %>" class="btn btn-primary">삭제</a>
    					<!-- } -->
    		</div>
    	</div>
    </div>
  </article>
  <?php
  include('footer.php');?>
