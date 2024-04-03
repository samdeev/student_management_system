<x-app-layout>
    <div class="flex items-start gap-3">
        <a href="{{ url()->previous() }}" class="hover:bg-zinc-200 p-2 rounded-full transition duration-150 ease-in">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
            </svg>
        </a>
        <div>
            <h2 class="text-2xl font-semibold">Add Student</h2>
            <p class="mt-1 text-sb text-zinc-700">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.
            </p>
        </div>
    </div>

    <div class="mt-16 border border-zinc-300 shadow rounded-lg p-10">
        <div class="max-w-xl space-y-8">
            <div>
                <x-forms.input-label for="name" :value="__('Name')" />
                <x-forms.input-text
                    name="name"
                    id="name"
                    placeholder="Melody Marks"
                />
                <x-forms.validation-error :field="__('name')" />
            </div>

            <div>
                <x-forms.input-label for="address" :value="__('Address')" />
                <x-forms.input-text
                    name="address"
                    id="address"
                    placeholder="Apt. 113 68970 Chanelle Ridge, New Teresita, MN 34271"
                />
                <x-forms.validation-error :field="__('address')" />
            </div>

            <div>
                <x-forms.input-label for="date_of_birth" :value="__('Date of Birth')" />
                <x-forms.input-text
                    type="date"
                    name="date_of_birth"
                    id="date_of_birth"
                />
                <x-forms.validation-error :field="__('address')" />
            </div>

            <div>
                <x-forms.input-label for="mobile_number" :value="__('Mobile number')" />
                <x-forms.input-text
                    name="mobile_number"
                    id="mobile_number"
                    placeholder="09123456789"
                />
                <x-forms.validation-error :field="__('address')" />
            </div>

            <div>
                <x-forms.input-label :value="__('Gender')" />
                <x-forms.select>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </x-forms.select>
            </div>

            <div>
                <x-forms.primary-button>
                    {{ __('Create') }}
                </x-forms.primary-button>
            </div>
        </div>
    </div>
</x-app-layout>
