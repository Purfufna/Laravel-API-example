@extends('master')
@section('content')

            {{ Form::open() }}
            <table class="table borderless">
                <tbody>
                    <tr>
                        <td>{{ Form::label('username', 'Username')}}
                            {{ Form::text('username', '')}}</td>
                    </tr>

                    <tr>
                        <td>{{ Form::label('score', 'Score') }}
                            {{ Form::text('score', '') }}</td>
                    </tr>
                </tbody>
            </table>
            <button type="submit" class="btn btn-success">Save</button>

            {{ Form::close() }}
@endsection
