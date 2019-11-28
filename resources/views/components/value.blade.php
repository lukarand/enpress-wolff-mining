<div class="card-value">
  <div class="card-icon">
    @if (isset($data->animation))
      <i class="anim-icon" data-animation={{ $data->icon_name}}></i>
    @else
      <i class="icon {{ $data->icon_name }} icon-lg"></i>
    @endif
  </div>
  <div class="card-body">
    <div class="card-title">
      {{ $data->title }}
    </div>
    <div class="card-content">
      {!! $data->content !!}
    </div>
  </div>
</div>