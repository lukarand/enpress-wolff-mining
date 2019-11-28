@php
  $defaultOptions = [
    'reverse' => false,
    'background_gray' => false,
    'fancybox_modal' => false
  ];
  if (isset($options)) {
    $options = (object)array_merge($defaultOptions, (array)$options);
  } else {
    $options = (object)$defaultOptions;
  }
@endphp
@if($options->fancybox_modal)
<app-project>
  <div class="block two-column-carousel-block bg-white fancybox" style="display: none;"
    data-fancybox-project
  >
    <app-carousel class="column-carousel">
      <div class="column-block-item carousel-image">
        <div class="carousel-collection">
          @if(isset($data->galleries))
            @foreach($data->galleries as $item)
              <div class="slick-item">
                <div class="featured-image" style="background-image: url('{{ $item->featured_image }}')">
                  @if(isset($item->video_url))
                    <iframe src="{{ $item->video_url }}" width="100%" height="100%" frameborder="0" allowfullscreen></iframe>
                  @endif
                </div>
                <script data-item="post-info" type="text/html">
                  <div class="column-content">
                    <div class="title @if(isset($item->before_type))before-{{ $item->before_type }}@endif">
                      @if(isset($item->featured_logo))
                        <div class="logo">
                          <img src="{{ $item->featured_logo }}" />
                        </div>
                      @endif
                      {!! $item->title !!}
                    </div>
                    <div class="content @if(isset($data->background_type) && $data->background_type !== 'white') text-white @endif">
                      {!! $item->content !!}
                    </div>
                    @if (isset($item->action_link))
                      <a href="{{ $item->action_link }}" class="action-link btn-{{ $item->action_type }}" target="{{ $item->action_target }}">{{ $item->action_title }}</a>
                    @endif
                  </div>
                </script>
              </div>
            @endforeach
          @endif
        </div>
        @if(isset($data->sub_image) && count($data->galleries) === 1)
          <div class="sub-image" style="background-image: url('{{ $data->sub_image }}')"></div>
        @endif
      </div>
      <div class="column-block-item">
        <div class="carousel-content">
          <div class="post-info">
          </div>
        </div>
      </div>
    </app-carousel>
    @if(isset($data->down_link))
      <div class="arrow-down text-center">
        <a href="#{{ $data->down_link }}" class="arrow-link text-warning">
          {{ $data->down_link_title }}
          <br />
          <i class="icon icon-arrow-down-warning icon-md"></i>
        </a>
      </div>
    @endif
  </div>
</app-project>
@else
  <div class="block two-column-carousel-block
    @if(isset($data->background_type))bg-{{ $data->background_type }}@endif
    @if($options->background_gray){{ 'background-gray' }}@endif
    @if ($options->reverse){{ 'column-reverse-block' }}@endif"
    @if (isset($data->section_id))
      id={{ $data->section_id }}
    @endif
  >
    <app-carousel class="column-carousel">
      <div class="column-block-item carousel-image">
        <div class="carousel-collection">
          @if(isset($data->galleries))
            @foreach($data->galleries as $item)
              <div class="slick-item">
                <div class="featured-image" style="background-image: url('{{ $item->featured_image }}')">
                  @if(isset($item->video_url))
                    <iframe src="{{ $item->video_url }}" width="100%" height="100%" frameborder="0" allowfullscreen></iframe>
                  @endif
                </div>
                <script data-item="post-info" type="text/html">
                  <div class="column-content">
                    <div class="title @if(isset($item->before_type))before-{{ $item->before_type }}@endif">
                      @if(isset($item->featured_logo))
                        <div class="logo">
                          <img src="{{ $item->featured_logo }}" />
                        </div>
                      @endif
                      {!! $item->title !!}
                    </div>
                    <div class="content @if(isset($data->background_type) && $data->background_type !== 'white') text-white @endif">
                      {!! $item->content !!}
                    </div>
                    @if (isset($item->action_link))
                      <a href="{{ $item->action_link }}" class="action-link btn-{{ $item->action_type }}" target="{{ $item->action_target }}">{{ $item->action_title }}</a>
                    @endif
                  </div>
                </script>
              </div>
            @endforeach
          @endif
        </div>
        @if(isset($data->sub_image) && count($data->galleries) === 1)
          <div class="sub-image" style="background-image: url('{{ $data->sub_image }}')"></div>
        @endif
      </div>
      <div class="column-block-item">
        <div class="carousel-content">
          <div class="post-info">
          </div>
        </div>
      </div>
    </app-carousel>
    @if(isset($data->down_link))
      <div class="arrow-down text-center">
        <a href="#{{ $data->down_link }}" class="arrow-link text-warning">
          {{ $data->down_link_title }}
          <br />
          <i class="icon icon-arrow-down-warning icon-md"></i>
        </a>
      </div>
    @endif
  </div>
@endif