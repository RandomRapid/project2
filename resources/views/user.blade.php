<?php $header = "User page header";?>
<x-app-layout>
    <x-slot name="header">
        {{ $header }}
    </x-slot>
    <h1>User page: visible to logged in users</h1>
</x-app-layout>
