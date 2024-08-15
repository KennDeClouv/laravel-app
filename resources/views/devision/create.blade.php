<x-app>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-slot:breadcrumb>Woi</x-slot:breadcrumb>
    <x-slot:breadcrumbCurrent>Woi</x-slot:breadcrumbCurrent>

    <div class="card">
        <div class="card-body">
            <div class="card-content">
                <form class="form form-vertical" method="POST" action="{{ route('devision.store') }}">
                    @csrf
                    <div class="form-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="first-name-icon">Devision name</label>
                                    <input type="text" class="form-control" placeholder="create new devision"
                                        id="first-name-icon" name="devision" required>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="first-name-icon">Jobs</label>
                                    <input type="text" class="form-control" placeholder="whats the job"
                                        id="first-name-icon" name="jobs" required>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="first-name-icon">Projects</label>
                                    <input type="text" class="form-control" placeholder="whats the projects"
                                        id="first-name-icon" name="projects" required>
                                </div>
                            </div>
                            {{-- <input type="hidden" name="employee_id" > --}}
                            {{-- <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="first-name-icon">Devisi</label>
                                    <div class="position-relative">
                                        <fieldset class="form-group">
                                            <select class="form-select" id="basicSelect" name="devision">
                                                <option value="No devision">Select devision</option>
                                                <option value="Web Developer">Web Developer</option>
                                                <option value="Mobile Developer">Mobile Developer</option>
                                                <option value="Designer">Designer</option>
                                                <option value="UIUX Designer">UIUX Designer</option>
                                                <option value="Bussiness">Bussiness</option>
                                            </select>
                                        </fieldset>
                                    </div>
                                </div>
                            </div> --}}
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
