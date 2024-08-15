<x-app>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-slot:breadcrumb>Edit</x-slot:breadcrumb>
    <div class="card">
        <div class="card-body">
            <div class="card-content">
                <form class="form form-vertical" method="POST" action="{{ route('employee.update', $employees->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="form-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="first-name-icon">Name</label>
                                    <div class="position-relative">
                                        <input type="text" class="form-control" placeholder="Input your name"
                                            id="first-name-icon" name="name" value="{{ $employees->name }}" required>
                                        <div class="form-control-icon">
                                            <i class="bi bi-person"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="first-name-icon">Email</label>
                                    <div class="position-relative">
                                        <input type="email" class="form-control" placeholder="Input your email"
                                            id="first-name-icon" name="email" value="{{ $employees->email }}" required>
                                        <div class="form-control-icon">
                                            <i class="bi bi-envelope"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="first-name-icon">Devisi</label>
                                    <div class="position-relative">
                                        <fieldset class="form-group">
                                            <select class="form-select" id="basicSelect" name="devision_id">
                                                @foreach ($devisions as $devision)
                                                <option value="{{ $devision->id }}" @selected($employees->devision_id == $devision->id)>{{ $devision->devision }}
                                                </option>
                                            @endforeach
                                            </select>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="first-name-icon">Position</label>
                                    <div class="position-relative">
                                        <input type="text" class="form-control" placeholder="Position"
                                            id="first-name-icon" name="position" value="{{ $employees->position }}"
                                            required>
                                        <div class="form-control-icon">
                                            <i class="bi bi-person-badge"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="first-name-icon">Salary</label>
                                    <div class="position-relative">
                                        <input type="number" class="form-control" placeholder="Salary"
                                            id="first-name-icon" name="salary" value="{{ $employees->salary }}"
                                            required>
                                        <div class="form-control-icon">
                                            <i class="bi bi-cash"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="first-name-icon">address</label>
                                    <div class="position-relative">
                                        <input type="text" class="form-control" placeholder="Enter Address"
                                            id="first-name-icon" name="address" value="{{ $employees->address }}"
                                            required>
                                        <div class="form-control-icon">
                                            <i class="bi bi-house"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                <a href="{{ route('employee') }}" class="btn btn-light-secondary me-1 mb-1">Cancel</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</x-app>
