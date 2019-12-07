 var themes = document.getElementsByClassName('item_theme');
 var id_active = $('div.active').data('id');
    for (var i = 0; i < themes.length; i++) {
        themes[i].addEventListener('click', function () {
            var id = $(this).data('id');

            update_theme(id,id_active);
        })
    }
    function update_theme(id,id_active) {
        var theme_id = id;
        var theme_id_active = id_active;
        var url = 'theme/update';
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        jQuery.ajax({
            method: 'POST',
            url: url,
            data: {
                'id': theme_id,
                'id_active': theme_id_active
            },
            success: function (res) {
                location.reload();
            }
        })
    }
