@extends ('layouts.app')
@section ('content')
<
    div class="container">
    <hi class="page-title"> studentsTutorial add form </h1>
    <div class=""style="margin-bottom:10px;margin-top:15px">
</div> 
<div class ="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class ="card-header">add</div>
            <div class ="card-body">
                @if (session('status'))
</div>
                <div class ="alert alert-success" role="alert">
                    <button type ="button" class="close" data-dismiss="alert">
                     @elseif   {{session('falied')}}
</div>
<form method="post" action ="{{ url('create')}}" class="needs
