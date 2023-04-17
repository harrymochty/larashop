            @if (Session::has('success'))
                <div class="alert alert-success p-2">
                    {{ Session::get('success') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger p-2">
                    @foreach ($errors->all() as $item)
                        <li>{{ $item }}</li>
                    @endforeach
                </div>
            @endif
