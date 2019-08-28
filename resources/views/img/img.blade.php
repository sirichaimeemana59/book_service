<!-- Images used to open the lightbox -->
<?php
    $img = [
        1=>'https://cache.gmo2.sistacafe.com/images/uploads/summary/image/50139/instagram-grid-layout-preview-app-2.jpg',
        2=>'https://cache.gmo2.sistacafe.com/images/uploads/summary/image/55252/29d896e38bbe41a09e42253ef6cb9fa3.jpg',
        3=>'https://media-spiceee.net/uploads/content/image/800275/large_18949830_295925204243524_4447794215350435840_n_1_.jpg',
        4=>'https://cache.gmo2.sistacafe.com/images/uploads/summary/image/50229/207a871e8deeb6657abb65b1b99509d4.jpg'];
?>
<div class="row">
    @foreach($img as $key => $row)
        <div class="column">
            <img src="{!! $row !!}" onclick="openModal();currentSlide({!! $key !!})" class="hover-shadow" width="150px">
        </div>
    @endforeach
</div>

<!-- The Modal/Lightbox -->
<div id="myModal" class="modal">
    <span class="close cursor" onclick="closeModal()">&times;</span>
    <div class="modal-content">

        @foreach($img as $key => $row)
            <div class="mySlides">
                <div class="numbertext">{!! $key !!} / {!! count($img) !!}</div>
                <img src="{!! $row !!}" style="width:100%">
            </div>

        @endforeach
        <!-- Next/previous controls -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>

        <!-- Caption text -->
        <div class="caption-container">
            <p id="caption"></p>
        </div>

        <!-- Thumbnail image controls -->
        @foreach($img as $key => $row)
            <div class="column">
                <img class="demo" src="{!! $row !!}" onclick="currentSlide({!! $key !!})" class="hover-shadow" width="50px">
            </div>
        @endforeach
    </div>
</div>

<link rel="stylesheet" type="text/css" href="img/img.css">
<script type="text/javascript" src="{{ URL::asset('img/img.js') }}"></script>
