<x-app-layout>
    <div class="card">
        {{-- card header --}}
        <div class="card-header">
            Edit Profil
        </div>

        {{-- card body --}}
        <div class="card-body">
            <form action="{{ route('profile.update') }}" method="POST">
                @csrf
                @method('PATCH')

                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" class="form-control" name="name" value="{{ old('name', $user->name) }}">
                </div>

                <div class="form-group mt-2">
                    <label for="">Email</label>
                    <input type="email" class="form-control" name="email" value="{{ old('email', $user->email) }}">
                </div>

                <div class="form-group mt-2">
                    <label for="">Password</label>
                    <input type="text" class="form-control" name="password" value="{{ old('password', $user->password) }}">
                </div>

                <button class="btn btn-primary mt-3" type="submit">Simpan</button>
            </form>
        </div>
    </div>
</x-app-layout>