<x-app-layout>
 <!-- Responsive Table -->
 <div class="card">
                <!-- <h5 class="card-header">Responsive Table</h5> -->
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead>
                      <tr class="text-nowrap">
                      <th>ID</th>
                        <th>Nama</th>
                        <th>NPM</th>
                        <th>Kelas</th>
                        <th>Prodi</th>
                        <th>Judul TA</th>
                        <th>Ditujukan</th>
                        <th>Tempat</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ($pengajuans as $pengajuan)
                      <tr>
                        <td>{{ ++$i }}</td>
                        <td class="align-middle">{{ $pengajuan->nama }}</td>
                        <td class="align-middle">{{ $pengajuan->npm }}</td>
                        <td class="align-middle">{{ $pengajuan->kelas }}</td>
                        <td class="align-middle">{{ $pengajuan->prodi }}</td>
                        <td class="align-middle">{{ $pengajuan->judul }}</td>
                        <td class="align-middle">{{ $pengajuan->ditujukan }}</td>
                        <td class="align-middle">{{ $pengajuan->tempat }}</td>
                        <td>
                            <!-- <div>
                                <button type="button" class="btn btn-secondary">Detail</button>
                                <button type="button" class="btn btn-warning">Update</button>
                                <button type="button" class="btn btn-danger">Delete</button>
                            </div> -->

                            <form action="{{ route('pengajuans.destroy',$pengajuan->id) }}" method="POST">
   
                                <a class="btn btn-info" href="{{ route('pengajuans.show',$pengajuan->id) }}">Detail</a>
                
                                <a class="btn btn-primary" href="{{ route('pengajuans.edit',$pengajuan->id) }}">Edit</a>
               
                                @csrf
                                @method('DELETE')
                  
                                <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
              <!--/ Responsive Table -->
              </x-app-layout>