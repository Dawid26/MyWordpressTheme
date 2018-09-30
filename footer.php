<?php wp_footer(); ?>
<footer>


    <p>
        <?php echo " ".  date('Y')?> Copyright Dawid Marainkowski </p>
    <small>
        <div>Icons made by <a href="http://www.freepik.com" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>
    </small>
    <small> <a href="https://www.freepik.com/free-vector/professional-programmer-engineer-writing-code_1311615.htm">Background vector created by Iconicbestiary - Freepik.com</a>
    </small>
</footer>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.9"></script>

<script>
    var typed = new Typed('#typed', {
        stringsElement: '#typed-strings',
        typeSpeed: 28,
    });

</script>

<script>
    jQuery(document).ready(function() {
        jQuery('.skillbar').each(function() {
            jQuery(this).find('.skillbar-bar').animate({
                width: jQuery(this).attr('data-percent')
            }, 3500);
        });
    });

    jQuery('.Count').each(function() {
        var $this = $(this);
        jQuery({
            Counter: 0
        }).animate({
            Counter: $this.text()
        }, {
            duration: 3500,
            easing: 'swing',
            step: function() {
                $this.text(Math.ceil(this.Counter));
            }
        });
    });

</script>

</body>

</html>
