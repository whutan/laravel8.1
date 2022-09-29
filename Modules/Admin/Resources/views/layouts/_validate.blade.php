{{-- @if (session()->has('success'))
    <div class="alert alert-success alert-dismissible wfalert" role="alert">
        <button class="close" type="button" data-dismiss="alert" aria-label="Close"><span class="mdi mdi-close"
                aria-hidden="true"></span></button>
        <div class="icon"><span class="mdi mdi-check"></span></div>
        <div class="message"><strong></strong>{{ session()->get('success') }}</div>
    </div>
@endif --}}




@if ($errors->any())

    <div class="alert alert-warning alert-simple alert-dismissible" role="alert">
        <button class="close" type="button" data-dismiss="alert" aria-label="Close"><span class="mdi mdi-close"
                aria-hidden="true"></span></button>


        <div class="icon"> <span class="mdi mdi-alert-triangle"></span></div>
        <div class="message">
            @foreach ($errors->all() as $error)
                {{ $error }}</br>
            @endforeach
        </div>



    </div>

@endif


@foreach (['success', 'warning', 'danger'] as $t)
    @if (session()->has($t))
        <div class="alert alert-{{ $t }} alert-simple alert-dismissible" role="alert">
            <button class="close" type="button" data-dismiss="alert" aria-label="Close"><span class="mdi mdi-close"
                    aria-hidden="true"></span></button>
            <div class="icon"> <span class="mdi mdi-check"></span></div>
            <div class="message"><strong>Good!</strong>
                {{ session()->get($t) }}
            </div>
        </div>
    @endif
@endforeach
