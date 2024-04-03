<x-app-layout>
    <div class="flex justify-between items-center">
        <div>
            <h2 class="text-2xl font-semibold">Students (1)</h2>
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
                <tr class="h-14">
                    <td>Test</td>
                    <td>Test</td>
                    <td>Test</td>
                    <td>Test</td>
                    <td>Test</td>
                </tr>
            </tbody>
        </table>
    </div>
</x-app-layout>
