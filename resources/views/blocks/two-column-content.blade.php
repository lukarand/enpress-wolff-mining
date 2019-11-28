@php
  $defaultOptions = [
    'before_image' => false,
    'before_gray' => false
  ];
  if (isset($options)) {
    $options = (object)array_merge($defaultOptions, (array)$options);
  } else {
    $options = (object)$defaultOptions;
  }
@endphp
<div class="block two-column-content-block @if($options->before_image){{ 'background-before' }}@endif @if($options->before_gray){{ 'background-gray-before' }}@endif">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="left-content">
          {!! $data->left_content !!}
        </div>
      </div>
      <div class="col-lg-6">
        <div class="right-content">
          {!! $data->right_content !!}
        </div>
      </div>
    </div>
  </div>
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