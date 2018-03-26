



<div class="owl-carousel sprint{{$sprint}}">
</div>


<script>

    amount{{$sprint}} = {{$amount}};
    amountdisplay{{$sprint}} = 0;
    switch(amount{{$sprint}}) {
        case amount{{$sprint}} = 1:
            amountdisplay{{$sprint}} = 1;
            break;
        case amount{{$sprint}} = 2:
            amountdisplay{{$sprint}} = 2;
            break;
        case amount{{$sprint}} = 3:
            amountdisplay{{$sprint}} = 3;
            break;
        case amount{{$sprint}} = 4:
            amountdisplay{{$sprint}} = 4;
            break;
        case amount{{$sprint}} = 5:
            amountdisplay{{$sprint}} = 5;
            break;
        default:
            amountdisplay{{$sprint}} = 1;
    }
    $(document).ready(function () {
        for (var i = 1; i < amount{{$sprint}}+1; i++) {
            $(".sprint{{$sprint}}").append("<div class='textblok'>Appended text"  + i + "</div>");
        }
        $(".sprint{{$sprint}}").owlCarousel({
            items: amountdisplay{{$sprint}},
            lazyLoad: true,
            nav:true,
            margin:10
        });
    });


</script>