<li class="border border-b-[#4F9298]">
	<a href="{{ url('/appointment/' . $patient->id) }}"
		 class="flex items-center justify-start w-full px-4 py-3 hover:bg-gray-50 dark:hover:bg-gray-800">
		<div class="flex items-center justify-between mr-3">
			<div
				class="relative inline-flex items-center justify-center w-10 h-10 overflow-hidden rounded-full bg-[#4F9298]">
				<span class="font-medium text-gray-600 dark:text-gray-300">
					{{ $patient->firstName[0].$patient->lastName[0] }}
				</span>
			</div>
		</div>
		<div>
			<p class="text-sm text-gray-500 dark:text-gray-400">Appointment Time:
				<span class="font-medium text-gray-400">
					@if($patient->appointmentDate == NULL)
						Unknown
					@else
						{{ $patient->appointmentDate }}
					@endif
				</span>
			</p>
			<p class="text-sm text-gray-400">Phone Number:
                <span class="font-medium text-gray-400">{{ $patient->phoneNum}}</span></p>
			<p class="text-sm text-gray-400">
				Email: {{ $patient->email }}
			</p>
		</div>
	</a>
</li>
