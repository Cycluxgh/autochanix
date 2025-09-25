<x-slot:account></x-slot>
<x-slot:oauth></x-slot>
<div class="pt-0">
    <form class="my-4">
        <div class="form-group mb-3">
            <label for="emailaddress" class="form-label">Email address</label>
            <input class="form-control" type="email" id="emailaddress" required="" placeholder="Enter your email">
        </div>

        <div class="form-group mb-0 row">
            <div class="col-12">
                <div class="d-grid">
                    <button class="btn btn-primary" type="submit"> Recover Password </button>
                </div>
            </div>
        </div>
    </form>
    <div class="text-center text-muted">
        <p class="mb-0">Change the mind  ?<a class='text-primary ms-2 fw-medium' href='/' wire:navigate>Back to Login</a></p>
    </div>
</div>
