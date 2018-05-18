<?php $sprintNumber = $sprint->first()->sprint ?>
<div class="owl-carousel  owl-theme owl-loaded sprint{{$sprintNumber}}">
</div>
<div class="navload"></div>


<script>
    $(document).ready(function () {
        @foreach($sprint as $item)
          $(".sprint{{$sprintNumber}}").append("<a href='{{route('taskIndex', ['course' => $item->course, 'task' => $item->title])}}'> <div id='item-{{ $item->id }}' class='textblok' style='background-image:url({{ $item->photopath }});' data-merge='{{ $item->proudness }}'> <div class='centertext'>{{$item->title}}</div></div></a> ");
        @endforeach


        $(".sprint{{$sprintNumber}}").owlCarousel({
            nav: true,
            center: true,
            dots: true,
            items: 1,
            lazyLoad: true,
            margin:10,
            merge: true,
            loop: true,
            responsiveClass:true,
            responsive:{
                0:{
                    items:1,
                    mergeFit:false
                },
                600:{
                    items:5
                },
                1000:{
                    items:7
                }
            }
        });
        $('.owl-carousel').find('.owl-dots').removeClass('disabled');
        $('.owl-carousel').on('changed.owl.carousel', function(event) {
          $(this).find('.owl-dots').removeClass('disabled');
        });
    });
</script>
