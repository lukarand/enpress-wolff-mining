@php
  $defaultOptions = [
    'before_image' => false
  ];
  if (isset($options)) {
    $options = (object)array_merge($defaultOptions, (array)$options);
  } else {
    $options = (object)$defaultOptions;
  }
@endphp
<div class="block column-projects-block bg-bitmap @if($options->before_image){{ 'background-before' }}@endif" id="projects">
  <div class="container">
    <div class="section-title">
      <h4 class="text-primary">Projects</h4>
    </div>
    <div class="row">
      @if (isset($data->projects))
        @foreach($data->projects as $item)
          <div class="col-lg-4 col-md-6">
            @include('components.project', [
              'data' => (object)[
                'featured_image' => $item->featured_image,
                'featured_logo' => $item->featured_logo,
                'title' => $item->title,
                'sub_title' => $item->sub_title,
                'content' => $item->content,
                'action_link' => $item->action_link,
                'target' => $item->target
              ]
            ])
          </div>
        @endforeach
      @endif
    </div>
  </div>
</div>