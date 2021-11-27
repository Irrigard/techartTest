<div class="cont">
    <h1 class="header">Новости</h1>
    <div class="lineTop"></div>
    <?php foreach ($vars['news'] as $val): ?>
        <span class="date"><?php echo date('d.m.Y', $val['idate']); ?></span>
        <a href="/view?id=<?= $val['id'] ?>"><?php echo $val['title']; ?></a>
        <p class="announce" ><?php echo $val['announce']; ?></p>
    <?php endforeach; ?>
    <div class="lineBot"></div>
    <h4 class="header">Страницы:</h4>
    <div class="pagination">
        <a class="pgn<?php if ($vars['page'] == 1) echo ' active'?>" href="/news">1</a>
        <?php for ($i=2; $i<=$vars['pages']; $i++): ?>
            <a class="pgn<?php if ($i == $vars['page']) echo ' active'?>" href="/news?page=<?= $i ?>"><?= $i ?></a>
        <?php endfor; ?>
    </div>
</div>

<style type="text/css">
    .cont{
        width: 1000px;
        margin-left: auto;
        margin-right: auto;
        background-color: #FEFFFC;
        border: 1px solid #CACCC9;
        padding: 10px;
        font-family: Lucida Sans Unicode, monospace;
    }
    .date {
        background-color: #832B5B;
        color: white;
        font-size: 13px;
        padding: 0 4px;
    }

    .announce {
        margin-top: 0;
        font-size: 14px;
    }

    .lineTop  {
        border-top: 2px dotted #832B5B;
        height: 5px;
        margin-top: 0;
        margin-bottom: 18px;
    }

    .lineBot  {
        border-top: 2px dotted #832B5B;
        height: 5px;
        margin: 0;
    }

    .header {
        margin: unset;
    }
    .pagination {
        font-size: 11px;
        display: inline-flex;
        flex-wrap: wrap;
        justify-content: flex-start;
    }
    .pgn {
        background-color: #EDEFEB;
        display: block;
        width: 30px;
        height: 14px;
        text-align: center;
        text-decoration: none;
        color: #000;
        border: 1px solid #C9CCC9;
        margin-right: 2px;
        margin-left: 2px;
        margin-bottom: 3px;
        line-height: 1.3em;
    }
    .pgn:hover {
        background-color: #832B5B;
        color: white;
    }
    .active {
        background-color: #832B5B;
        color: white;
    }
</style>