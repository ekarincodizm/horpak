<div class="ui grid">
    <div class="column">
        <div class="ui large breadcrumb">
            <div class="active section">หน้าแรก</div>
        </div>
    </div>    
</div>
<div class="ui grid stackable four column">
    <?php foreach ($features as $key => $feature) { ?>
        <div class="column">
            <div class="ui cards">
                <div class="<?= $feature['color'] ?> card">
                    <div class="content center aligned segment">
                        <i class="fa <?= $feature['icon'] ?> fa-5x"></i>
                        <div class="header">
                            <?= $feature['name_th'] ?>
                        </div>                        
                    </div>
                    <div class="extra content">
                        <div class="ui two buttons">
                            <div class="ui basic <?= $feature['color'] ?> button ui inverted segment">
                                <a href="<?= site_url($feature['href']) ?>" style="color: #000000;font-weight: bold;">
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
<div class="ui grid">
    <div class="ui sixteen wide column segment">
        <div class="ui statistics">
            <div class="red statistic">
                <div class="value">
                    <i class="plane icon"></i> 20
                </div>
                <h1>
                    จำนวนห้องพัก
                </h1>
            </div>
            <div class="green statistic">
                <div class="value">
                    <i class="plane icon"></i>  8
                </div>
                <h1>
                    ห้องว่าง
                </h1>
            </div>
            <div class="blue statistic">
                <div class="value">
                    <i class="plane icon"></i>  22
                </div>
                <h1>
                    เข้าอยู่
                </h1>
            </div>
            <div class="pink statistic">
                <div class="value">
                    <i class="plane icon"></i>  22
                </div>
                <h1>
                    แจ้งออก
                </h1>
            </div>
        </div>
    </div>
</div>