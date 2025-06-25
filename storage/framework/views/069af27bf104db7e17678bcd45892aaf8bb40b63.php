 
<nav class="navbar navbar-expand-lg navbar-main bg-1">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample08" aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample08">
        <ul class="navbar-nav">
            <?php if(isset($row->F_menu)): ?><?php echo e(FF_nav_multi_level($row->F_menu)); ?><?php endif; ?>

        </ul>
    </div>
</nav><?php /**PATH /home/ntechco/domains/ntechco.com.vn/public_html/resources/views/fontend/layout/menu.blade.php ENDPATH**/ ?>