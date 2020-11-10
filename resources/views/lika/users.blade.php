@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                @include('partials.flash')
            </div>

            <div class="col-md-12">
                <h2>Users ({{ $users->total() }})</h2>
            </div>
            <?php if (isset($users) && !empty($users) && $users->total() > 0): ?>

            <table id="id-users" class="table table-bordered display">
                <thead class="">
                    <tr>
                        <th class="text-center">ID</th>
                        <th class="text-center">Name</th>
                        <th class="text-center">Login</th>
                        <th class="text-center">E-mail</th>
                        <th class="text-center">Birth</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($users as $item): ?>
                        <tr>
                            <td class="text-center"><?=$item->id?></td>
                            <td class="text-center"><?=(!empty($item->name) ? $item->name : '-')?></td>
                            <td class="text-center"><?=(!empty($item->login) ? $item->login : '-')?></td>
                            <td class="text-left"><?=(!empty($item->email) ? $item->email : '-')?></td>
                            <td class="text-center"><?=(!empty($item->date_of_birth) ? $item->date_of_birth : '-')?></td>
                            <td class="text-center"><a href="{{ route('delete', ['id' => $item->id]) }}">delete</a></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

            <?php echo $users->render(); ?>

            <?php else: ?>

                <div style="margin-top:50px;">
                    <i>Not visits</i>
                </div>

            <?php endif; ?>
        </div>
    </div>
@endsection
