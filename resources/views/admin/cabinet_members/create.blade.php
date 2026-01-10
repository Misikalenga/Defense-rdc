@extends('admin.layout')

@section('title', 'Ajouter un Membre')

@section('content')
    <h1 class="text-2xl font-bold text-ink mb-6">Ajouter un nouveau membre au cabinet</h1>

    <div class="bg-white overflow-hidden shadow-soft sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">
            <form action="{{ route('admin.cabinet-members.store') }}" method="POST" enctype="multipart/form-data">
                @include('admin.cabinet_members._form')
            </form>
        </div>
    </div>
@endsection
