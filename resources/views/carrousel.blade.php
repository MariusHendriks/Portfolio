<?php $sprintNumber = $sprint->first()->sprint ?>
<div class="owl-carousel sprint{{$sprintNumber}}">
</div>
<script>
    $(document).ready(function () {

        {{-- items fixen --}}




        @foreach($sprint as $item)
            $(".sprint{{$sprintNumber}}").append("<a href='{{route('taskIndex', ['course' => $item->course, 'task' => $item->title])}}'> <div class='textblok'> {{$item->title}}</div></a> ");
        @endforeach

        $(".sprint{{$sprintNumber}}").owlCarousel({
            items: 1,
            lazyLoad: true,
            nav:false,
            margin:10,
            merge: true,
            responsiveClass:true,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:3
                },
                1000:{
                    items:5
                }
            }
        });
    });
</script>
