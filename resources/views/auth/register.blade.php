
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <label for="name" class="block font-medium text-sm text-gray-700">Name</label>
            <input id="name" type="text" class="block mt-1 w-full form-input" name="name" value="{{ old('name') }}" required autofocus autocomplete="name">
            @error('name')
                <p class="text-sm text-red-500 mt-2">{{ $message }}</p>
            @enderror
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <label for="email" class="block font-medium text-sm text-gray-700">Email</label>
            <input id="email" type="email" class="block mt-1 w-full form-input" name="email" value="{{ old('email') }}" required autocomplete="email">
            @error('email')
                <p class="text-sm text-red-500 mt-2">{{ $message }}</p>
            @enderror
        </div>

        <!-- Password -->
        <div class="mt-4">
            <label for="password" class="block font-medium text-sm text-gray-700">Password</label>
            <input id="password" type="password" class="block mt-1 w-full form-input" name="password" required autocomplete="new-password">
            @error('password')
                <p class="text-sm text-red-500 mt-2">{{ $message }}</p>
            @enderror
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <label for="password_confirmation" class="block font-medium text-sm text-gray-700">Confirm Password</label>
            <input id="password_confirmation" type="password" class="block mt-1 w-full form-input" name="password_confirmation" required autocomplete="new-password">
            @error('password_confirmation')
                <p class="text-sm text-red-500 mt-2">{{ $message }}</p>
            @enderror
        </div>

        <!-- Association Fields (optional based on user role selection) -->
        <!-- Role -->
<div class="mt-4">
    <label for="role" class="block font-medium text-sm text-gray-700">Register as</label>
    <select id="role" class="block mt-1 w-full form-select" name="role" required>
        <option value="user">User</option>
        <option value="association">Association</option>
        <option value="admin">Admin</option>
    </select>
    @error('role')
        <p class="text-sm text-red-500 mt-2">{{ $message }}</p>
    @enderror
</div>

            @error('role')
                <p class="text-sm text-red-500 mt-2">{{ $message }}</p>
            @enderror
            
            <!-- Association specific fields -->
            <div id="association-fields" style="display: none;">
                <label for="association_nom" class="block font-medium text-sm text-gray-700 mt-4">Association Name</label>
                <input id="association_nom" type="text" class="block mt-1 w-full form-input" name="association_nom" value="{{ old('association_nom') }}">
                @error('association_nom')
                    <p class="text-sm text-red-500 mt-2">{{ $message }}</p>
                @enderror

                <label for="association_description" class="block font-medium text-sm text-gray-700 mt-4">Description</label>
                <textarea id="association_description" class="block mt-1 w-full form-textarea" name="association_description">{{ old('association_description') }}</textarea>
                @error('association_description')
                    <p class="text-sm text-red-500 mt-2">{{ $message }}</p>
                @enderror

                <!-- Add more association fields as needed -->
            </div>
        </div>

        <div class="flex items-center justify-end mt-4">
            <a href="{{ route('login') }}" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">Already registered?</a>
            <button type="submit" class="ml-4 inline-block bg-blue-500 text-white rounded-md py-2 px-4 hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">Register</button>
        </div>
    </form>

