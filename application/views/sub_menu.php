<div class="ui grid">
    <?php foreach ($features as $key => $feature) { ?>
        <div class="four wide column">
            <div class="ui cards">
                <div class="<?= $feature['color'] ?> card">
                    <div class="content center aligned segment">
                        <i class="fa <?=$feature['icon']?> fa-5x"></i>
                        <div class="header">
                            <?= $feature['name_th'] ?>
                        </div>                        
                    </div>
                    <div class="extra content">
                        <div class="ui two buttons">
                            <div class="ui basic red button">
                                <a href="<?= site_url('/horpak/doFeature/' . $feature['alias']) ?>"  style="color: #000000;font-weight: bold;">
                                    <h5><u><?= $feature['name_th'] ?></u></h5>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>                
            </div>
        </div>
    <?php } ?>
</div>