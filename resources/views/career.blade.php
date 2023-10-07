<x-layout>
    @if($message = Session::get('success'))
    <div class="alert alert-success alert-block text-center">
        <strong>{{$message}}</strong>
    </div>
    @endif
    <div class="container">
        <div class="row mt-5">

            <div class="col-lg-6">
                <div class="card" style="  padding-top: 30px;
  padding-right: 30px;
  padding-bottom: 30px;
  padding-left: 30px;">
                    <div class="card-body p-0">
                        <h1 style="text-align:center;">Apply Now!</h1>
                        <form action="/storeCareerApplication" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea class="form-control" id="message" name="message" rows="4"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="file">Attach Resume</label>
                                <input type="file" name='file' class="form-control-file" id="file" name="file" accept=".pdf" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mt-5">
                <img src="{{ asset('/assets/images/career.png')}}" alt="Logo" style="width: 100%; max-width: 400px; height: 300px; margin-left:5rem">
            </div>
        </div>
    </div>
</x-layout>