<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

<script>
    $(document).ready(function () {
        $(".step2").hide();
        $(".step3").hide();
        $(".step4").hide();
        $(".step5").hide();

        $('.leerweg_page').hide();
        $('.leerweg_page').eq(0).show();


        $('.next1').click(function () {
            $(".step1").fadeOut(250);
            $(".step2").delay(250).fadeIn(250);
        });

        $('.next2').click(function () {
            $(".step2").fadeOut(250);
            $(".step3").delay(250).fadeIn(250);
        });

        $('.next3').click(function () {
            $(".step3").fadeOut(250);
            $(".step4").delay(250).fadeIn(250);
        });

        $('.next4').click(function () {
            $(".step4").fadeOut(250);
            $(".step5").delay(250).fadeIn(250);
        });

        $('.back2').click(function () {
            $(".step2").fadeOut(250);
            $(".step1").delay(250).fadeIn(250);
        });

        $('.back3').click(function () {
            $(".step3").fadeOut(250);
            $(".step2").delay(250).fadeIn(250);
        });

        $('.back4').click(function () {
            $(".step4").fadeOut(250);
            $(".step3").delay(250).fadeIn(250);
        });
        $('.back5').click(function () {
            $(".step5").fadeOut(250);
            $(".step4").delay(250).fadeIn(250);
        });

        $('#leerweg_select').change(function () {
            $selected_leerweg = $('#leerweg_select').val();
            $('.leerweg_page').slideUp(250);
            $('.leerweg_page').eq($selected_leerweg).slideDown(250);

        });


    });
</script>