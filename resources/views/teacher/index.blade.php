<x-app-layout>
    <div class="flex justify-between items-center">
        <div>
            <h2 class="text-2xl font-semibold">Teachers ({{ count($teachers) }})</h2>
            <p class="mt-1 text-sb text-zinc-600">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.
            </p>
        </div>
        <x-navigation-button href="{{ route('teachers.create') }}">{{ __('Add Teacher') }}</x-navigation-button>
    </div>

    <div class="mt-16 border border-zinc-300 shadow p-6 rounded-lg">
        <table class="w-full">
            <thead>
            <tr class="text-left border-b border-zinc-300 h-14">
                <th>Name</th>
                <th>Gender</th>
                <th>Address</th>
                <th>Type</th>
                <th>Date of birth</th>
                <th>Mobile number</th>
            </tr>
            </thead>
            <tbody>
            @foreach($teachers as $teacher)
                <tr class="h-14 border-t border-zinc-300">
                    <td class="font-medium">{{ $teacher->name }}</td>
                    <td class="text-zinc-600">{{ $teacher->gender }}</td>
                    <td class="text-zinc-600">{{ $teacher->address }}</td>
                    <td class="text-zinc-600">{{ $teacher->employment_type }}</td>

                    <td class="text-zinc-600">
                        {{ date_create($teacher->date_of_birth)->format('M d, Y') }}
                    </td>
                    <td class="text-zinc-600">{{ $teacher->mobile_number }}</td>
                    <td>
                        <a
                            href="{{ route('teachers.edit', [$teacher->id]) }}"
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
