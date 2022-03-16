 <div class="container">

     <button class="btn btn-success my-3 btn-create">+ create</button>
     <table class="table">
         <thead>
             <tr>
                 <th scope="col">No</th>
                 <th scope="col">Name</th>
                 <th scope="col">Address</th>
                 <th scope="col">Phone</th>
                 <th scope="col">email</th>
                 <th scope="col">Aksi</th>
             </tr>
         </thead>
         <tbody>

             @foreach ($hospitals as $hospital)
                 <tr>
                     <th scope="row">{{ $loop->iteration }}</th>
                     <td>{{ $hospital->name }}</td>
                     <td>{{ $hospital->address }}</td>
                     <td>{{ $hospital->phone }}</td>
                     <td>{{ $hospital->email }}</td>
                     <td>
                         <small><button onclick="del({{ $hospital->id }})"
                                 class="btn btn-danger p-1">delete</button></small>
                         <small><a class="btn btn-warning mt-1 p-1 text-white"
                                 href="{{ url('update/' . $hospital->id) }}">update</a></small>
                     </td>
                 </tr>
             @endforeach

         </tbody>
     </table>

     <div class="row justify-content-center">{{ $hospitals->links() }}</div>
 </div>

 {{-- Create Modal --}}
 <div class="modal fade bd-example-modal-lg createModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
     aria-hidden="true">
     <div class="modal-dialog modal-lg">
         <div class="modal-content">

             <form class="p-3 createForm">
                 <h6 class="text-center">Create New Hospital List</h6>
                 <div class="form-group">
                     <label for="exampleInputEmail1">Name</label>
                     <input name="name" type="text" class="form-control" placeholder="Enter Name">
                     <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                         else.</small>
                 </div>
                 <div class="form-group">
                     <label for="exampleInputEmail1">Address</label>
                     <input name="address" type="text" class="form-control" placeholder="Enter Address">
                     <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                         else.</small>
                 </div>
                 <div id="formHospital" class="form-group">
                     <label for="exampleInputEmail1">Phone Number</label>
                     <input name="phone" type="text" class="form-control" placeholder="Enter Phone Number">
                     <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                         else.</small>
                 </div>
                 <div class="form-group">
                     <label for="exampleInputEmail1">Email Number</label>
                     <input name="email" type="text" class="form-control" placeholder="Enter Email">
                     <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                         else.</small>
                 </div>

                 <button type="submit" class="btn btn-primary postCreate">Submit</button>
             </form>
         </div>
     </div>
 </div>
