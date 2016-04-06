<div class="ui grid">
    <div class="column">
        <div class="ui large breadcrumb">
            <a class="section" href="<?= site_url('horpak/index') ?>">หน้าหลัก</a>
            <i class="right angle icon divider"></i>
            <div class="active section">ข้อมูลแจ้งออก</div>
        </div>
    </div>    
</div>
<div class="ui center aligned segment">
    <!-- Step Begin-->
    <div class="ui ordered steps">
        <div class="active step">
            <div class="content">
                <h3 class="">ข้อมูลรายละเอียดการเช่า</h3>
                <div class="description">ค้นหาข้อมูลการเช่า</div>
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
            <div class="ui stackable two column grid">
                <input type="hidden" name="customer_id" id="inputCustomerId"/>
                <input type="hidden" name="horpak_id" id="inputHorpakId"/>
                <input type="hidden" name="open_id" id="inputOpenId"/>
                <div class="column"><h3 id="lbNo">ห้อง</h3></div>
                <div class="column"><h3 id="lbFloor">ชั้น</h3></div>
                <div class="column"><h3 id="lbPrice">ราคา</h3></div>
            </div>
        </div>
        <div class="ui divider"></div>
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
        <div class="ui divider"></div>
        <div class="column">
            <div class="ui stackable two column grid">
                <div class="column"><h3 id="lbBeginDate">เริ่มวันที่</h3></div>
                <div class="column"><h3 id="lbRoomType">ประเภท</h3></div>
                <div class="column"><h3 id="lbDeposit">ค่ามัดจำ</h3></div>
                <div class="column"><h3 id="lbRentalUnit">ค่าเช่าต่อหน่วย</h3></div>
                <div class="column"><h3 id="lbService">บริการเสริม</h3></div><div class="column"></div>
                <div class="column"><h3 id="lb">ยอดค้างชำระ</h3></div>
            </div>
        </div>
        <div class="column">
            <div class="ui center aligned segment">
                <button type="button" class="ui button blue small next-step step0"  data-step="1" disabled><i class="arrow right icon"></i> ต่อไป</button>
            </div>
        </div>  
    </div>

    <!-- Group 2-->
    <div class="ui stackable one column grid block" style="display: none">            
        <div class="column">
            <p class="ui">
                <label>เลือกรายการค่าเสียหาย</label>
                <select class="ui dropdown search selection fine-choice">
                    <?php foreach ($fines as $key => $fine) { ?>
                        <option value="<?= $fine['code_id'] ?>-<?= $fine['std_price'] ?>"><?= $fine['fine_name'] ?></option>
                    <?php } ?>
                </select>
                <button class="ui button  teal customer" id="btnAddFine"><i class="plus icon"></i> เพิ่ม</button>
            </p>        
        </div>
        <div class="column">
            <div class="ui divided selection list fine-select">
                <a class="item">
                    <div class="ui red horizontal label">1</div>
                    Kumquats
                </a>
            </div>
        </div>
        <div class="column">
            <div class="ui center aligned segment">
                <button type="button"  class="ui button orange small prev-step"  data-step="0"><i class="arrow left icon"></i> ย้อนหลับ</button>
                <button type="button" class="ui button blue small next-step step2"  data-step="2"><i class="arrow right icon"></i> ต่อไป</button>
            </div>
        </div> 
    </div>

    <!-- Group 3-->
    <div class="ui stackable one column grid block" style="display: none">     
        <div class="column">
            <div class="ui checkbox">
                <input name="example" type="checkbox">
                <label>ยืนยันการเช่าหอพัก</label>
            </div>
        </div>
        <div class="column">
            <div class="ui center aligned segment">
                <button type="button"  class="ui button orange small prev-step"  data-step="1"><i class="arrow left icon"></i> ย้อนหลับ</button>
                <button type="button"  class="ui button green" id="btnSaveCheckOut">บันทึก</button>              
            </div>
        </div>
    </div>

</div>
<script type="text/javascript">
    $(document).ready(function () {
        var fineSelect = $('.fine-select').empty();
        $('.ui.button.room-search').on('click', function () {
            $('.ui.modal.room-search').modal('show');
        });
        $('.ui.button.customer-search').on('click', function () {
            $('.ui.modal.customer-search').modal('show');
        });
        var dropdownFine = $('.ui.selection.dropdown.fine-choice').dropdown({
            'onChange': function (value, text, $choice) {
                //$(fineSelect).append(htmlItemSelect({value: value, text: text, choice: $choice}));
            }
        });
        $('#btnAddFine').on('click', function () {
            var data = {};
            data.index = ($(fineSelect).children().length + 1);
            data.text = $(dropdownFine).dropdown('get text');
            var itemIdPrice = $(dropdownFine).dropdown('get value');
            data.value = itemIdPrice.split("-")[0];
            data.price = itemIdPrice.split("-")[1];
            $(fineSelect).append(htmlItemSelect(data));
        });
        $('#btnSaveCheckOut').on('click', function () {
            var dataFineSelect = [];
            var selectFine = $(fineSelect).children('a');
            $.each(selectFine, function (index, fine) {
                console.log(fine);
                var id = $(fine).attr('data-id');
                var text = $(fine).text();
                var price = $(fine).find('input[type="number"]').val();  //<input type="number" onchange="isInteger(this)" value="111">
                var data = {id: id, text: text, price: price};
                dataFineSelect.push(data);
            });
            var customerId = $('#inputCustomerId').val();
            var openId = $('#inputOpenId').val();
            var horpakId = $('#inputHorpakId').val();
            console.log(dataFineSelect);
            $.confirm({
                icon: 'fa fa-warning',
                title: 'ท่านกำลังจะลงทะเบียนออก',
                content: 'ยืนยันการลงทะเบียนออกจากหอ!',
                confirmButton: 'ใช่ ฉันยืนยัน',
                cancelButton: 'ไม่ใช่ ฉันกดผิด',
                confirmButtonClass: 'ui button green',
                cancelButtonClass: 'ui button red',
                columnClass: 'ui grid center aligned',
                closeIcon: true,
                closeIconClass: 'fa fa-close', // or 'glyphicon glyphicon-remove'
                confirm: function () {
                    $.ajax({
                        url: '<?= site_url('troomopen/savecheckout') ?>',
                        data: {
                            jsonFines: JSON.stringify(dataFineSelect),
                            horpakId : horpakId,
                            openId : openId,
                            customerId : customerId
                        },
                        dataType: 'json',
                        type: 'post',
                        success: function (resp) {
                            if (resp.status) {
                                formMessageInfo(resp);
                            } else {
                                toastMessageError(resp);
                            }
                        },
                        error: function (err, xhrr, http) {
                            console.log(err);
                            toastMessageError({title: 'StatusCode : ' + err.status + ' ' + err.statusText, message: err.responseText});
                        }
                    });
                },
            });
        });
    });

    function htmlItemSelect(data) {
        var item = '<a class="item" data-id="' + data.value + '">';
        item += '<div class="ui red horizontal label">' + data.index + '</div>';
        item += data.text + '   <input type="number"  value="' + data.price + '" onchange="isInteger(this)"/>';
        item += '</a>';
        return item;
    }
    function isInteger(element) {
        var isNumber = $.isNumeric(element.value);
        if (!isNumber) {
            alert('กรุณากรอกตัวเลขเท่านั้น');
            $(element).val('').focus();
        }
    }
</script>