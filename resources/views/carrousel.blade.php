<div class="container">
    <div class="owl-carousel">
    </div>
</div>

<script>
    amount = {{ $amount }};
    amountdisplay = 0;
    switch(amount) {
        case amount = 1:
            amountdisplay = 1;
            break;
        case amount = 2:
            amountdisplay = 1;
            break;
        case amount = 3:
            amountdisplay = 2;
            break;
        case amount = 4:
            amountdisplay = 2;
            break;
        case amount = 5:
            amountdisplay = 4;
            break;
        default:
            amountdisplay = 1
    }
    $(document).ready(function () {
        for (var i = 1; i < amount+1; i++) {
            $(".owl-carousel").append("<div class='textblok'>Appended text"  + i + "</div>");
        }
        $(".owl-carousel").owlCarousel({
            items: amountdisplay,
            lazyLoad: true,
            margin:10
        });
    });

</script>