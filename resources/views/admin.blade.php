<?php $header = "Admin page header";?>
<x-app-layout>
    <x-slot name="header">
        {{ $header }}
    </x-slot>
    <h1>Admin page: visible only to admin</h1>
</x-app-layout>
