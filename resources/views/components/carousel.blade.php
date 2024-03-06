<div id="wowslider-container1">
    <div class="ws_images">
        <ul>
            @foreach ($items as $item)
                @foreach ($item as $img)
                    <li><img src="data1/images/{{ $img['src'] }}" /></li>
                @endforeach
            @endforeach
        </ul>
    </div>
    <div class="ws_bullets">
        <div>
            @foreach ($items as $item)
                @foreach ($item as $img)
                    <a href="#"><span><img src="data1/tooltips/{{ $img['src'] }}" />1</span></a>
                @endforeach
            @endforeach
        </div>
    </div>
    <div class="ws_shadow"></div>
</div>
