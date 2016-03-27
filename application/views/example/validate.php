<form class="ui form">
    <div class="field">
        <label>Empty</label>
        <input name="empty" type="text">
    </div>
    <div class="field">
        <label>Dropdown</label>
        <select class="ui dropdown" name="dropdown">
            <option value="">Select</option>
            <option value="male">Choice 1</option>
            <option value="female">Choice 2</option>
        </select>
    </div>
    <div class="inline field">
        <div class="ui checkbox">
            <input name="checkbox" type="checkbox">
            <label>Checkbox</label>
        </div>
    </div>
    <div class="ui submit button">Submit</div>
    <div class="ui error message"></div>
</form>
<script type="text/javascript">
    $(document).ready(function () {
        $('.ui.form').form({
            on: 'blur',
            inline: true,
            fields: {
                empty: {
                    identifier: 'empty',
                    rules: [{
                            type: 'empty',
                            prompt: 'Please enter a value'
                        }]
                },
                dropdown: {
                    identifier: 'dropdown',
                    rules: [
                        {
                            type: 'empty',
                            prompt: 'Please select a dropdown value'
                        }
                    ]
                },
                checkbox: {
                    identifier: 'checkbox',
                    rules: [
                        {
                            type: 'checked',
                            prompt: 'Please check the checkbox'
                        }
                    ]
                }
            },
            onSuccess: function (event, fields) {
                console.log(event);
                console.log(fields);
                $.post('', $(event.target).serialize(), function () {
                    alert('ssss');
                }, 'json');
                return false;
            },
        });
    });
</script>