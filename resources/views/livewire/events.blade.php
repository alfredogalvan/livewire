<div>
    <div class="row">

        <div class="col-md-12">
            <div class="card ">
                <div class="card-header ">Event Backend</div>

                <div class="card-body">
                    <button class="btn btn-primary" wire:click="increment">+</button>
                    <h1>{{ $count }}</h1>
                </div>
            </div>
        </div>

    </div>

    <div class="row">

        <div class="col-md-12">
            <div class="card ">
                <div class="card-header ">Event Frontend</div>

                <div class="card-body">
                    <button class="btn btn-primary" wire:click="browserEventTest">Click for modal</button>
                </div>
            </div>
        </div>

    </div>


</div>
