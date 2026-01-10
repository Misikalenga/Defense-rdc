@extends('admin.layout')

@section('title', 'Modifier: ' . $cabinetMember->name)

@section('content')
    <h1 class="text-2xl font-bold text-ink mb-6">Modifier le membre : {{ $cabinetMember->name }}</h1>
    
    <div class="bg-white overflow-hidden shadow-soft sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">
            <form action="{{ route('admin.cabinet-members.update', $cabinetMember) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @include('admin.cabinet_members._form', ['member' => $cabinetMember])
            </form>
        </div>
    </div>
@endsection
