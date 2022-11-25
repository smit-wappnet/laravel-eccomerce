<x-layout-costomer>
    <x-slot name='content'>
        <section class="py-5 content">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row justify-content-center">
                    <div class="col-4">

                        @if (isset($errors))
                            @foreach ($errors->all() as $error)
                                <div class="alert alert-danger" role="alert">
                                    {{ $error }}
                                </div>
                            @endforeach
                        @endif
                        @if (Session::has('message'))
                            <div class="alert alert-danger">
                                {{ Session::get('message') }}
                            </div>
                        @endif
                        <form method="POST" action="/login">
                            @csrf
                            <div class="mb-3">
                                <label for="email" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="email" name="email">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password">
                            </div>
                            <button type="submit" class="btn btn-primary">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </x-slot>
</x-layout-costomer>
