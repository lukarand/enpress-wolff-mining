<?php
  $string = '';
  $link = '';
  if (isset($data->image_link)) :
    $link = $data->image_link;
  endif;
  if (isset($data->action_link)) :
    $link = $data->action_link;
  endif;
  if(isset($data->content)) :
    $content = substr($data->content, 0, 170);
    if (isset($data->image_link) || isset($data->action_link)) {
      if (strlen($data->content) > 170) {
        $string = $content. '...'.'<a href="'.$link.'" class="text-warning font-weight-bold"> Read More</a>';
      } else {
        $string = $data->content.'<a href="'.$link.'" class="text-warning font-weight-bold"> Read More</a>';
      }
    }
  endif
?>
<a href="{{ $link }}" class="w-100 text-decoration-none" target="{{ $data->target }}">
  <div class="card-project w-100">
    <div class="card-image" style="background: url('{{ $data->featured_image }}')">
      @if(isset($data->image_link) && $data->image_link !== '')
        <button class="action-link" href="{{ $data->image_link }}" target="{{ $data->target }}">
        </button>
      @endif
    </div>
    <div class="card-body @if(isset($data->action_link) && $data->action_link !== '')has-action @endif">
      <div class="header">
        <div>
          @if(isset($data->sub_title))
            <div class="sub-title">
              {{ $data->sub_title }}
            </div>
          @endif
          <div class="title">
            {{ $data->title }}
          </div>
        </div>
        @if(isset($data->featured_logo))
          <div class="logo">
            <img src="{{ $data->featured_logo }}" />
          </div>
        @endif
      </div>
      <div class="content">
        @if($string)
          {!! $string !!}
        @endif
      </div>
      @if(isset($data->action_link) && $data->action_link !=='')
        <a href="{{ $data->action_link }}" class="action-link" target="{{ $data->target }}">
        </a>
      @endif
    </div>
  </div>
</a>