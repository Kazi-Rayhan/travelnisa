<div class="item">
    <div class="position-re o-hidden"> <img src="{{ $image }}"
            alt=""> </div> <span class="category"><a href="rooms2.html">Book</a></span>
    <div class="con">
        <h6><a href="{{ route('single_hotel', $room) }}">150$ / Night</a></h6>
        <h5><a href="{{ route('single_hotel', $room) }}">{{ $room->name }}</a> </h5>
        <div class="line"></div>
        <div class="row facilities">
            <div class="col col-md-7">
                <ul>
                    <li><i class="flaticon-bed"></i></li>
                    <li><i class="flaticon-bath"></i></li>
                    <li><i class="flaticon-breakfast"></i></li>
                    <li><i class="flaticon-towel"></i></li>
                </ul>
            </div>
            <div class="col col-md-5 text-end">
                <div class="permalink"><a href="{{ route('single_hotel', $room) }}">Details <i
                            class="ti-arrow-right"></i></a></div>
            </div>
        </div>
    </div>
</div>