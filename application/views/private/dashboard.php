<div class="row">
    <?php foreach ($menus as $key => $menu) { ?>
        <div class="col s6 m4 l3 center-align">
            <div class="card">
                <div class="card-content">
                    <i class="large material-icons"><?= $menu['icon'] ?></i>
                </div>
                <div class="card-action">
                    <a href="<?= site_url('/backend/' . $menu['alias']) ?>"  style="color: #000000;font-weight: bold;">
                        <h5><u><?= $menu['name_th'] ?></u></h5>
                    </a>
                </div>
            </div>
        </div>
    <?php } ?>
</div>
