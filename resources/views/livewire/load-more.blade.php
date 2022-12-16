<div>

    <div class="row">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">City Name</th>
                    <th scope="col">State</th>
                    <th scope="col">State Code</th>
                    <th scope="col">Country</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cities as $city)
                    <tr>
                        <th scope="row">{{ $city->id }} - {{ $city->name }}</th>
                        <td>{{ $city->state->name }}</td>
                        <td>{{ $city->state->code }}</td>
                        <td>{{ $city->state->country->name }}</td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>

    <div class="row">
        <button  class="btn btn-primary" wire:click="increment">Load 30 more</button>
    </div>

</div>
