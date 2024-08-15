<x-app>
    <x-slot:title>{{ $title }}</x-slot>
    <x-slot:breadcrumb></x-slot>

    <div class="d-flex mb-3">
        <a href="{{ route('devision.create') }}" class="btn btn-success ms-auto">+ create</a>
        {{-- <a href="" class="btn btn-info ms-2 text-white">+ add employee</a> --}}
        <button type="button" class="btn btn-info text-white ms-3" data-bs-toggle="modal" data-bs-target="#Modal">
            Add employee
        </button>

    </div>
    <div class="card">
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>Devisi</th>
                        <th>Employee</th>
                        <th>Jobs</th>
                        <th>Projects</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($devisions as $devision)
                        <tr>
                            <td>{{ $devision->devision }}</td>
                            {{-- <td>{{ $devision->employees }}</td> --}}
                            <td>
                                @foreach ($devision->employees as $employee)
                                    {{ $employee->name }}<br>
                                @endforeach
                            </td>
                            <td>{{ $devision->jobs }}</td>
                            <td>{{ $devision->projects }}</td>
                            <td>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    {{-- modal --}}
    <div class="modal fade" id="Modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Add employee</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form class="form" action="{{ route('devision.chance') }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="modal-body">
                        <div class="form-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group has-icon-left">
                                        <label for="first-name-icon">Select devision</label>
                                        <div class="position-relative">
                                            <fieldset class="form-group">
                                                <select class="form-select" id="basicSelect" name="devision_id">
                                                    <option value="no devision">Select devision</option>
                                                    @foreach ($devisions as $devision)
                                                        <option value="{{ $devision->id }}">{{ $devision->devision }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group has-icon-left">
                                        <label for="first-name-icon">Add Employee</label>
                                        <div class="position-relative">
                                            <fieldset class="form-group">
                                                <select class="form-select" id="basicSelect" name="add_employee">
                                                    <option value="no devision">Select employee</option>
                                                    @foreach ($employees as $employee)
                                                        <option value="{{ $employee->id }}">{{ $employee->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app>
