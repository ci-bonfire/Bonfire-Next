<div class="footer">
        <br/>

        <div class="container text-right">
            <p class="text-muted small">Page rendered in {elapsed_time} seconds using {memory_usage}.</p>
            <p class="text-muted small">PHP <?= phpversion() ?>. CodeIgniter <?= CI_VERSION ?>. SprintPHP <?= SPRINT_VERSION ?></p>
        </div>

    </div>

    <script src="/themes/admin/assets/js/jquery-min.js"></script>
    <script src="/themes/admin/assets/js/bootstrap-min.js"></script>
<!--    <script src="--><?//= site_url('assets/js/ajax.js') ?><!--"></script>-->
<?php foreach ($external_scripts as $script) : ?>
    <script src="<?= $script ?>"></script>
<?php endforeach; ?>

<div id="ajax-loader" class="alert-warning">Loading...</div>
</body>
</html>