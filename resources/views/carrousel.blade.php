<?php $sprintNumber = $sprint->first()->sprint ?>
<div class="owl-carousel sprint{{$sprintNumber}}">
</div>
<script>
    $(document).ready(function () {


        @foreach($sprint as $item)
            $(".sprint{{$sprintNumber}}").append("<a href='{{route('taskindex', ['course' => $item->course, 'task' => $item->title])}}'> <div class='textblok'> {{$item->title}}</div></a> ");
        @endforeach

        $(".sprint{{$sprintNumber}}").owlCarousel({
            items: 1,
            lazyLoad: true,
            nav:false,
            margin:10
        });
    });
</script>
