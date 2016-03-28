<div class="ui center aligned segment">
    <!-- Step Begin-->
    <div class="ui ordered steps">
        <div class="active step">
            <div class="content">
                <h3 class="">เลือกห้อง</h3>
                <div class="description">เลือกห้องเพื่อเข้าอยู่</div>
            </div>
        </div>
        <div class="step">
            <div class="content">
                <h3 class="">ข้อมูลผู้เช่า</h3>
                <div class="description">กรอกข้อมูลผู้เข้าอยู่</div>
            </div>
        </div>
        <div class="step">
            <div class="content">
                <h3 class="">ข้อมูลการเช่า</h3>
                <div class="description">กรอกข้อมูลผู้ย้ายออก</div>
            </div>
        </div>
        <div class="step">
            <div class="content">
                <h3 class="">ค่าใช้จ่ายเพิ่มเติม</h3>
                <div class="description">กรอกค่าใช้จ่ายเพิ่มเติม</div>
            </div>
        </div>
        <div class="step">
            <div class="content">
                <h3 class="">สำเร็จเรียบร้อย</h3>
                <div class="description">ยืนยันการเช่า</div>
            </div>
        </div>
    </div>
    <!-- Step End-->
</div>

<div class="ui left aligned segment blocks">
    <!-- Group 1-->
    <div class="ui stackable one column grid block" style="display: inline">            
        <div class="column">
            <h2 class="ui header">
                <button class="ui button small blue room-search"><i class="search icon"></i> ค้นหาห้องพัก</button>
            </h2>                
        </div>
        <div class="column">
            <div class="ui stackable one column grid">
                <div class="column"><h3 id="lbNo">ห้อง</h3></div>
                <div class="column"><h3 id="lbFloor">ชั้น</h3></div>
                <div class="column"><h3 id="lbPrice">ราคา</h3></div>
            </div>
        </div>
    </div>

    <!-- Group 2-->
    <div class="ui stackable one column grid block" style="display: none">           
        <div class="column">
            <h2 class="ui header">
                <button class="ui button small  teal customer-search"><i class="search icon"></i> ค้นหาลูกค้า</button>
            </h2>                
        </div>
        <div class="column">
            <div class="ui stackable two column grid">
                <div class="column"><h3 id="lbName">นาย</h3></div>
                <div class="column"><h3 id="lbIdCard">เลขบัตร</h3></div>
            </div>
        </div>
        <div class="column">
            <div class="ui stackable two column grid">
                <div class="column"><h3 id="lbAddress">ที่อยู่</h3></div>
            </div>
        </div>
    </div>

    <!-- Group 3-->
    <div class="ui stackable one column grid block" style="display: none">            
        <div class="column">
            <h2 class="ui header">
                
            </h2>                
        </div>
        <div class="column">
            <div class="ui stackable two column grid">
                <div class="column"><h3>เริ่มวันที่</h3></div>
                <div class="column"><h3>ประเภท</h3></div>
                <div class="column"><h3>ค่ามัดจำ</h3></div>
                <div class="column"><h3>ค่าเช่าต่อหน่วย</h3></div>
                <div class="column"><h3>บริการเสริม</h3></div><div class="column"></div>
                <div class="column"><h3>ยอดค้างชำระ</h3></div>
            </div>
        </div>
    </div>

    <!-- Group 4-->
    <div class="ui stackable one column grid block" style="display: none">            
        <div class="column">
            <h2 class="ui header">
                <div class="ui mini selection search dropdown">
                    <input name="gender" type="hidden">
                    <i class="dropdown icon"></i>
                    <div class="default text">Gender</div>
                    <div class="menu">
                        <div class="item" data-value="1">Male</div>
                        <div class="item" data-value="2">Female</div>
                        <div class="item" data-value="3">Girl</div>
                        <div class="item" data-value="4">Boy</div>
                        <div class="item" data-value="5">Women</div>
                    </div>
                </div>
                <button class="ui button  teal customer"><i class="plus icon"></i> เพิ่ม</button>
            </h2>        
        </div>
        <div class="column">
            <div class="ui divided selection list">
                <a class="item">
                    <div class="ui red horizontal label">1</div>
                    Kumquats
                </a>
                <a class="item">
                    <div class="ui purple horizontal label">2</div>
                    Ice Cream
                </a>
                <a class="item">
                    <div class="ui purple horizontal label">3</div>
                    Ice Cream
                </a>
            </div>
        </div>
    </div>
    
    <!-- Group 5-->
    <div class="ui stackable one column grid block" style="display: none">     
        <div class="column">
            <div class="ui checkbox">
                <input name="example" type="checkbox">
                <label>ยืนยันการเช่าหอพัก</label>
            </div>
        </div>
        <div class="column">
            <div class="ui center aligned segment">
                <button class="ui button blue">บันทึก</button>
                <button class="ui button orange">ยกเลิก</button>
            </div>
        </div>
    </div>
    
</div>
<script type="text/javascript">
    $(document).ready(function () {
        $('.ui.button.room-search').on('click', function () {
            $('.ui.modal.room-search').modal('show');
        });
        $('.ui.button.customer-search').on('click', function () {
            $('.ui.modal.customer-search').modal('show');
        });
        $('.ui.selection.dropdown').dropdown();
    });
</script>