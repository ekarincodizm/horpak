<div class="ui middle aligned center aligned grid">
    <div class="column">
        <h2 class="ui teal image header">
            <div class="content">
                Log-in to your account
            </div>
        </h2>
        <form class="ui large form">
            <div class="ui stacked segment">
                <div class="field">
                    <div class="ui left icon input">
                        <i class="user icon"></i>
                        <input type="text" name="user_name" id="user_name" placeholder="username" required>
                    </div>
                </div>
                <div class="field">
                    <div class="ui left icon input">
                        <i class="lock icon"></i>
                        <input type="password" name="user_pass" id="user_pass" placeholder="password" required>
                    </div>
                </div>
                <button type="submit" class="ui fluid large teal submit button">Login</button>
            </div>
            <div class="ui error message"></div>
        </form>
        <div class="ui message">
            New to us? <a href="#">Sign Up</a>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function () {
        $('.ui.form').submit(function (e) {
            e.preventDefault();
        }).validate({
            submitHandler: function (form) {
                $.ajax({
                    url: '<?= site_url('user/login') ?>',
                    data: $(form).serialize(),
                    dataType: 'json',
                    type: 'post',
                    success: function (resp) {
                        if (resp.status) {
                            window.location.href = resp.url;
                        } else {
                            toastMessageInfo(resp);
                        }
                    },
                    error: function (err, xhrr, http) {
                        toastMessageError({title: 'Application Error', message: err.responseText});
                    }
                })
            }
        });
    });
</script>
