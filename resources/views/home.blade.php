@extends('layouts.app')

@section('content')

<h1>Home</h1>

<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic pariatur eum asperiores eius sequi architecto ullam iusto dignissimos earum. Quisquam, ipsum illum. Temporibus natus quo provident, repellendus asperiores eaque veritatis?</p>


@endsection

@section('sidebar')
    @parent
<p>This is the appended sidebar</p>
@endsection