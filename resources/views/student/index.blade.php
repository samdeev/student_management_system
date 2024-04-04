<x-app-layout>
    <div class="flex justify-between items-center">
        <div>
            <h2 class="text-2xl font-semibold">Students ({{ count($students) }})</h2>
            <p class="mt-1 text-sb text-zinc-600">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.
            </p>
        </div>
        <x-navigation-button href="{{ route('students.create') }}">{{ __('Add Student') }}</x-navigation-button>
    </div>

    <div class="mt-16 border border-zinc-300 shadow p-6 rounded-lg">
        <table class="w-full">
            <thead>
                <tr class="text-left border-b border-zinc-300 h-14">
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Address</th>
                    <th>Date of birth</th>
                    <th>Mobile number</th>
                </tr>
            </thead>
            <tbody>
            @foreach($students as $student)
                <tr class="h-14 border-t border-zinc-300">
                    <td class="font-medium">{{ $student->name }}</td>
                    <td class="text-zinc-600">{{ $student->gender }}</td>
                    <td class="text-zinc-600">{{ $student->address }}</td>
                    <td class="text-zinc-600">
                        {{ date_create($student->date_of_birth)->format('M d, Y') }}
                    </td>
                    <td class="text-zinc-600">{{ $student->mobile_number }}</td>
                    <td>
                        <a
                            href="{{ route('students.edit', [$student->id]) }}"
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
