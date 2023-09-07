@if (session()->has('createMessage'))
    <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 5000)" x-show="show" class="alertBox">
        {{ session('createMessage') }}
    </div>
@endif
