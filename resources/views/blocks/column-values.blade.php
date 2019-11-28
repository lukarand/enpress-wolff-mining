<div class="block column-values-block bg-bitmap" id="values">
  <div class="container">
    <div class="section-title">
      <h4 class="text-primary">{{ $data->title }}</h4>
    </div>
    <div class="section-content text-center">
      {!! $data->content !!}
    </div>
    <div class="row">
      @if (isset($data->values))
        @foreach($data->values as $item)
          <div class="col-lg-4 col-md-6">
            @include('components.value', [
              'data' => (object)[
                'icon_name' => $item->icon_name,
                'title' => $item->title,
                'animation' => $item->animation, 
                'content' => $item->content
              ]
            ])
          </div>
        @endforeach
      @endif
    </div>
    <div class="background-circle"></div>
  </div>
</div>