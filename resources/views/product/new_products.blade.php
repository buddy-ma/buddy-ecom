<div>
    @foreach ($data['new_products'] as $new)
        @php
            $trimmed = trim($new->image, ".png|.png|.jpeg");
            $filename = $new->image;
            $newFileName = substr($filename, 0 , (strrpos($filename, ".")));
            $pos = strpos($filename, "png");
            if($pos==True)
                $extension="png";
            $extension="jpeg";
        @endphp
        <div class="media">
            <a href="{{ route('product', $new->product_id) }}">
                <img style="max-width: 100px" alt="" class="img-fluid" src="https://www.ariba.ma/image/{{ $filename }}">
            </a>
            <div class="media-body align-self-center">
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
                <a href="product-page(no-sidebar).html"><h6>{{ $title }}</h6></a>
                <h4>${{ $price }}</h4>
            </div>
        </div>
    @endforeach
</div>
