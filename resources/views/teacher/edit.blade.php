<x-app-layout>
    <div class="flex items-start gap-3">
        <a href="{{ url()->previous() }}" class="hover:bg-zinc-200 p-2 rounded-full transition duration-150 ease-in">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
            </svg>
        </a>
        <div>
            <h2 class="text-2xl font-semibold">Edit Teacher</h2>
            <p class="mt-1 text-sb text-zinc-700">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.
            </p>
        </div>
    </div>

    <div class="mt-16 border border-zinc-300 shadow rounded-lg py-5 px-8">
        <div class="max-w-xl">
            <form action="{{ route('teachers.update', [$teacher]) }}" method="POST" class="space-y-8">
                @csrf
                @method('patch')
                <div>
                    <x-forms.input-label for="name">
                        Name <span class="text-red-400">&ast;</span>
                    </x-forms.input-label>
                    <x-forms.input-text
                        name="name"
                        id="name"
                        value="{{ old('name', $teacher->name) }}"
                        placeholder="Melody Marks"
                    />
                    <x-forms.validation-error :field="__('name')" />
                </div>
                <div>
                    <x-forms.input-label for="address">
                        Address <span class="text-red-400">&ast;</span>
                    </x-forms.input-label>
                    <x-forms.input-text
                        name="address"
                        id="address"
                        value="{{ old('address', $teacher->address) }}"
                        placeholder="Apt. 113 68970 Chanelle Ridge, New Teresita, MN 34271"
                    />
                    <x-forms.validation-error :field="__('address')" />
                </div>
                <div>
                    <x-forms.input-label for="date_of_birth">
                        Date of Birth <span class="text-red-400">&ast;</span>
                    </x-forms.input-label>
                    <x-forms.input-text
                        type="date"
                        name="date_of_birth"
                        id="date_of_birth"
                        value="{{ old('date_of_birth', $teacher->date_of_birth) }}"
                    />
                    <x-forms.validation-error :field="__('date_of_birth')" />
                </div>
                <div>
                    <x-forms.input-label for="mobile_number" :value="__('Mobile number')" />
                    <x-forms.input-text
                        name="mobile_number"
                        id="mobile_number"
                        placeholder="09123456789"
                        value="{{ old('mobile_number', $teacher->mobile_number) }}"
                    />
                    <x-forms.validation-error :field="__('mobile_number')" />
                </div>
                <div>
                    <x-forms.input-label for="employment_type">
                        Type <span class="text-red-400">&ast;</span>
                    </x-forms.input-label>
                    <x-forms.select name="employment_type">
                        <option value="" selected disabled>--- Select employment type ---</option>
                        <option value="Full-Time" {{ $teacher->employment_type === 'Full-Time' ? 'selected' : '' }}>
                            Full-Time
                        </option>
                        <option value="Part-Time" {{ $teacher->employment_type === 'Part-Time' ? 'selected' : '' }}>
                            Part-Time
                        </option>
                        <option value="Probation" {{ $teacher->employment_type === 'Probation' ? 'selected' : '' }}>
                            Probation
                        </option>
                        <option value="Contract" {{ $teacher->employment_type === 'Contract' ? 'selected' : '' }}>
                            Contract
                        </option>
                    </x-forms.select>
                    <x-forms.validation-error :field="__('employment_type')" />
                </div>
                <div>
                    <x-forms.input-label for="gender">
                        Gender <span class="text-red-400">&ast;</span>
                    </x-forms.input-label>
                    <x-forms.select name="gender">
                        <option value="" selected disabled>--- Select gender ---</option>
                        <option value="Male" {{ $teacher->gender == 'Male' ? 'selected' : '' }}>Male</option>
                        <option value="Female" {{ $teacher->gender == 'Female' ? 'selected' : '' }}>Female</option>
                    </x-forms.select>
                    <x-forms.validation-error :field="__('gender')" />
                </div>
                <div>
                    <x-forms.primary-button>
                        {{ __('Save Changes') }}
                    </x-forms.primary-button>
                </div>
            </form>

        </div>
    </div>
</x-app-layout>
