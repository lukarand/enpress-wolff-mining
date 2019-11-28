<div class="block other-hero-block">
  <div class="card-menu">
    <div class="card-image" style="background-image: url('{{ $data->menu_image }}')">
    </div>
    <h3 class="card-title">
      {{ $data->menu_title }}
    </h3>
    <div class="subtitle">
      {{ $data->menu_subtitle }}
    </div>
  </div>
  @if(isset($data->section_id))
    <div class="down-arrow">
      <a href="#{{ $data->section_id }}" class="arrow-link">
        @if(isset($data->down_title))
          {{ $data->down_title }}
        @endif
        <br />
        <i class="icon icon-arrow-down-warning icon-md"></i>
      </a>
    </div>
  @endif
</div>