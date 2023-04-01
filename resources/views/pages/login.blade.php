@include('profile.partials.admin-head')
<body class="mb-48">

<div class="mx-4">
	<div class="bg-gray-50 border border-gray-200 p-10 rounded max-w-lg mx-auto mt-24">
		<header class="text-center">
			<h2 class="text-2xl font-bold uppercase mb-1">
				Log in
			</h2>
		</header>

		<form action="/login/authenticate" method="POST">
			@csrf
			<div class="mb-6">
				<label for="email" class="inline-block text-lg mb-2">Email</label>
				<input type="email" class="border border-gray-200 rounded p-2 w-full" name="email"/>
				<!-- Error Example -->
				@error('email')
				<p class="text-red-500 text-xs mt-1">
					{{ $message }}
				</p>
				@enderror

			</div>

			<div class="mb-6">
				<label for="password" class="inline-block text-lg mb-2">
					Password
				</label>
				<input type="password" class="border border-gray-200 rounded p-2 w-full" name="password"/>
			</div>
			@error('password')
			<p class="text-red-500 text-xs mt-1">
				{{ $message }}
			</p>
			@enderror


			<div class="mb-6">
				<button type="submit" class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
					Sign In
				</button>
			</div>


			<div class="mt-8">
				<p>
					Don't have an account?
					<a href="/register" class="text-laravel">Register</a>
				</p>
			</div>
            <div class="mt-8">
				<p>
					<a href="/" class="text-laravel"><i class="fa fa-solid fa-arrow-left">Back to homepage</i></a>
				</p>
			</div>
		</form>
	</div>
</div>
<x-flash-message/>
@livewireScripts
</body>
