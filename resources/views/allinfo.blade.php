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
                        </tbody>
                    </table>
                    @endsection

@section('addonScript')
                    <script type="text/javascript">
                        $(document).ready(update());
                        var timer = setInterval(update, 2000);
                    </script>
@endsection