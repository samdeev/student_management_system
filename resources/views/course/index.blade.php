<x-app-layout>
    <div class="flex justify-between items-center">
        <div>
            <h2 class="text-2xl font-semibold">Courses ({{ count($courses) }})</h2>
            <p class="mt-1 text-sb text-zinc-600">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.
            </p>
        </div>
        <x-navigation-button href="{{ route('courses.create') }}">{{ __('Add Course') }}</x-navigation-button>
    </div>

    <div class="mt-16 border border-zinc-300 shadow p-6 rounded-lg">
        <table class="w-full">
            <thead>
            <tr class="text-left border-b border-zinc-300 h-14">
                <th>Name</th>
                <th>Type</th>
                <th>Duration</th>
            </tr>
            </thead>
            <tbody>
            @foreach($courses as $course)
                <tr class="h-14 border-t border-zinc-300">
                    <td class="font-medium">{{ $course->name }}</td>
                    <td class="text-zinc-600">{{ $course->type }}</td>
                    <td class="text-zinc-600">{{ $course->duration }}
                        {{ $course->duration > 1 ? 'months' : 'month' }}
                    </td>
                    <td>
                        <a
                            href="{{ route('courses.edit', [$course->id]) }}"
                            class="text-sb text-indigo-600 font-medium hover:text-indigo-500 transition"
                        >
                            Edit
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
