<?php
/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'О сайте';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    
    
    <div class="panel panel-default">
  <div class="panel-body">
   <h2>
        FAQ - Как смотреть онлайн фильмы</h2>
  </div>
</div>
    <div>
        Вопрос:&nbsp;Для чего нужна регистрация?<br />
        Ответ:&nbsp;Регистрация нужна для возможности комментировать и оставлять отзывы на фильмы. Так же после регистрации у вас будет возможность перемещаться по группам на сайте (От Новичка до Киномана). Также после регистраций на сайте будет меньше рекламы!&nbsp;<br />
        <br />
        Вопрос:&nbsp;Почему так долго грузятся фильмы в браузере, ведь моя скорость интернета высокая?<br />
        Ответ:&nbsp;Иногда фильмы и сериалы с нашего сайта грузятся дольше обычного, это связано с тем что в данный момент существуют некоторые неполадки в оборудовании, стоит попробовать зайти на страницу фильма чуть позже.<br />
        <br />
        Вопрос:&nbsp;Почему у меня фильм все время зависает и дергается при проигрывании?<br />
        Ответ:&nbsp;Возможно у Вас медленная скорость интернета, или у Вас что-то параллельно загружается в этот момент. Отключите все загрузки. Для того чтобы фильм не зависал, Вам нужно подождать пока фильм прогрузится. Для этого нажмите в плеере на Play (►), потом на Pause (║║). Подождите 2-5 минут и снова нажимайте Play (►). Если фильм зависает в полноэкранном режиме - нажмите на клавиатуре клавишу &quot;Esc&quot; и снова сделайте видео на полный экран.<br />
        <br />
        Вопрос:&nbsp;У меня не грузится плеер, вместо плеера - белый экран. что делать?<br />
        Ответ:&nbsp;Вам нужно установить&nbsp;<a href="http://get.adobe.com/ru/flashplayer/">Adobe Flash Player</a>&nbsp;и перезапустить браузер.&nbsp;<br />
        <br />
        Вопрос:&nbsp;У меня не работает фильм, что делать?<br />
        Ответ:&nbsp;Вам нужно нажать на кнопку Фильм не работает рядом с плеером и описать вашу проблему.&nbsp;<br />
        <br />
        Вопрос:&nbsp;Что делать, если фильм прерывается и отказывается дальше проигрываться?<br />
        Ответ:&nbsp;Не нужно закрывать браузер, просто перезагрузите страничку и снова нажмите Play (►). Подождите немного и переставьте ползунок на то место, где прервалось.<br />
        Также вы можете увеличить размер КЭШа в браузере.&nbsp;<br />
        <br />
        Увеличение КЭША в браузере Chrome&nbsp;<br />
        <br />
        I. Увеличение размера кэша плеера.<br />
        1. Нажмите правой кнопкой мыши на плеере фильма, который в данный момент смотрите.<br />
        2. Откроется маленькое окно, где внизу будут вкладки. Нажмите на вкладку с рисунком папки.<br />
        3. Выставьте ползунком размер кэша на максимум.<br />
        <br />
        II. Увеличение размера кэша браузера<br />
        1. Нажмите правой клавишей мыши на ярлык Chrome.<br />
        2. В строке &laquo;объект&raquo;, ничего не изменяя, после всего допишите &laquo;--disk-cache-size=1000000000&raquo;. (все без кавычек)&nbsp;<br />
        <br />
        Очистка КЭША в браузере Opera&nbsp;<br />
        <br />
        Если Вы постоянно пользуетесь этим браузером, то рекомендуется очистить кэш. Если же Вы только что установили этот браузер и никогда не пользовались им ранее, то пропустите этот пункт.<br />
        I. Очистка кэша браузера<br />
        1. Для очистки кэша в верхнем меню браузера, выберите: Инструменты -&gt; Общие настройки -&gt; Расширенные -&gt; История -&gt; Дисковый кэш.<br />
        2. Нажмите на кнопку &laquo;Очистить&raquo;, находящуюся справа.<br />
        3. Нажмите &laquo;ОК&raquo;.<br />
        <br />
        II. Увеличение максимального объема дискового кэша<br />
        Для того чтобы просматриваемое видео полностью загружалось и не прерывалось на каком-либо моменте времени, нужно увеличить объем дискового кэша.<br />
        1. Для увеличения допустимого объема дискового кэша в верхнем меню браузера, выберите: Инструменты -&gt; Общие настройки -&gt; Расширенные -&gt; История -&gt; Дисковый кэш.<br />
        2. Выберите в списке 200 МБ или 400 МБ, в зависимости от мощности и объема HDD (жесткого диска) Вашего компьютера.<br />
        3. Нажмите &laquo;ОК&raquo;.&nbsp;<br />
        <br />
        Очистка КЭША в браузере Mozilla Firefox&nbsp;<br />
        <br />
        I. Очистка кэша (автономного хранилища)<br />
        Если Вы постоянно пользуетесь этим браузером, то рекомендуется очистить кэш. Если же Вы только что установили этот браузер и никогда не пользовались им ранее, то пропустите этот пункт.<br />
        1. Для очистки кэша в верхнем меню браузера, выберите: Инструменты -&gt; Настройки&hellip; -&gt; Дополнительные -&gt; Сеть -&gt; Автономное хранилище.<br />
        2. Нажмите на кнопку &laquo;Очистить сейчас&raquo;, находящуюся справа.<br />
        3. Нажмите &laquo;ОК&raquo;.<br />
        <br />
        II. Увеличение максимального объема дискового кэша (автономного хранилища)<br />
        Для того чтобы просматриваемое видео полностью загружалось и не прерывалось на каком-либо моменте времени, нужно увеличить объем дискового кэша.<br />
        1. Для увеличения допустимого объема дискового кэша (автономного хранилища) в верхнем меню браузера, выберите: Инструменты -&gt; Настройки&hellip; -&gt; Дополнительные -&gt; Сеть -&gt; Автономное хранилище.<br />
        2. Выставьте значение 200 МБ или 400 МБ, в зависимости от мощности и объема HDD (жесткого диска) Вашего компьютера.<br />
        3. Нажмите &laquo;ОК&raquo;.</div>

</div>
