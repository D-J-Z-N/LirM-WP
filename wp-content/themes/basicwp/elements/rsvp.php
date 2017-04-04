<section class="bottom pure-g" id="participate">
    <div class="participation-form pure-u-1">
        <form action="" id="my_form" method="POST">
            <label for="text"><p>Ar dalyvausite?</p></label>
            <div class="input">
                <input type="text" required name="fname" placeholder="Mano vardas, pavardė" class="names">
                <input type="submit" name"yes-submit" data-value="1" value="Taip" class="submit-button">
                <input type="submit" name"no-submit" data-value="0" value="Ne" class="submit-button">
            </div>
        </form>
        <a class="up-home" href="#top"></a>
    </div>
</section>
<script>
    $(document).ready(function ($) {
        $('.submit-button').click(function (event) {
            $(this).addClass('selected');
        });
        $('#my_form').submit(function (e) {
            e.preventDefault();
            var name = $(".names").val();
            var will_come = $('.selected').data("value");


            $.ajax({
                data: {'action': 'myFunction', 'name': name, 'will_come': will_come},
                type: 'post',
                url: '<?php echo get_site_url() ?>' + "/wp-admin/admin-ajax.php",
                success: function (data) {
                    $('.selected').removeClass('selected');
                    if (will_come) {
                        $('#my_form').html('<div class="thanks">Ačiū! Lauksime atvykstant.</div>');
                    } else {
                        $('#my_form').html('<div class="thanks">Ačiū</div>');
                    }
                },
                error: function (data) {
                    $('.selected').removeClass('selected');
                    alert(data);
                }
            });
        });


    });

</script>
