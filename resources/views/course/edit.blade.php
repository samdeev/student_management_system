<x-app-layout>
    <div class="flex items-start gap-3">
        <a href="{{ url()->previous() }}" class="hover:bg-zinc-200 p-2 rounded-full transition duration-150 ease-in">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
            </svg>
        </a>
        <div>
            <h2 class="text-2xl font-semibold">Edit Course</h2>
            <p class="mt-1 text-sb text-zinc-700">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.
            </p>
        </div>
    </div>

    <div class="mt-16 border border-zinc-300 shadow rounded-lg py-5 px-8">
        <div class="max-w-xl">
            <form action="{{ route('courses.update', [$course]) }}" method="POST" class="space-y-8">
                @csrf
                @method('patch')
                <div>
                    <x-forms.input-label for="name">
                        Name <span class="text-red-400">&ast;</span>
                    </x-forms.input-label>
                    <x-forms.input-text
                        name="name"
                        id="name"
                        placeholder="How to beat your shadow"
                        value="{{ old('name', $course->name) }}"
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
                        value="{{ old('duration', $course->duration) }}"
                    />
                    <x-forms.validation-error :field="__('duration')" />
                </div>
                <div>
                    <x-forms.input-label for="type">
                        Type <span class="text-red-400">&ast;</span>
                    </x-forms.input-label>
                    <x-forms.select name="type">
                        <option value="" selected disabled>--- Select type ---</option>
                        <option value="Accounting" {{ $course->type == 'Accounting' ? 'selected' : '' }}>
                            Accounting
                        </option>
                        <option value="Business" {{ $course->type == 'Business' ? 'selected' : '' }}>
                            Business
                        </option>
                        <option value="Computer Science" {{ $course->type == 'Computer Science' ? 'selected' : '' }}>
                            Computer Science
                        </option>
                        <option value="Information Technology" {{ $course->type == 'Information Technology' ? 'selected' : '' }}>
                            Information Technology
                        </option>
                        <option value="Mathematics" {{ $course->type == 'Mathematics' ? 'selected' : '' }}>
                            Mathematics
                        </option>
                        <option value="Short Courses" {{ $course->type == 'Short Courses' ? 'selected' : '' }}>
                            Short Courses
                        </option>
                        <option value="Finance" {{ $course->type == 'Finance' ? 'selected' : '' }}>Finance</option>
                    </x-forms.select>
                    <x-forms.validation-error :field="__('type')" />
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
