<div>
    <h1>Register a New User</h1>

    @if (session()->has('message'))
        <div style="color: green;">
            {{ session('message') }}
        </div>
    @endif

    <form wire:submit.prevent="register">
        <div>
            <label for="name">Name</label>
            <input type="text" id="name" wire:model="name">
            @error('name') <span style="color: red;">{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="email">Email</label>
            <input type="email" id="email" wire:model="email">
            @error('email') <span style="color: red;">{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="password">Password</label>
            <input type="password" id="password" wire:model="password">
            @error('password') <span style="color: red;">{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="password_confirmation">Confirm Password</label>
            <input type="password" id="password_confirmation" wire:model="password_confirmation">
        </div>

        <div>
            <label for="status">Status</label>
            <select id="status" wire:model="status">
                <option value="active">Active</option>
                <option value="inactive">Inactive</option>
            </select>
            @error('status') <span style="color: red;">{{ $message }}</span> @enderror
        </div>

        <button type="submit">Register</button>
    </form>
</div>

