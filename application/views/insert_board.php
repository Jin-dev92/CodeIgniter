<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="container-fluid">
    <form action="/index.php/board/create" method="post">
        <div class="mb-3">
            <label for="title" class="form-label">title</label>
            <input type="title" class="form-control" id="title" aria-describedby="titleHelp" name="title">
            <div id="titleHelp" class="form-text">제목을 입력해주세요</div>
        </div>
        <div class="form-floating">
            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" name="content"></textarea>
            <label for="floatingTextarea">Comments</label>
        </div>
        <div class="submitBtn"><button type="submit" class="btn btn-primary submit">Submit</button></div>
    </form>
</div>