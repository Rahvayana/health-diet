<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updateProfileInformation()))
                @livewire('profile.update-profile-information-form')

                <x-jet-section-border />
            @endif

            @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                <div class="mt-10 sm:mt-0">
                    @livewire('profile.update-password-form')
                </div>

                <x-jet-section-border />
            @endif

            @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
                <div class="mt-10 sm:mt-0">
                    @livewire('profile.two-factor-authentication-form')
                </div>

                <x-jet-section-border />
            @endif

            <div class="mt-10 sm:mt-0">
                @livewire('profile.logout-other-browser-sessions-form')
            </div>

            <x-jet-section-border />

            <div class="mt-10 sm:mt-0">
                @livewire('profile.delete-user-form')
            </div>
        </div>
    </div> --}}
    <!-- Main Content -->
    <div class="section-header">
        <h1>Profile</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
            <div class="breadcrumb-item">Profile</div>
        </div>
    </div>

    <div class="section-body">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
              <div class="card">
                <div class="card-header">
                  <h4>Input Text</h4>
                </div>
                <div class="card-body">
                  <div class="form-group">
                    <label>Default Input Text</label>
                    <input type="text" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>Phone Number (US Format)</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="fas fa-phone"></i>
                        </div>
                      </div>
                      <input type="text" class="form-control phone-number">
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Password Strength</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="fas fa-lock"></i>
                        </div>
                      </div>
                      <input type="password" class="form-control pwstrength" data-indicator="pwindicator">
                    </div>
                    <div id="pwindicator" class="pwindicator">
                      <div class="bar"></div>
                      <div class="label"></div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Currency</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          $
                        </div>
                      </div>
                      <input type="text" class="form-control currency">
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Purchase Code</label>
                    <input type="text" class="form-control purchase-code" placeholder="ASDF-GHIJ-KLMN-OPQR">
                  </div>
                  <div class="form-group">
                    <label>Invoice</label>
                    <input type="text" class="form-control invoice-input">
                  </div>
                  <div class="form-group">
                    <label>Date</label>
                    <input type="text" class="form-control datemask" placeholder="YYYY/MM/DD">
                  </div>
                  <div class="form-group">
                    <label>Credit Card</label>
                    <input type="text" class="form-control creditcard">
                  </div>
                  <div class="form-group">
                    <label>Tags</label>
                    <input type="text" class="form-control inputtags">
                  </div>
                </div>
              </div>
            </div>
          </div>
    </div>
</x-app-layout>
