<div class="column-content">
  <div class="title @if(isset($data->before_type))before-{{ $data->before_type }}@endif">
    {!! $data->title !!}
  </div>
  <div class="content">
    @if(isset($data->content))
      {!! $data->content !!}
    @endif
  </div>
  @if (isset($data->action_link))
    <a href="{{ $data->action_link }}" class="action-link btn-{{ $data->action_type }}" target="{{ $data->action_target }}">{{ $data->action_title }}</a>
  @endif
</div>