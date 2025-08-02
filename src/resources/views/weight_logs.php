@extends('layouts.app')

@section('css')

    <div class="flex justify-between items-center mb-6">
        <h1>PiGLy</h1>
            <a href="{{ route('weight_target.edit') }}" class="btn btn-outline-dark">
                <p>目標体重設定</p>
            </a>
            <form method="POST" action="{{ route('logout') }}">
                <button type="submit" class="btn btn-outline-dark">
                    <p>ログアウト</p>
                </button>
            </form>
        </div>
    </div>

    <div class="grid grid-cols-3 gap-4 text-center bg-white p-6 rounded shadow mb-6">
        <div>
            <th>目標体重</th>
            <p>{{ $targetWeight }}kg</p>
        </div>
        <div>
            <th>目標まで</th>
            <p>{{ $diffToGoal }}kg</p>
        </div>
        <div>
            <th>最新体重</th>
            <p>{{ $latestWeight }}kg</p>
        </div>
    </div>

    <form method="GET" action="{{ route('weight_logs.index') }}" class="flex items-center mb-4 space-x-2">
        <input type="date" name="start_date" class="form-control">
        <span>〜</span>
        <input type="date" name="end_date" class="form-control">
        <button type="submit" class="btn btn-dark">検索</button>
    </form>

    <div class="flex justify-end mb-2">
        <a href="{{ route('weight_logs.create') }}" class="btn btn-gradient-pink-purple">データ追加</a>
    </div>

    <div class="bg-white rounded shadow overflow-x-auto">
        <table class="min-w-full text-center">
            <thead class="border-b">
                <tr>
                    <th>日付</th>
                    <th>体重</th>
                    <th>食事摂取カロリー</th>
                    <th>運動時間</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($weightLogs as $log)
                <tr class="border-b hover:bg-gray-100">
                    <td>{{ $log->date }}</td>
                    <td>{{ $log->weight }}kg</td>
                    <td>{{ $log->calorie }}cal</td>
                    <td>{{ $log->exercise_time }}</td>
                    <td>
                        <a href="{{ route('weight_logs.edit', $log->id) }}">
                            <i class="fas fa-pen text-purple-400 hover:text-purple-600"></i>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        {{-- ページネーション --}}
        <div class="mt-4">
            {{ $weightLogs->links() }}
        </div>
    </div>
</div>
@endsection
