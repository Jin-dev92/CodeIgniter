<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<script>
    const postBtnMethod = {
        init : function () {
            console.log('init');
        },
        create : function () {
            window.location.href = '/index.php/board/insert';
        },
        edit : function () {
            console.log('edit');
        },
        delete : function () {
            console.log('delete');
        },
    }
</script>
<div>
    <div class="btn-group">
        <span>
            <button class="btn btn-success" onclick="postBtnMethod.create()">생성</button>
            <button class="btn btn-primary" onclick="postBtnMethod.edit()">수정</button>
            <button class="btn btn-danger" onclick="postBtnMethod.delete()">삭제</button>
        </span>
    </div>
    <table class="table table-striped table-hover simple_board">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Content</th>
                <th scope="col">Regdate</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach ($boards as $board) {
               ?>
                <tr>
                    <td><?=$board->id?></td>
                    <td><?=$board->title?></td>
                    <td><?=$board->content?></td>
                    <td><?=$board->regdate?></td>
                </tr>
               <?php     
                }
            ?>
        </tbody>
    </table>
</div>