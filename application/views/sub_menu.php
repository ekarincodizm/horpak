<div class="row">
    <?php foreach ($features as $key => $feature) { ?>
        <div class="col s6 m4 l3 center-align">
            <div class="card <?= $feature['color'] ?>">
                <div class="card-content">
                    <i class="large material-icons"><?= $feature['icon'] ?></i>
                </div>
                <div class="card-action">
                    <a href="<?= site_url('/horpak/doFeature/' . $feature['alias']) ?>"  style="color: #000000;font-weight: bold;">
                        <h5><u><?= $feature['name_th'] ?></u></h5>
                    </a>
                </div>
            </div>
        </div>
    <?php } ?>
</div>
<div class="row">
    <div class="col s12 m12 l12 center-align light-green accent-2">
        <h4>จำนวนห้องพัก  20   ห้องว่าง  8  จอง  2  เข้าอยู่ 10  แจ้งออก 2</h4>
    </div>
</div>