<div class="mb-4 pb-4">
  <h4 class="font-weight-bold">{{__('settings.security.devices')}}</h4>
  <hr>
  <ul class="list-group">
    @foreach($devices as $device)
    <li class="list-group-item">
      <div class="d-flex justify-content-between align-items-center p-3">
        <div>
          @if($device->getUserAgent()->isMobile())
          <i class="fas fa-mobile fa-5x text-muted"></i>
          @else
          <i class="fas fa-desktop fa-5x text-muted"></i>
          @endif
        </div>
        <div>
          <p class="mb-0 font-weight-bold">
            <span class="text-muted">{{__('settings.security.ip')}}</span>
            <span class="text-truncate">{{$device->ip}}</span>
          </p>
          <p class="mb-0 font-weight-bold">
            <span class="text-muted">{{__('settings.security.device')}}</span>
            <span>{{$device->getUserAgent()->device()}}</span>
          </p>
          <p class="mb-0 font-weight-bold">
            <span class="text-muted">{{__('settings.security.browser')}}</span>
            <span>{{$device->getUserAgent()->browser()}}</span>
          </p>
          {{-- <p class="mb-0 font-weight-bold">
            <span class="text-muted">{{__('settings.security.country')}}</span>
            <span>Canada</span>
          </p> --}}
          <p class="mb-0 font-weight-bold">
            <span class="text-muted">{{__('settings.security.last_login')}}</span>
            <span>{{$device->updated_at->diffForHumans()}}</span>
          </p>
        </div>
        <div>
          <div class="btn-group">
            {{-- <a class="btn btn-success font-weight-bold py-0 btn-sm" href="#">{{__('settings.security.trust')}}</a>
            <a class="btn btn-outline-secondary font-weight-bold py-0 btn-sm" href="#">{{__('settings.security.remove_device')}}</a> --}}
          </div>
        </div>
      </div>
    </li>
    @endforeach
  </ul>
</div>