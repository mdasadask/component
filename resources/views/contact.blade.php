<x-layout>

    <x-form.name2 :label="'User number'" :type="'number'" placeholder="Enter number" />

    <x-alert type="primary" body="body part">
        <x-slot name="title">Title name</x-slot>
    </x-alert>
    <x-alert type="danger" body="danger body part">
        <x-slot name="title">Title name danget</x-slot>
    </x-alert>


</x-layout>