@extends('layouts.control') 
@section('side')
<broadcast-table inline-template>
    <div class="box">
        <div class="columns">
            <div class="column is-6 is-offset-6">
                <a href="broadcasts/create" class="button is-info is-pulled-right">
                    <icon name="ion-plus-round" size="18" style="margin-right: 4px;"></icon> Create Broadcast</a>
            </div>
        </div>
        <table class="table is-fullwidth">
            <thead>
                <tr>
                    <th>Line1</th>
                    <th>Line2</th>
                    <th>Start</th>
                    <th>End</th>
                    <th>Devices</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tr v-for="broadcast in broadcasts">
                <td>@{{broadcast.line1}}</td>
                <td>@{{broadcast.line2}}</td>
                <td>@{{moment(broadcast.start.date).format('hh:mm')}}</td>
                <td>@{{moment(broadcast.end.date).format('hh:mm')}}</td>
                <td>
                    <devices-modal :data="broadcast.devices"></devices-modal>
                </td>
                <td>
                    <a title="Edit" :href="'/broadcasts/' + broadcast.id + '/edit'" class="button is-info is-small">
                        <icon name="ion-ios-gear" size="18" large></icon>
                    </a>
                    <a title="Delete" @click.prevent="remove(broadcast.id)" class="button is-danger is-small">
                        <icon name="ion-close" size="18" large></icon>
                    </a>
                </td>
            </tr>
        </table>
    </div>
</broadcast-table>
@endsection