@php
  $defaultOptions = [
    'reverse' => false
  ];
  if (isset($options)) {
    $options = (object)array_merge($defaultOptions, (array)$options);
  } else {
    $options = (object)$defaultOptions;
  }
@endphp
<div class="block two-column-container-block @if($options->reverse){{ 'column-reverse-block' }}@endif">
  <div class="container">
    <div class="row contain-row">
      <div class="col-lg-6">
        <div class="nationals">
          <div class="row justify-content-center">
            @if(isset($data->nationals))
              @foreach($data->nationals as $item)
                <div class="col-4">
                  <a href="{{ $item->action_link }}" target="_blank">
                    <div class="national-group" style="background-image: url('{{ $item->featured_image }}')"></div>
                  </a>
                </div>
              @endforeach
            @endif
          </div>
        </div>
      </div>
      <div class="col-lg-6">
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
  </div>
</div>