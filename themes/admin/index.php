<?= $themer->display('{theme}:fragments/head') ?>

<?= $themer->display('{theme}:fragments/topbar') ?>

<div class="container-fluid">

    <div class="row">

        <!-- Sidebar -->
        <div class="col-sm-3 col-md-2 sidebar">
            <?= $themer->display('{theme}:sidebar') ?>
        </div>

        <!-- Main Content -->
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <?= $notice ?>

            <?= $view_content ?>

            <?= $themer->display('{theme}:fragments/footer') ?>
        </div>

    </div>

</div><!-- /.container -->

