<?php
include('header.php');?>
<style>
<?php
include('css/boardmodify.css');
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
    			<form method="post" action="writeAction.jsp">
    				<table class="table table-striped"
    					style="text-align: center; border: 1px solid #dddddd">
    					<thead>
    						<tr>
    							<th colspan="2" style="background-color: #eeeeee; text-align: center; font-size: 16px; letter-spacing: 0.8em; color:#495057;">공지사항 수정</th>
    						</tr>
    					</thead>
    					<tbody>
    						<tr>
    							<td><input type="text" class="form-control" placeholder="글 제목" name="bbsTitle" maxlength="50"/></td>
    						</tr>
    						<tr>
    							<td><textarea class="form-control" placeholder="글 내용" name="bbsContent" maxlength="2048" style="height: 350px;"></textarea></td>
    						</tr>
    					</tbody>
    				</table>
    				<input type="submit" class="btn btn-primary pull-right" value="글 저장" />
    			</form>
    		</div>
    	</div>
    </div>
  </article>

<?php
include('footer.php');

 ?>
