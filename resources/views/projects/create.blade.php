@extends('layouts.app')
@section('title', 'Create Project - LEN Sync')
@section('content')


<div class="container mt-4">
    <form action="{{ route('projects.store') }}" method="POST" class="space-y-6">
    @csrf


        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        <div>
            <x-input-label for="name" :value="__('Nama Project')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="owner_name" :value="__('Nama Pemilik Pekerjaan')" />
            <x-text-input id="owner_name" class="block mt-1 w-full" type="text" name="owner_name" :value="old('owner_name')" required />
            <x-input-error :messages="$errors->get('owner_name')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="description" :value="__('Deskripsi Proyek')" />
            <x-text-input id="description" class="block mt-1 w-full" type="text" name="description" :value="old('description')" required />
            <x-input-error :messages="$errors->get('description')" class="mt-2" />
        </div>

        <div class="grid-create-project grid-cols-2 gap-4">
            <div>
                <x-input-label for="contract_start_date" :value="__('Contract Duration Start')" />
                <x-text-input id="contract_start_date" class="block mt-1 w-full" type="date" name="contract_start_date" :value="old('contract_start_date')" required />
            </div>
            <div>
                <x-input-label for="contract_end_date" :value="__('Contract Duration Finish')" />
                <x-text-input id="contract_end_date" class="block mt-1 w-full" type="date" name="contract_end_date" :value="old('contract_end_date')" required />
            </div>
        </div>

        <div class="grid-create-project grid-cols-2 gap-4">
            <div>
                <x-input-label for="warranty_start_date" :value="__('Warranty Duration Start')" />
                <x-text-input id="warranty_start_date" class="block mt-1 w-full" type="date" name="warranty_start_date" :value="old('warranty_start_date')" required />
            </div>
            <div>
                <x-input-label for="warranty_end_date" :value="__('Warranty Duration Finish')" />
                <x-text-input id="warranty_end_date" class="block mt-1 w-full" type="date" name="warranty_end_date" :value="old('warranty_end_date')" required />
            </div>
        </div>

        <div class="grid-create-project grid-cols-2 gap-4">
        <div>
            <x-input-label for="contract_value" :value="__('Contract Value')" />
            <x-text-input id="contract_value" class="block mt-1 w-full" type="text" name="contract_value" :value="old('contract_value')" required />
            <x-input-error :messages="$errors->get('contract_value')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="business_scheme" :value="__('Bisnis Skema')" />
            <x-text-input id="business_scheme" class="block mt-1 w-full" type="text" name="business_scheme" :value="old('business_scheme')" required />
            <x-input-error :messages="$errors->get('business_scheme')" class="mt-2" />
        </div>
        </div>
        <div class="grid-create-project grid-cols-2 gap-4">
        <div>
            <x-input-label for="funding_source" :value="__('Sumber Dana')" />
            <x-text-input id="funding_source" class="block mt-1 w-full" type="text" name="funding_source" :value="old('funding_source')" required />
            <x-input-error :messages="$errors->get('funding_source')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="business_line" :value="__('Lini bisnin')" />
            <x-text-input id="business_line" class="block mt-1 w-full" type="text" name="business_line" :value="old('business_line')" required />
            <x-input-error :messages="$errors->get('business_line')" class="mt-2" />
        </div>
        </div>
        
        <div class="flex items-center justify-end mt-4">
            <x-primary-button class="ml-4">
                {{ __('Create Project') }}
            </x-primary-button>
        </div>
    </form>
</div>
@endsection