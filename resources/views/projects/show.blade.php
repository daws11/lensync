@extends('layouts.app')
@section('title', 'Gantt Chart - ' . $project->name)

@section('content')
<div class="container">
    <h3>Gantt Chart for Project: {{ $project->name }}</h3>
    <div id="gantt_here" style="width:100%; height:60vh;"></div>
    
    <script>
         gantt.init("gantt_here");
         gantt.parse({
             data:[
                 @if (isset($tasks))
                     @foreach ($tasks as $task)
                     {id:{{ $task->id }}, text:"{{ $task->name }}", start_date:"{{ $task->start_date->format('Y-m-d') }}", duration:{{ $task->duration }}, progress: {{ $task->progress / 100 }}},
                     @endforeach
                 @endif
             ],
             links:[
                 // Tambahkan link jika ada dependensi
             ]
         });
    </script>
</div>
@endsection
