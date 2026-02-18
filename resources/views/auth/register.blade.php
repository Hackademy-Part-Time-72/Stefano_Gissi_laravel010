<x-app>

 <div class="container mt-5">
        <h1>Registrati</h1>
        <form action="/register" method="POST">
            @csrf
            <div class="mb-3">
                <label for="formControl1" class="form-label">Username</label>
                <input type="name" value="{{ old('name') }}" class="form-control" id="formControl1"
                    placeholder="Inserisci Username" name="name">
                @error('name')
                    <div class="alert alert-danger" role="alert">
                        {{ $message }}
                    </div>
                @enderror
            </div>
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
            <div class="mb-3">
                <label for="formControl1" class="form-label">Conferma Password</label>
                <input type="password" class="form-control" id="formControl1" placeholder="Inserisci Confema Password"
                    name="password_confirmation">
                @error('password_confirmation')
                    <div class="alert alert-danger" role="alert">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <button class="btn btn-info" type="submit">Registrati</button>

        </form>
    </div>

</x-app>