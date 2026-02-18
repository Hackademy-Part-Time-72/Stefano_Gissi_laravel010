<x-app>



 <div class="container mt-5">
        <h1>Accedi</h1>
        <form action="/login" method="POST">
            @csrf
            <div class="mb-3">
                <label for="formControl1" class="form-label">Email</label>
                <input type="email" value="{{ old('email') }}" class="form-control" id="formControl1"
                    placeholder="Inserisci Email" name="email">
                @error('email')
                    <div class="alert alert-danger" role="alert">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="formControl1" class="form-label">Password</label>
                <input type="password" class="form-control" id="formControl1" placeholder="Inserisci Password"
                    name="password">
                @error('password')
                    <div class="alert alert-danger" role="alert">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <button class="btn btn-info" type="submit">Login</button>

        </form>
    </div>



</x-app>