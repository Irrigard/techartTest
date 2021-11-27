<div class="cont">
    <h1 class="header"><?= $vars['text']['title'] ?></h1>
    <div class="lineTop"></div>
    <div class="text">
        <?= $vars['text']['content'] ?>
    </div>
    <div class="lineBot"></div>
    <a class="refAll" href="/news">Все новости >></a>
</div>
<style type="text/css">
    .cont {
        width: 1000px;
        margin-left: auto;
        margin-right: auto;
        background-color: #FEFFFC;
        border: 1px solid #CACCC9;
        padding: 10px;
        font-family: Lucida Sans Unicode, monospace;
    }

    .text{
        font-size: 15px;
        line-height: 1.2em;
    }

    .lineTop  {
        border-top: 2px dotted #832B5B;
        height: 5px;
        margin-top: 0;
        margin-bottom: 25px;
    }

    .lineBot  {
        border-top: 2px dotted #832B5B;
        height: 5px;
        margin-bottom: 4px;
    }
    .header {
        margin-bottom: 0;
        font-size: 29px;
    }

    .refAll{
        display: inline-block;
        margin-bottom: 15px;
        font-size: 18px;
    }
</style>