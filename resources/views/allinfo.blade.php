@extends('layouts.app')

@section('title', 'All infomation')
@section('head', 'ข้อมูลทั้งหมด')
@section('content')
                    <table class="table" id="allinfo">
                        <thead>
                            <th>ชื่อ</th>
                            <th>นามสกุล</th>
                            <th>ชื่อเล่น</th>
                            <th></th>
                            <th></th>
                        </thead>
                        <tbody>
                            @foreach($allinfo as $user)
                                @if($user->status == 0) <tr class="info"> @else 
                                        @if($user->status == 1) <tr class="danger"> @else
                                            @if($user->status == 2) <tr class="success">
                                        @else<tr class="warning">
                                        @endif
                                    @endif
                                @endif
                                <td>{{ $user->firstname }}</td>
                                <td>{{ $user->lastname }}</td>
                                <td>{{ $user->nickname }}</td>
                                <td><button type="button" class="btn btn-primary btn-block btn-xs" onclick="newPage({{ $user->id }})">Edit</button>
                                </td>
                                <td>
                                    <form method="post" enctype="multipart/form-data" action="{{ route('skipID', $user->id) }}">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        @if($user->status == 1)
                                            <input type="submit" value="Skip" class="btn btn-danger btn-block btn-xs">
                                        @else
                                            @if($user->status == 3)
                                            <input type="submit" value="Comeback" class=" btn btn-warning btn-block btn-xs">
                                            @else
                                            @endif
                                        @endif
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @endsection