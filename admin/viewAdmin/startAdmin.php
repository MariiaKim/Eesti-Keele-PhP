<?php ob_start() ?>
<article>
    <div id="main" class="container">
        <h3>Админ панель заголовок</h3>
        <div class="row">
            <p>Админ панель</p>
        </div>        
    </div>
</article>

<?php $content = ob_get_clean();?>
<?php include "viewAdmin/templates/layout.php";