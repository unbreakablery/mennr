<div class="col-lg-3 col-md-3">

  <div class="list-group">
    <a href="{{ route('customer.dashboard') }}"
      class="list-group-item list-group-item-action @if (Route::current()->getName() == 'customer.dashboard') active @endif"
      @if (Route::current()->getName() == 'customer.dashboard') aria-current="true" @endif>Your Profile
    </a>
    <a href="{{ route('customer.dashboard.edit-profile') }}"
      class="list-group-item list-group-item-action @if (Route::current()->getName() == 'customer.dashboard.edit-profile') active @endif"
      @if (Route::current()->getName() == 'customer.dashboard.edit-profile') aria-current="true" @endif>Manage contact Details
    </a>
    <a href="{{ route('customer.dashboard.manage-solution') }}"
      class="list-group-item list-group-item-action @if (Route::current()->getName() == 'customer.dashboard.manage-solution') active @endif"
      @if (Route::current()->getName() == 'customer.dashboard.edit-profile') aria-current="true" @endif>Manage
      solution</a>
    <a href="#" class="list-group-item list-group-item-action">Manage payment</a>
    <a href="#" class="list-group-item list-group-item-action">Add staff</a>
    <a href="#" class="list-group-item list-group-item-action">Company domain details/ mennr credentials</a>
    {{-- <a href="#" class="list-group-item list-group-item-action disabled" tabindex="-1"
      aria-disabled="true">Company domain details/ mennr credentials</a> --}}
    <a href="#" class="list-group-item list-group-item-action">Setting</a>
    @auth
      {{-- user logged in --}}
      <a href="{{ route('customer.logout') }}" class="list-group-item list-group-item-action">Log out</a>
    @endauth
  </div>
</div>
