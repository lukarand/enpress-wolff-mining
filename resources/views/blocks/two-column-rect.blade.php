@php
  $defaultOptions = [
    'reverse' => false,
    'before_image' => false,
    'before_gray' => false
  ];
  if (isset($options)) {
    $options = (object)array_merge($defaultOptions, (array)$options);
  } else {
    $options = (object)$defaultOptions;
  }
@endphp
<div class="block two-column-rect-block @if ($options->reverse){{ 'column-reverse-block' }}@endif @if($options->before_image){{ 'background-before' }}@endif @if($options->before_gray){{ 'background-gray-before' }}@endif">
  <div class="column-block-item">
    @if (isset($data->featured_image))
      <div class="featured-image"
        style="background-image: url('{{ $data->featured_image }}')"
      >
      </div>
    @endif
  </div>
  <div class="column-block-item">
    @include('components.column-content', [
      'data' => (object)[
        'title' => $data->title,
        'before_type' => $data->before_type,
        'content' => $data->content,
        'action_link' => $data->action_link,
        'action_title' => $data->action_title,
        'action_type' => $data->action_type,
        'action_target' => $data->action_target
      ]
    ])
  </div>
</div>