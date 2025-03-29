<div class="my-ad-item">
    <div class="ad-image-area">
        <div class="ad-buttons">
            <div class="ad-button">
                <img src="temp/icons/deleteIcon.png" />
            </div>
            <div class="ad-button">
                <img src="temp/icons/editIcon.png" />
            </div>
        </div>
        @foreach($images as $image)
        @if($image->mainPhoto)
        <div
            class="ad-image"
            style="background-image: url('{{$image->url}}')">
        </div>
    </div>
    @endif
    @endforeach

    <div class="ad-title">{{$title}}</div>
    <div class="ad-price">R$ {{number_format($price, 2, ',', '.') }}</div>
</div>
