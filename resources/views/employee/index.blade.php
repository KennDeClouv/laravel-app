<x-app>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-slot:breadcrumb></x-slot:breadcrumb>
    
    <form action="">
        <div class="col-md-6 mb-1">
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1"><i class="bi bi-search"></i></span>
                <input type="text" class="form-control" name="search" placeholder="Search employee by data" value="{{ request('search') }}" aria-describedby="button-addon2">
                <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Search</button>
            </div>
        </div>
    </form>
    <div class="card">
        <div class="card-body">
            <div class="d-flex">
                <a href="{{ route('employee.create') }}" class="btn btn-success ms-auto">+ create</a>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Devisi</th>
                        <th>Position</th>
                        <th>Salary</th>
                        <th>address</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($employees as $e)
                        <tr>
                            <td>{{ $e->name }}</td>
                            <td>{{ $e->email }}</td>
                            <td>{{ $e->devision->devision }}</td>
                            <td>{{ $e->position }}</td>
                            <td>{{ $e->salary }}</td>
                            <td>{{ $e->address }}</td>
                            <td>
                                <div class="d-flex">
                                    <form action="{{ route('employee.delete', $e->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">delete</button>
                                    </form>
                                    <a href="employee/update/{{ $e->id }}"><button
                                            class="btn btn-warning ms-2">edit</button></a>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="fs-2">Employee not found</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
            {{ $employees->links() }}
        </div>
    </div>

</x-app>
