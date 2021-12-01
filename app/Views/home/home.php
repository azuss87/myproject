<?php

?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>Web-Research</title></head>
<body>
<div class="header">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.js"></script>
</div>
<div class="container">
    <div style="display: block" id="s-1">
        <table>
            <tr>
                <th colspan="2">1. 경기도 시민이신가요???</th>
            </tr>
            <tr>
                <td><input type="radio" name="1" value="1" checked>예</td>
                <td><input type="radio" name="1" value="0">아니오</td>
            </tr>
            <tr>
                <td></td>
                <td><button type="button" onclick="next(1);">다음!</button></td>
            </tr>
        </table>
    </div>
    <div style="display:none;" id="s-2">
        <table>
            <tr>
                <th colspan="2">2. 성별이 무엇인가요?</th>
            </tr>
            <tr>
                <td><input type="radio" name="2" value="1" checked>남</td>
                <td><input type="radio" name="2" value="0">여</td>
            </tr>
            <tr>
                <td><button type="button" onclick="back(2);">뒤로</button></td>
                <td><button type="button" onclick="next(2);">다음</button></td>
            </tr>
        </table>
    </div>
    <div style="display:none;" id="s-3">
        <table>
            <tr>
                <th colspan="2">3. 뭐요?</th>
            </tr>
            <tr>
                <td><input type="radio" name="3" value="1" checked>덤벼</td>
                <td><input type="radio" name="3" value="0">도망</td>
            </tr>
            <tr>
                <td><button type="button" onclick="back(3);">뒤로</button></td>
                <td><button type="button" onclick="success(3);">완료</button></td>
            </tr>
        </table>
    </div>
    <div style="display: none" id="s-4">
        <table>
            <tr>
                <td>와~ 다했다!!</td>
            </tr>
        </table>
    </div>
</div>
<div class="footer"></div>
</body>
</html>
<script>
    function next(val){
        var idx = parseInt(val)+1;

        $("#s-"+val)[0].style.display = 'none';
        $("#s-"+idx)[0].style.display = 'block';
    }

    function back(val){
        var idx = parseInt(val)-1;

        $("#s-"+val)[0].style.display = 'none';
        $("#s-"+idx)[0].style.display = 'block';
    }

    function success(val){
        var idx = parseInt(val)+1;

        $("#s-"+val)[0].style.display = 'none';
        $("#s-"+idx)[0].style.display = 'block';

    }
</script>
<style>
    table {
        width: 300px;
    }
    td {
        width: 50%;
    }
    th {
        width: 100%;
    }
</style>
