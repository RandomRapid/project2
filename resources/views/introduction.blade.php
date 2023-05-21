<?php $header = "Introduction page header";?>
<x-app-layout>
    <x-slot name="header">
        {{ $header }}
    </x-slot>
    <h1>Introduction page: visible to all users</h1>
</x-app-layout>
