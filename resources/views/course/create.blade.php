<x-app-layout>
    <div class="flex items-start gap-3">
        <a href="{{ url()->previous() }}" class="hover:bg-zinc-200 p-2 rounded-full transition duration-150 ease-in">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
            </svg>
        </a>
        <div>
            <h2 class="text-2xl font-semibold">Add Course</h2>
            <p class="mt-1 text-sb text-zinc-700">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.
            </p>
        </div>
    </div>

    <div class="mt-16 border border-zinc-300 shadow rounded-lg py-5 px-8">
        <div class="max-w-xl">
            <form action="{{ route('courses.store') }}" method="POST" class="space-y-8">
                @csrf
                <div>
                    <x-forms.input-label for="name">
                        Name <span class="text-red-400">&ast;</span>
                    </x-forms.input-label>
                    <x-forms.input-text
                        name="name"
                        id="name"
                        placeholder="How to beat your shadow"
                    />
                    <x-forms.validation-error :field="__('name')" />
                </div>

                <div>
                    <x-forms.input-label for="duration">
                        Duration <span class="text-red-400">&ast;</span>
                    </x-forms.input-label>
                    <x-forms.input-text
                        type="number"
                        name="duration"
                        id="duration"
                        placeholder="6 months"
                    />
                    <x-forms.validation-error :field="__('duration')" />
                </div>
                <div>
                    <x-forms.input-label for="type">
                        Type <span class="text-red-400">&ast;</span>
                    </x-forms.input-label>
                    <x-forms.select name="type">
                        <option value="" selected disabled>--- Select type ---</option>
                        <option value="Accounting">Accounting</option>
                        <option value="Business">Business</option>
                        <option value="Computer Science">Computer Science</option>
                        <option value="Information Technology">Information Technology</option>
                        <option value="Mathematics">Mathematics</option>
                        <option value="Short Courses">Short Courses</option>
                        <option value="Finance">Finance</option>
                    </x-forms.select>
                    <x-forms.validation-error :field="__('type')" />
                </div>
                <div>
                    <x-forms.primary-button>
                        {{ __('Create') }}
                    </x-forms.primary-button>
                </div>
            </form>

        </div>
    </div>
</x-app-layout>

